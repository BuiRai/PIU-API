<?php

namespace App\Http\Controllers;

use App\TypeSong;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Cache;

class TypeSongController extends Controller
{
    /**
   * Display all the typesSongs
   * @return \Illuminate\Http\JsonResponse
   */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->query('page') : 1;
        $totalTypesSongs = TypeSong::all()->count();

        if ($request->has('page')) {
            $typesSongs = Cache::remember('CacheTypesSong_page_' . $page, 20/60, function(){
              return TypeSong::paginate(10)->items();
            });
        } else {
            $typesSongs = Cache::remember('CacheTypesSong_full', 20/60, function(){
              return TypeSong::all();
            });
        }


        return response()->json([
          'status'=>'ok',
          'data'=>$typesSongs,
          'totalItems'=>$totalTypesSongs
        ], 200);
    }

    /**
    * Store a typesSong on the database
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

        $newTypesSong = TypeSong::create($request->all());
        $response = Response::make(json_encode(['data' => $newTypesSong]), 201)
            ->header('Location', env('BASE_PATH') . 'api/' . env('API_VER') . 'typesSongs/'.$newTypesSong->id)
            ->header('Content-TypesSong', 'application/json');
    return $response;
  }

    /**
    * Show a typesSong by the id from the database
    * @param $id the id of the typesSong
    * @return mixed the response
    */
    public function show($id)
    {
        $typesSong = TypeSong::with('songs')->find($id);

        if (!$typesSong) {
            return response()->json([
                'errors'=>array(
                    'code' => 404,
                    'message' => $this->notTypesSongFound($id)
                )
            ], 404);
        }

        $typesSong->songs;
        return response()->json([
            'status'=>'ok',
            'data'=>$typesSong
        ], 202);
    }

    /**
    * Update an existing typesSong from the database
    * @param Request $request the request with the fields to update
    * @param $id id of the typesSong to update
    * @return mixed the response
    */
    public function update(Request $request, $id)
    {
        $typesSong = TypeSong::find($id);

        if (!$typesSong) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notTypesSongFound($id)
                ])
            ], 404);
        }

        $name = $request->input('name');

        // If is a PATCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the typesSong has been modified
            if ($name) {
                $typesSong->name = $name;
                $band = true;
            }

            // If some data was modified, we update the typesSong, and then, save the typesSong object
            if ($band) {
                $typesSong->save();
                return response()->json([
                    'status' => 'ok',
                    'data' => $typesSong
                ], 200);
            } else { // Else, send a message to client
                return response()->json([
                    'errors' => array([
                        'code' => 304,
                        'message' => 'No typesSong data has been changed'
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

        $typesSong->name = $name;
        $typesSong->save();
        return response()->json([
            'status' => 'ok',
            'data' => $typesSong
        ], 202);
    }

    public function destroy($id)
    {
        $typesSong = TypeSong::find($id);

        if (!$typesSong) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => $this->notTypesSongFound($id)
                ])
            ], 404);
        }

        $typesSong->delete();
        return response()->json([
            'code' => 204,
            'message' => 'The typesSong has been removed successfully'
        ], 204);
    }

    /**
    * ################################################################################################################
    *                                             PRIVATE METHODS
    * ################################################################################################################
    */

    private function notTypesSongFound($id)
    {
        return 'The TypesSong with the id: \''.$id.'\' has not be found';
    }
}
