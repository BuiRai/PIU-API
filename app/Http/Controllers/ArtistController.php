<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use Response;

class ArtistController extends Controller
{
    /**
     * Display all the artists
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $artists = Artist::all();

        return response()->json([
            'status'=>'ok',
            'data'=>$artists
        ], 200);
    }

    /**
     * Store an artist on the database
     * @param Request $request Request $request the request sent by the client
     * @return Response The response
     */
    public function store(Request $request) {
        // Verify is all the fields are on the user's request
        if (!$request->input('name')){
            return response([
                'errors' => array([
                    'code' => 422,
                    'message' => 'Incomplete data, please make sure that all the fields are on the request'
                ])
            ], 422);
        }

        $newArtist = Artist::create($request->all());
        $response = Response::make(json_encode(['data' => $newArtist]), 201)
            ->header('Location', 'http://localhost:8000/api/v1.0/artists/'.$newArtist->id)
            ->header('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Show an artist by the id from the database
     * @param $id the id of the artist
     * @return mixed the response
     */
    public function show($id) {
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json([
                'errors'=>array(
                    'code' => 404,
                    'message' => $this->notArtistFound($id)
                )
            ], 404);
        }

        return response()->json([
            'status'=>'ok',
            'data'=>$artist
        ], 202);
    }

    /**
     * Update an existing artist from the database
     * @param Request $request the request with the fields to update
     * @param $id id of the artist to update
     * @return mixed the response
     */
    public function update(Request $request, $id) {
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notArtistFound($id)
                ])
            ], 404);
        }

        $name = $request->input('name');

        // If is a PARCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the song has been modified
            if ($name) {
                $artist->name = $name;
                $band = true;
            }

            // If some data was modified, we update the song, and then, save the song object
            if ($band) {
                $artist->save();
                return response()->json([
                    'status' => 'ok',
                    'data' => $artist
                ], 200);
            } else { // Else, send a message to client
                return response()->json([
                    'errors' => array([
                        'code' => 304,
                        'message' => 'No artist data has been changed'
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

        $artist->name = $name;
        $artist->save();
        return response()->json([
            'status' => 'ok',
            'data' => $artist
        ], 202);
    }

    public function destroy($id){
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => $this->notArtistFound($id)
                ])
            ], 404);
        }

        $artist->delete();
        return response()->json([
            'code' => 204,
            'message' => 'The artist has been removed successfully'
        ], 204);
    }

    /**
     * ################################################################################################################
     *                                             PRIVATE METHODS
     * ################################################################################################################
     */

    private function notArtistFound($id){
        return 'The Artist with the id: \''.$id.'\' has not be found';
    }
}
