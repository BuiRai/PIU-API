<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stepmaker;
use Response;
use Illuminate\Support\Facades\Cache;

class StepmakerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index','show']);
    }

  /**
   * Display all the stepmakers
   * @return \Illuminate\Http\JsonResponse
   */
  public function index(Request $request)
  {
    $page = $request->has('page') ? $request->query('page') : 1;
    $totalStepmakers = Stepmaker::all()->count();

    if ($request->has('page')) {
        $stepmakers = Cache::remember('CacheStepmakers_page_' . $page, 20/60, function(){
            return Stepmaker::with('levels')->paginate(10)->items();
        });
    } else {
        $stepmakers = Cache::remember('CacheStepmakers_full', 20/60, function(){
            return Stepmaker::with('levels')->get();
        });
    }

    return response()->json([
      'status'=>'ok',
      'data'=>$stepmakers,
      'totalItems'=>$totalStepmakers
    ], 200);
  }

  /**
   * Store a stepmaker on the database
   * @param Request $request Request $request the request sent by the client
   * @return Response The response
   */
  public function store(Request $request)
  {
    // Verify is all the fields are on the user's request
    if (!$request->input('username')){
      return response([
        'errors' => array([
          'code' => 422,
          'message' => 'Incomplete data, please make sure that all the fields are on the request'
        ])
      ], 422);
    }

    $newStepmaker = Stepmaker::create($request->all());
    $response = Response::make(json_encode(['data' => $newStepmaker]), 201)
      ->header('Location', env('BASE_PATH') . 'api/' . env('API_VER') . 'stepmakers/'.$newStepmaker->id)
      ->header('Content-Type', 'application/json');
    return $response;
  }

  /**
   * Show a stepmaker by the id from the database
   * @param $id the id of the artist
   * @return mixed the response
   */
  public function show($id)
  {
    $stepmaker = Stepmaker::with('levels.song', 'levels.style')->find($id);

    if (!$stepmaker) {
      return response()->json([
        'errors'=>array(
          'code' => 404,
          'message' => $this->notStepmakerFound($id)
        )
      ], 404);
    }

    return response()->json([
      'status'=>'ok',
      'data'=>$stepmaker
    ], 202);
  }

  /**
   * Update an existing stepmaker from the database
   * @param Request $request the request with the fields to update
   * @param $id id of the artist to update
   * @return mixed the response
   */
  public function update(Request $request, $id)
  {
    $stepmaker = Stepmaker::find($id);

    if (!$stepmaker) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notStepmakerFound($id)
        ])
      ], 404);
    }

    $username = $request->input('username');

    // If is a PARCH request, then
    if ($request->method() === 'PATCH') {
      $band = false; // Band to control if the song has been modified
      if ($username) {
        $stepmaker->username = $username;
        $band = true;
      }

      // If some data was modified, we update the song, and then, save the song object
      if ($band) {
        $stepmaker->save();
        return response()->json([
          'status' => 'ok',
          'data' => $stepmaker
        ], 200);
      } else { // Else, send a message to client
        return response()->json([
          'errors' => array([
            'code' => 304,
            'message' => 'No stepmaker data has been changed'
          ])
        ], 304);
      }
    }

    // If the request is no PATCH, then is a PUT, so
    if (!$username) {
      return response()->json([
        'errors' => array([
          'code' => 422,
          'message' => 'Missing values to complete the update'
        ])
      ], 422);
    }

    $stepmaker->username = $username;
    $stepmaker->save();
    return response()->json([
      'status' => 'ok',
      'data' => $stepmaker
    ], 202);
  }

  /**
   * Delete a stepmaker from the database
   * @param  $id The stepmaker's id
   * @return Response the response
   */
  public function destroy($id)
  {
    $stepmaker = Stepmaker::find($id);

    if (!$stepmaker) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notStepmakerFound($id)
        ])
      ], 404);
    }

    $stepmaker->delete();
    return response()->json([
      'code' => 204,
      'message' => 'The stepmaker has been removed successfully'
    ], 204);
  }

  /**
   * ################################################################################################################
   *                                             PRIVATE METHODS
   * ################################################################################################################
   */

  private function notStepmakerFound($id)
  {
    return 'The Stepmaker with the id: \''.$id.'\' has not be found';
  }
}
