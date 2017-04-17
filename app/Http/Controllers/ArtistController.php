<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Cache;

class ArtistController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index','show']);
    }

  /**
   * Display all the artists
   * @return \Illuminate\Http\JsonResponse
   */
  public function index(Request $request)
  {
    $page = $request->has('page') ? $request->query('page') : 1;
    $totalArtists = Artist::all()->count();

    if ($request->has('page')) {
        $artists = Cache::remember('CacheArtists_page_' . $page, 20/60, function(){
            return Artist::with('songs')->paginate(10)->items();
        });
    } else {
        $artists = Cache::remember('CacheArtists_full_' . $page, 20/60, function(){
            return Artist::with('songs')->get();
        });
    }

    return response()->json([
      'status'=>'ok',
      'data'=>$artists,
      'totalItems'=>$totalArtists
    ], 200);
  }

  /**
   * Store an artist on the database
   * @param Request $request Request $request the request sent by the client
   * @return Response The response
   */
  public function store(Request $request)
  {
    // Verify is all the fields are on the user's request
    if (!$request->input('name')){
      return response([
        'errors' => array([
          'code' => 422,
          'message' => 'Incomplete data, please make sure that all the fields are on the request'
        ])
      ], 422);
    }

    $newArtist = Artist::create($request->all());
    $response = Response::make(json_encode(['data' => $newArtist]), 201)
      ->header('Location', env('BASE_PATH') . 'api/' . env('API_VER') . 'artists/'.$newArtist->id)
      ->header('Content-Type', 'application/json');
    return $response;
  }

  /**
   * Show an artist by the id from the database
   * @param $id the id of the artist
   * @return mixed the response
   */
  public function show($id)
  {
    $artist = Artist::with('songs.gameVersion')->find($id);

    if (!$artist) {
      return response()->json([
        'errors'=>array(
          'code' => 404,
          'message' => $this->notArtistFound($id)
        )
      ], 404);
    }

    $artist->songs;
    return response()->json([
      'status'=>'ok',
      'data'=>$artist
    ], 202);
  }

  /**
   * Update an existing artist from the database
   * @param Request $request the request with the fields to update
   * @param $id id of the artist to update
   * @return mixed the response
   */
  public function update(Request $request, $id)
  {
    $artist = Artist::find($id);

    if (!$artist) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notArtistFound($id)
        ])
      ], 404);
    }

    $name = $request->input('name');

    // If is a PARCH request, then
    if ($request->method() === 'PATCH') {
      $band = false; // Band to control if the song has been modified
      if ($name) {
        $artist->name = $name;
        $band = true;
      }

      // If some data was modified, we update the song, and then, save the song object
      if ($band) {
        $artist->save();
        return response()->json([
          'status' => 'ok',
          'data' => $artist
        ], 200);
      } else { // Else, send a message to client
        return response()->json([
          'errors' => array([
            'code' => 304,
            'message' => 'No artist data has been changed'
          ])
        ], 304);
      }
    }

    // If the request is no PATCH, then is a PUT, so
    if (!$name) {
      return response()->json([
        'errors' => array([
          'code' => 422,
          'message' => 'Missing values to complete the update'
        ])
      ], 422);
    }

    $artist->name = $name;
    $artist->save();
    return response()->json([
      'status' => 'ok',
      'data' => $artist
    ], 202);
  }

  public function destroy($id)
  {
    $artist = Artist::find($id);

    if (!$artist) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notArtistFound($id)
        ])
      ], 404);
    }

    $artist->delete();
    return response()->json([
      'code' => 204,
      'message' => 'The artist has been removed successfully'
    ], 204);
  }

  /**
   * ################################################################################################################
   *                                             PRIVATE METHODS
   * ################################################################################################################
   */

  private function notArtistFound($id)
  {
    return 'The Artist with the id: \''.$id.'\' has not be found';
  }
}

