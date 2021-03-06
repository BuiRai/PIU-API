<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use App\Style;
use Reponse;
use Illuminate\Support\Facades\Cache;

class LevelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except([
            'index',
            'show',
            'singleRandomByLevel',
            'doubleRandomByLevel',
            'singleRandomByRange',
            'doubleRandomByRange',
            'levelsFromStepmaker'
        ]);
    }

    /**
    * Display all the levels
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->query('page') : 1;
        $totalLevels = Level::all()->count();

        if ($request->has('page')) {
            $levels = Cache::remember('CacheLevels_page_' . $page, 20/60, function(){
                return Level::with('song')->with('stepmaker')->with('style')->paginate(10)->items();
            });
        } else {
            $levels = Cache::remember('CacheLevels_full', 20/60, function(){
                return Level::with('song')->with('stepmaker')->with('style')->get();
            });
        }

        return response()->json([
            'status'=>'ok',
            'data'=>$levels,
            'totalItems'=>$totalLevels
        ], 200);
    }

    /**
    * Store a level on the database
    * @param Request $request Request $request the request sent by the client
    * @return Response The response
    */
    public function store(Request $request)
    {
        // Verify is all the fields are on the user's request
        if (!$request->input('value') || !$request->input('song_id') || !$request->input('stepmaker_id') || !$request->input('style_id') || !$request->input('chart_type_id')){
            return response([
                'errors' => array([
                    'code' => 422,
                    'message' => 'Incomplete data, please make sure that all the fields are on the request'
                ])
            ], 422);
        }

        $newLevel = Level::create($request->all());
        $response = \Response::make(json_encode(['data' => $newLevel]), 201)
            ->header('Location', env('BASE_PATH') . 'api/' . env('API_VER') . 'levels/'.$newLevel->id)
            ->header('Content-Type', 'application/json');
        return $response;
    }

    /**
    * Show a level by the id from the database
    * @param $id the id of the artist
    * @return mixed the response
    */
    public function show($id)
    {
        $level = Level::with('song', 'stepmaker', 'style')->find($id);

        if (!$level) {
            return response()->json([
                'errors'=>array(
                    'code' => 404,
                    'message' => $this->notLevelFound($id)
                )
            ], 404);
        }

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
    public function update(Request $request, $id)
    {
        $level = Level::find($id);

        if (!$level) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notLevelFound($id)
                ])
            ], 404);
        }

        $value = $request->input('value');
        $song_id = $request->input('song_id');
        $stepmaker_id = $request->input('stepmaker_id');
        $style_id = $request->input('style_id');

        // If is a PARCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the level has been modified
            if ($value) {
                $level->level = $value;
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
        if (!$value || !$song_id || !$stepmaker_id || !$style_id) {
            return response()->json([
                'errors' => array([
                    'code' => 422,
                    'message' => 'Missing values to complete the update'
                ])
            ], 422);
        }

        $level->value = $value;
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
    public function destroy($id)
    {
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

    public function singleRandomByLevel(Request $request)
    {
        $style = Style::where('style', 'single')->first();
        $value = $request->input('level');

        $level = Level::with('song')->where([
            ['value', '=', $value],
            ['style_id', '=', $style->id]
        ])->inRandomOrder()->first();

        if (!$level) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => 'No level founded'
                ])
            ], 404);
        }

        return response()->json([
            'code' => 202,
            'level' => $level
        ], 202);
    }

    public function doubleRandomByLevel(Request $request)
    {
        $style = Style::where('style', 'double')->first();
        $value = $request->input('level');

        $level = Level::with('song')->where([
            ['value', '=', $value],
            ['style_id', '=', $style->id]
        ])->inRandomOrder()->first();

        if (!$level) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => 'No level founded'
                ])
            ], 404);
        }

        return response()->json([
            'code' => 202,
            'level' => $level
        ], 202);
    }

    public function singleRandomByRange(Request $request)
    {
        $style = Style::where('style', 'single')->first();
        $min = $request->input('min');
        $max = $request->input('max');

        $where = array(
            ['types_songs.name', '=', 'Normal'],
            ['value', '>=', $min],
            ['value', '<=', $max],
            ['style_id', '=', $style->id]
        );

        $level = Level::whereHas('song.type', function($q) use($where) {
            $q->where($where);
        })->with('song')->inRandomOrder()->first();

        if (!$level) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => 'No level founded'
                ])
            ], 404);
        }

        return response()->json([
            'code' => 202,
            'level' => $level
        ], 202);
    }

    public function doubleRandomByRange(Request $request)
    {
        $style = Style::where('style', 'double')->first();
        $min = $request->input('min');
        $max = $request->input('max');

        $where = array(
            ['types_songs.name', '=', 'Normal'],
            ['value', '>=', $min],
            ['value', '<=', $max],
            ['style_id', '=', $style->id]
        );

        $level = Level::whereHas('song.type', function($q) use($where) {
            $q->where($where);
        })->with('song')->inRandomOrder()->first();

        if (!$level) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => 'No level founded'
                ])
            ], 404);
        }

        return response()->json([
            'code' => 202,
            'level' => $level
        ], 202);
    }

    public function levelsFromStepmaker(Request $request)
    {
        $stepmaker = $request->input('stepmaker');
        error_log($stepmaker);
        $levels = Level::whereHas('stepmaker', function($q) use($stepmaker) {
            $q->where('stepmakers.username', $stepmaker);
        })->get();

        if (!$levels) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => 'No levels founded'
                ])
            ], 404);
        }

        return response()->json([
            'code' => 202,
            'levels' => $levels
        ], 202);
    }

    /**
    * ################################################################################################################
    *                                             PRIVATE METHODS
    * ################################################################################################################
    */

    private function notLevelFound($id)
    {
        return 'The Level with the id: \''.$id.'\' has not be found';
    }
}
