<?php

namespace App\Http\Controllers;

use App\ChartType;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Cache;

class ChartTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index','show']);
    }

    /**
   * Display all the chart types
   * @return \Illuminate\Http\JsonResponse
   */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->query('page') : 1;
        $totalChartTypes = ChartType::all()->count();

        if ($request->has('page')) {
            $chartTypes = Cache::remember('CacheChartType_page_' . $page, 20/60, function(){
                return ChartType::paginate(10)->items();
            });
        } else {
            $chartTypes = Cache::remember('CacheChartType_full', 20/60, function(){
                return ChartType::all();
            });
        }

        return response()->json([
          'status'=>'ok',
          'data'=>$chartTypes,
          'totalItems'=>$totalChartTypes
        ], 200);
    }

    /**
    * Store a chart type on the database
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

        $newChartType = ChartType::create($request->all());
        $response = Response::make(json_encode(['data' => $newChartType]), 201)
            ->header('Location', env('BASE_PATH') . 'api/' . env('API_VER') . 'chartTypes/'.$newChartType->id)
            ->header('Content-Type', 'application/json');
    return $response;
  }

    /**
    * Show a chart type by the id from the database
    * @param $id the id of the chartType
    * @return mixed the response
    */
    public function show($id)
    {
        $chartType = ChartType::find($id);

        if (!$chartType) {
            return response()->json([
                'errors'=>array(
                    'code' => 404,
                    'message' => $this->notChartTypeFound($id)
                )
            ], 404);
        }

        $chartType->songs;
        return response()->json([
            'status'=>'ok',
            'data'=>$chartType
        ], 202);
    }

    /**
    * Update an existing chart type from the database
    * @param Request $request the request with the fields to update
    * @param $id id of the chartType to update
    * @return mixed the response
    */
    public function update(Request $request, $id)
    {
        $chartType = ChartType::find($id);

        if (!$chartType) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notChartTypeFound($id)
                ])
            ], 404);
        }

        $name = $request->input('name');

        // If is a PATCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the type has been modified
            if ($name) {
                $chartType->name = $name;
                $band = true;
            }

            // If some data was modified, we update the type, and then, save the type object
            if ($band) {
                $chartType->save();
                return response()->json([
                    'status' => 'ok',
                    'data' => $chartType
                ], 200);
            } else { // Else, send a message to client
                return response()->json([
                    'errors' => array([
                        'code' => 304,
                        'message' => 'No chart type data has been changed'
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

        $chartType->name = $name;
        $chartType->save();
        return response()->json([
            'status' => 'ok',
            'data' => $chartType
        ], 202);
    }

    public function destroy($id)
    {
        $chartType = ChartType::find($id);

        if (!$chartType) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => $this->notChartTypeFound($id)
                ])
            ], 404);
        }

        $chartType->delete();
        return response()->json([
            'code' => 204,
            'message' => 'The chart type has been removed successfully'
        ], 204);
    }

    /**
    * ################################################################################################################
    *                                             PRIVATE METHODS
    * ################################################################################################################
    */

    private function notChartTypeFound($id)
    {
        return 'The Chart type with the id: \''.$id.'\' has not be found';
    }
}
