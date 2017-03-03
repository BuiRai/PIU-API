<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Style;
use Response;
use App\Http\Requests\StylesRequest;
use Illuminate\Support\Facades\Cache;

class StyleController extends Controller
{
  /**
   * Display all the styles
   * @return \Illuminate\Http\JsonResponse
   */
  public function index(Request $request) {
    $page = $request->has('page') ? $request->query('page') : 1;

    $styles = Cache::remember('CacheStyles_page_' . $page, 16/60, function(){
        return Style::paginate(5);
    });

    return response()->json([
      'status'=>'ok',
      'next'=>$styles->nextPageUrl(),
      'previous'=>$styles->previousPageUrl(),
      'data'=>$styles->items()
    ], 200);
  }

  /**
   * Store a style on the database
   * @param Request $request Request $request the request sent by the client
   * @return Response The response
   */
  public function store(Request $request) {

    // Verify is all the fields are on the user's request
    if (!$request->input('style')){
      return response([
        'errors' => array([
          'code' => 422,
          'message' => 'Incomplete data, please make sure that all the fields are on the request'
        ])
      ], 422);
    }

    $newStyle = Style::create($request->all());
    $response = Response::make(json_encode(['data' => $newStyle]), 201)
      ->header('Location', 'http://localhost:8000/api/v1.0/styles/'.$newStyle->id)
      ->header('Content-Type', 'application/json');
    return $response;
  }

  /**
   * Show a style by the id from the database
   * @param $id the id of the artist
   * @return mixed the response
   */
  public function show($id) {
    $style = Style::with('levels.stepmaker', 'levels.song')->find($id);

    if (!$style) {
      return response()->json([
        'errors'=>array(
          'code' => 404,
          'message' => $this->notStyleFound($id)
        )
      ], 404);
    }

    return response()->json([
      'status'=>'ok',
      'data'=>$style
    ], 202);
  }

  /**
   * Update an existing style from the database
   * @param Request $request the request with the fields to update
   * @param $id id of the artist to update
   * @return mixed the response
   */
  public function update(Request $request, $id) {
    $style = Style::find($id);

    if (!$style) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notStyleFound($id)
        ])
      ], 404);
    }

    $name_style = $request->input('style');

    // If is a PARCH request, then
    if ($request->method() === 'PATCH') {
      $band = false; // Band to control if the song has been modified
      if ($name_style) {
        $style->style = $name_style;
        $band = true;
      }

      // If some data was modified, we update the song, and then, save the song object
      if ($band) {
        $style->save();
        return response()->json([
          'status' => 'ok',
          'data' => $style
        ], 200);
      } else { // Else, send a message to client
        return response()->json([
          'errors' => array([
            'code' => 304,
            'message' => 'No style data has been changed'
          ])
        ], 304);
      }
    }

    // If the request is no PATCH, then is a PUT, so
    if (!$style) {
      return response()->json([
        'errors' => array([
          'code' => 422,
          'message' => 'Missing values to complete the update'
        ])
      ], 422);
    }

    $style->style = $name_style;
    $style->save();
    return response()->json([
      'status' => 'ok',
      'data' => $style
    ], 202);
  }

  /**
   * Delete a style from the database
   * @param  $id The style's id
   * @return Response the response
   */
  public function destroy($id){
    $style = Style::find($id);

    if (!$style) {
      return response()->json([
        'errors' => array([
          'code'=>404,
          'message' => $this->notStyleFound($id)
        ])
      ], 404);
    }

    $style->delete();
    return response()->json([
      'code' => 204,
      'message' => 'The style has been removed successfully'
    ], 204);
  }

  /**
   * ################################################################################################################
   *                                             PRIVATE METHODS
   * ################################################################################################################
   */

  private function notStyleFound($id){
    return 'The Style with the id: \''.$id.'\' has not be found';
  }
}
