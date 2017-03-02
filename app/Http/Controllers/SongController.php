<?php

namespace App\Http\Controllers;

use App\Song;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Cache;

class SongController extends Controller
{

  /**
   * Display all the songs from the database
   * @return \Illuminate\Http\JsonResponse the response
   */
  public function index() {
    $songs = Cache::remember('CacheSongs', 20/60, function(){
        return Song::with('artist')->with('gameVersion')->paginate(10);
    });

    return response()->json([
      'status'=>'ok',
      'next'=>$songs->nextPageUrl(),
      'previous'=>$songs->previousPageUrl(),
      'data'=>$songs->items()
    ], 200);
  }

  /**
   * Store a song on the database
   * @param Request $request the request sent by the client
   * @return Response the response
   */
  public function store(Request $request) {
    if (!$request->file('bannerImage') || !$request->input('id') || !$request->input('title') ||
      !$request->input('artist_id') || !$request->input('bpm') ||  !$request->input('game_version_id')) {
      return response([
        'errors' => array([
          'code' => 422,
          'message' => 'Incomplete data, please make sure that all the fields are on the request'
        ])
      ], 422);
    }

    $image = $request->file('bannerImage');
    $imageName = 'PIUapi_'.md5($request->input('id')).'.'.$image->getClientOriginalExtension();
    $imagePath = public_path().'/images/songs/';
    $image->move($imagePath, $imageName);
    $imageLink = 'http://localhost:8000/images/songs/'.$imageName;

    $newSong = Song::create([
      'id'=>$request->input('id'),
      'title'=>$request->input('title'),
      'bpm'=>$request->input('bpm'),
      'bannerImage'=>$imageLink,
      'artist_id' => $request->input('artist_id'),
      'game_version_id' => $request->input('game_version_id')
    ]);

    $response = Response::make(json_encode(['data' => $newSong]), 201)
      ->header('Location', 'http://localhost:8000/api/v1.0/songs/'.$newSong->id)
      ->header('Content-Type', 'application/json');
    return $response;
  }

  /**
   * Show a song by the id from the database
   * @param $id the id of the song
   * @return \Illuminate\Http\JsonResponse the response
   */
  public function show($id) {
    $song = Song::with('artist', 'gameVersion', 'levels')->find($id);

    if (!$song) {
      return response()->json([
        'errors'=>array(
          'code' => 404,
          'message' => $this->notSongFound()
        )
      ], 404);
    }

    return response()->json([
      'status'=>'ok',
      'data'=>$song
    ], 202);
  }

  /**
   * Update an existing song from the database
   * @param Request $request the request with the fields to update
   * @param $id the id of the song to update
   * @return mixed the response
   */
  public function update(Request $request, $id) {
    $song = Song::find($id);

    if (!$song) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notSongFound()
        ])
      ], 404);
    }

    $title = $request->input('title');
    $bpm = $request->input('bpm');
    $artistId = $request->input('artist_id');
    $gameVersionId = $request->input('game_version_id');

    // If is a PATCH request, then
    if ($request->method() === 'PATCH') {
      $band = false; // Band to control if the song has been modified
      if ($title) {
        $song->title = $title;
        $band = true;
      }
      if ($artist) {
        $song->artist = $artist;
        $band = true;
      }
      if ($bpm) {
        $song->bpm = $bpm;
        $band = true;
      }
      if ($bannerImage) {
        $song->bannerImage = $bannerImage;
        $band = true;
      }

      // If some data was modified, we update the song, and then, save the song object
      if ($band) {
        $song->save();
        return response()->json([
          'status' => 'ok',
          'data' => $song
        ], 200);
      } else { // Else, send a message to client
        return response()->json([
          'errors' => array([
            'code' => 304,
            'message' => 'No song data has been changed'
          ])
        ], 304);
      }
    }

    // If the request is no PATCH, then is a PUT, so
    if (!$title || !$artistId || !$bpm || !$gameVersionId) {
      return response()->json([
        'errors' => array([
          'code' => 422,
          'message' => 'Missing values to complete the update'
        ])
      ], 422);
    }

    $song->title = $title;
    $song->artist_id = $artistId;
    $song->bpm = $bpm;
    $song->game_version_id = $gameVersionId;
    $song->save();

    return response()->json([
      'status' => 'ok',
      'data' => $song
    ], 202);
  }

  /**
   * Function ti upload and update a bannerImage's song
   * @param  Request $request [description]
   * @param  [type]  $id      [description]
   * @return [type]           [description]
   */
  public function image(Request $request, $id) {
    if (!$request->file('bannerImage')) {
      return response()->json([
        'errors' => array([
          'code' => 422,
          'message' => 'Missing values to complete the update'
        ])
      ], 422);
    }

    $song = Song::find($id);

    if (!$song) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notSongFound()
        ])
      ], 404);
    }

    $image = $request->file('bannerImage');
    $imageName = $id . '_' . md5(time()) . '.' . $image->getClientOriginalExtension();
    $imagePath = public_path().'/images/songs/';
    $image->move($imagePath, $imageName);
    $imageLink = 'http://localhost:8000/images/songs/'.$imageName;

    $song->bannerImage = $imageLink;
    $song->save();

    return response()->json([
      'status' => 'ok',
      'data' => $song
    ], 202);
  }

  /**
   * Delete a song from the database
   * @param $id the song's id
   * @return mixed the response
   */
  public function destroy($id) {
    $song = Song::find($id);

    if (!$song) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notSongFound()
        ])
      ], 404);
    }

    $song->delete();

    return response()->json([
      'code' => 204,
      'message' => 'The song has been removed successfully'
    ], 204);
  }

  /**
   * ################################################################################################################
   *                                             PRIVATE METHODS
   * ################################################################################################################
   */

  private function notSongFound($id){
    return 'The Song with the id: \''.$id.'\' has not be found';
  }
}
