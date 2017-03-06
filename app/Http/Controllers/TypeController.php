<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Cache;

class TypeController extends Controller
{
    /**
   * Display all the types
   * @return \Illuminate\Http\JsonResponse
   */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->query('page') : 1;
        $totalTypes = Type::all()->count();

        if ($request->has('page')) {
            $types = Cache::remember('CacheType_page_' . $page, 20/60, function(){
              return Type::paginate(10)->items();
            });
        } else {
            $types = Cache::remember('CacheType_full', 20/60, function(){
              return Type::all();
            });
        }


        return response()->json([
          'status'=>'ok',
          'data'=>$types,
          'totalItems'=>$totalTypes
        ], 200);
    }

    /**
    * Store a type on the database
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

        $newType = Type::create($request->all());
        $response = Response::make(json_encode(['data' => $newType]), 201)
            ->header('Location', env('BASE_PATH') . 'api/' . env('API_VER') . 'types/'.$newType->id)
            ->header('Content-Type', 'application/json');
    return $response;
  }

    /**
    * Show a type by the id from the database
    * @param $id the id of the type
    * @return mixed the response
    */
    public function show($id)
    {
        $type = Type::with('songs')->find($id);

        if (!$type) {
            return response()->json([
                'errors'=>array(
                    'code' => 404,
                    'message' => $this->notTypeFound($id)
                )
            ], 404);
        }

        $type->songs;
        return response()->json([
            'status'=>'ok',
            'data'=>$type
        ], 202);
    }

    /**
    * Update an existing type from the database
    * @param Request $request the request with the fields to update
    * @param $id id of the type to update
    * @return mixed the response
    */
    public function update(Request $request, $id)
    {
        $type = Type::find($id);

        if (!$type) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notTypeFound($id)
                ])
            ], 404);
        }

        $name = $request->input('name');

        // If is a PATCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the type has been modified
            if ($name) {
                $type->name = $name;
                $band = true;
            }

            // If some data was modified, we update the type, and then, save the type object
            if ($band) {
                $type->save();
                return response()->json([
                    'status' => 'ok',
                    'data' => $type
                ], 200);
            } else { // Else, send a message to client
                return response()->json([
                    'errors' => array([
                        'code' => 304,
                        'message' => 'No type data has been changed'
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

        $type->name = $name;
        $type->save();
        return response()->json([
            'status' => 'ok',
            'data' => $type
        ], 202);
    }

    public function destroy($id)
    {
        $type = Type::find($id);

        if (!$type) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => $this->notTypeFound($id)
                ])
            ], 404);
        }

        $type->delete();
        return response()->json([
            'code' => 204,
            'message' => 'The type has been removed successfully'
        ], 204);
    }

    /**
    * ################################################################################################################
    *                                             PRIVATE METHODS
    * ################################################################################################################
    */

    private function notTypeFound($id)
    {
        return 'The Type with the id: \''.$id.'\' has not be found';
    }
}
