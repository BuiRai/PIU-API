<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use Reponse;

class LevelController extends Controller
{
	/**
     * Display all the levels
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $levels = Level::all();

        return response()->json([
            'status'=>'ok',
            'data'=>$levels
        ], 200);
    }

    /**
     * Store a level on the database
     * @param Request $request Request $request the request sent by the client
     * @return Response The response
     */
    public function store(Request $request) {
        // Verify is all the fields are on the user's request
        if (!$request->input('level') || !$request->input('song_id') || !$request->input('stepmaker_id') || !$request->input('style_id')){
            return response([
                'errors' => array([
                    'code' => 422,
                    'message' => 'Incomplete data, please make sure that all the fields are on the request'
                ])
            ], 422);
        }

        $newLevel = Level::create($request->all());
        $response = Response::make(json_encode(['data' => $newLevel]), 201)
            ->header('Location', 'http://localhost:8000/api/v1.0/levels/'.$newLevel->id)
            ->header('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Show a level by the id from the database
     * @param $id the id of the artist
     * @return mixed the response
     */
    public function show($id) {
        $level = Level::find($id);

        if (!$level) {
            return response()->json([
                'errors'=>array(
                    'code' => 404,
                    'message' => $this->notLevelFound($id)
                )
            ], 404);
        }

        $level->song;
        $level->stepmaker;
        $level->style;

        return response()->json([
            'status'=>'ok',
            'data'=>$level
        ], 202);
    }

    /**
     * Update an existing level from the database
     * @param Request $request the request with the fields to update
     * @param $id id of the artist to update
     * @return mixed the response
     */
    public function update(Request $request, $id) {
        $level = Level::find($id);

        if (!$level) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notLevelFound($id)
                ])
            ], 404);
        }

        $level_value = $request->input('level');
        $song_id = $request->input('song_id');
        $stepmaker_id = $request->input('stepmaker_id');
        $style_id = $request->input('style_id');

        // If is a PARCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the level has been modified
            if ($level_value) {
                $level->level = $level_value;
                $band = true;
            }

            if ($song_id) {
                $level->song_id = $song_id;
                $band = true;
            }

            if ($stepmaker_id) {
                $level->stepmaker_id = $stepmaker_id;
                $band = true;
            }

            if ($style_id) {
                $level->style_id = $style_id;
                $band = true;
            }

            // If some data was modified, we update the level, and then, save the level object
            if ($band) {
                $level->save();
                return response()->json([
                    'status' => 'ok',
                    'data' => $level
                ], 200);
            } else { // Else, send a message to client
                return response()->json([
                    'errors' => array([
                        'code' => 304,
                        'message' => 'No level data has been changed'
                    ])
                ], 304);
            }
        }

        // If the request is no PATCH, then is a PUT, so
        if (!$level) {
            return response()->json([
                'errors' => array([
                    'code' => 422,
                    'message' => 'Missing values to complete the update'
                ])
            ], 422);
        }

        $level->level = $level;
        $level->song_id = $song_id;
        $level->stepmaker_id = $stepmaker_id;
        $level->style_id = $style_id;
        $level->save();
        return response()->json([
            'status' => 'ok',
            'data' => $level
        ], 202);
    }

    /**
     * Delete a level from the database
     * @param  $id The level's id
     * @return Response the response
     */
    public function destroy($id){
        $level = Level::find($id);

        if (!$level) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notLevelFound($id)
                ])
            ], 404);
        }

        $level->delete();
        return response()->json([
            'code' => 204,
            'message' => 'The level has been removed successfully'
        ], 204);
    }

    /**
     * ################################################################################################################
     *                                             PRIVATE METHODS
     * ################################################################################################################
     */

    private function notLevelFound($id){
        return 'The Level with the id: \''.$id.'\' has not be found';
    }
}
