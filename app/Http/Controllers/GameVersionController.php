<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameVersion;
use Response;
use Illuminate\Support\Facades\Cache;

class GameVersionController extends Controller
{

  /**
   * Display all the game versions from the database
   * @return mixed the response
   */
  public function index() {
    $gameVersions = Cache::remember('CacheGameVersions', 20/60, function(){
        return GameVersion::paginate(10);
    });

    return response()->json([
      'status'=>'ok',
      'next'=>$gameVersions->nextPageUrl(),
      'previous'=>$gameVersions->previousPageUrl(),
      'data'=>$gameVersions->items()
    ], 200);
  }

  /**
   * Store a game version on the database
   * @param Request $request the request sent by the client
   * @return Response the response
   */
  public function store(Request $request) {
    // Verify is all the fields are on the user's request
    if (!$request->file('banner_image') || !$request->input('name') || !$request->input('launch_year')){
      return response([
        'errors' => array([
          'code' => 422,
          'message' => 'Incomplete data, please make sure that all the fields are on the request'
        ])
      ], 422);
    }

    $image = $request->file('banner_image');
    $imageName = 'PIUapi_'.md5($request->input('id')).'.'.$image->getClientOriginalExtension();
    $imagePath = public_path().'/images/gameVersions/';
    $image->move($imagePath, $imageName);
    $imageLink = 'http://localhost:8000/images/gameVersions/'.$imageName;

    $newGameVersion = GameVersion::create([
      'name' => $request->input('name'),
      'launch_year' => $request->input('launch_year'),
      'banner_image' => $imageLink
    ]);

    $response = Response::make(json_encode(['data' => $newGameVersion]), 201)
      ->header('Location', 'http://localhost:8000/api/v1.0/artists/'.$newGameVersion->id)
      ->header('Content-Type', 'application/json');
    return $response;
  }

  /**
   * Show a game version by the id from the database
   * @param $id id of the game version
   * @return mixed the response
   */
  public function show($id) {
    $gameVersion = GameVersion::with('songs.artist')->find($id);

    if (!$gameVersion) {
      return response()->json([
        'errors'=>array(
          'code' => 404,
          'message' => $this->notGameVersionFound($id)
        )
      ], 404);
    }

    return response()->json([
      'status'=>'ok',
      'data'=>$gameVersion
    ], 202);
  }

  /**
   * Update an existing game version from the database
   * @param Request $request the request with the fields to update
   * @param $id id of the song to update
   * @return mixed the response
   */
  public function update(Request $request, $id) {
    $gameVersion = GameVersion::find($id);

    if (!$gameVersion) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notGameVersionFound($id)
        ])
      ], 404);
    }

    $name = $request->input('name');
    $launchYear = $request->input('launch_year');

    // If is a PATCH request, then
    if ($request->method() === 'PATCH') {
      $band = false; // Band to control if the song has been modified
      if ($name) {
        $gameVersion->name = $name;
        $band = true;
      }

      if ($launchYear) {
        $gameVersion->launchYear = $launchYear;
        $band = true;
      }

      // If some data was modified, we update the song, and then, save the song object
      if ($band) {
        $gameVersion->save();
        return response()->json([
          'status' => 'ok',
          'data' => $gameVersion
        ], 200);
      } else { // Else, send a message to client
        return response()->json([
          'errors' => array([
            'code' => 304,
            'message' => 'No Game Version data has been changed'
          ])
        ], 304);
      }
    }

    // If the request is no PATCH, then is a PUT, so
    if (!$name || !$launchYear) {
      return response()->json([
        'errors' => array([
          'code' => 422,
          'message' => 'Missing values to complete the update'
        ])
      ], 422);
    }

    $gameVersion->name = $name;
    $gameVersion->launch_year = $launchYear;
    $gameVersion->save();
    return response()->json([
      'status' => 'ok',
      'data' => $gameVersion
    ], 202);
  }

  public function image(Request $request, $id) {
    if (!$request->file('banner_image')) {
      return response()->json([
        'errors' => array([
          'code' => 422,
          'message' => 'Missing values to complete the update'
        ])
      ], 422);
    }

    $gameVersion = GameVersion::find($id);

    if (!$gameVersion) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notSongFound()
        ])
      ], 404);
    }

    $image = $request->file('banner_image');
    $imageName = $id . '_' . md5(time()) . '.' . $image->getClientOriginalExtension();
    $imagePath = public_path().'/images/gameVersions/';
    $image->move($imagePath, $imageName);
    $imageLink = 'http://localhost:8000/images/gameVersions/'.$imageName;

    $gameVersion->banner_image = $imageLink;
    $gameVersion->save();

    return response()->json([
      'status' => 'ok',
      'data' => $gameVersion
    ], 202);
  }

  /**
   * Delete a game version from the database
   * @param $id the game version's id
   * @return mixed the response
   */
  public function destroy($id){
    $gameVersion = GameVersion::find($id);

    if (!$gameVersion) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notGameVersionFound($id)
        ])
      ], 404);
    }

    $gameVersion->delete();
    return response()->json([
      'code' => 204,
      'message' => 'The Game Version has been removed successfully'
    ], 204);
  }

  /**
   * ################################################################################################################
   *                                             PRIVATE METHODS
   * ################################################################################################################
   */

  private function notGameVersionFound($id){
    return 'The Artist with the id: \''.$id.'\' has not be found';
  }
}
