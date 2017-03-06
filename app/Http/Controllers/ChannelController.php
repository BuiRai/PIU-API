<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Cache;

class ChannelController extends Controller
{
    /**
   * Display all the channels
   * @return \Illuminate\Http\JsonResponse
   */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->query('page') : 1;
        $totalChannels = Channel::all()->count();

        if ($request->has('page')) {
            $channels = Cache::remember('CacheChannel_page_' . $page, 20/60, function(){
                return Channel::paginate(10)->items();
            });
        } else {
            $channels = Cache::remember('CacheChannel_full', 20/60, function(){
                return Channel::all();
            });
        }

        return response()->json([
          'status'=>'ok',
          'data'=>$channels,
          'totalItems'=>$totalChannels
        ], 200);
    }

    /**
    * Store a channel on the database
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

        $newChannel = Channel::create($request->all());
        $response = Response::make(json_encode(['data' => $newChannel]), 201)
            ->header('Location', env('BASE_PATH') . 'api/' . env('API_VER') . 'channels/'.$newChannel->id)
            ->header('Content-Type', 'application/json');
    return $response;
  }

    /**
    * Show a channel by the id from the database
    * @param $id the id of the channel
    * @return mixed the response
    */
    public function show($id)
    {
        $channel = Channel::with('songs')->find($id);

        if (!$channel) {
            return response()->json([
                'errors'=>array(
                    'code' => 404,
                    'message' => $this->notChannelFound($id)
                )
            ], 404);
        }

        $channel->songs;
        return response()->json([
            'status'=>'ok',
            'data'=>$channel
        ], 202);
    }

    /**
    * Update an existing channel from the database
    * @param Request $request the request with the fields to update
    * @param $id id of the channel to update
    * @return mixed the response
    */
    public function update(Request $request, $id)
    {
        $channel = Channel::find($id);

        if (!$channel) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notChannelFound($id)
                ])
            ], 404);
        }

        $name = $request->input('name');

        // If is a PATCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the type has been modified
            if ($name) {
                $channel->name = $name;
                $band = true;
            }

            // If some data was modified, we update the type, and then, save the type object
            if ($band) {
                $channel->save();
                return response()->json([
                    'status' => 'ok',
                    'data' => $channel
                ], 200);
            } else { // Else, send a message to client
                return response()->json([
                    'errors' => array([
                        'code' => 304,
                        'message' => 'No channel data has been changed'
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

        $channel->name = $name;
        $channel->save();
        return response()->json([
            'status' => 'ok',
            'data' => $channel
        ], 202);
    }

    public function destroy($id)
    {
        $channel = Channel::find($id);

        if (!$channel) {
            return response()->json([
            'errors' => array([
                    'code'=>404,
                    'message' => $this->notChannelFound($id)
                ])
            ], 404);
        }

        $channel->delete();
        return response()->json([
            'code' => 204,
            'message' => 'The channel has been removed successfully'
        ], 204);
    }

    /**
    * ################################################################################################################
    *                                             PRIVATE METHODS
    * ################################################################################################################
    */

    private function notChannelFound($id)
    {
        return 'The Channel with the id: \''.$id.'\' has not be found';
    }
}
