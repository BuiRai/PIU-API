<?php

namespace App\Http\Controllers;

use App\Song;

use Illuminate\Http\Request;
use Response;

class SongController extends Controller
{

    /**
     * Display all the songs from the database
     * @return \Illuminate\Http\JsonResponse the response
     */
    public function index() {
        return response()->json([
            'status'=>'ok',
            'data'=>Song::all()
        ], 200);
    }

    /**
     * Store a song on the database
     * @param Request $request the request sent by the client
     * @return Response the response
     */
    public function store(Request $request) {
        // Verify is all the fields are on the user's request
        if (!$request->input('id') || !$request->input('title') ||
            !$request->input('artist') || !$request->input('bpm') ||
            !$request->input('bannerImage')) {
            return response([
                'errors' => array([
                    'code' => 422,
                    'message' => 'Incomplete data, please make sure that all the fields are on the request'
                ])
            ], 422);
        }

        $newSong = Song::create($request->all());
        $response = Response::make(json_encode(['data' => $newSong]), 201)
            ->header('Location', 'http://localhost:8000/api/songs/'.$newSong->id)
            ->header('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Show a song by the id from the database
     * @param $id the id of the song
     * @return \Illuminate\Http\JsonResponse the response
     */
    public function show($id) {
        $song = Song::find($id);

        if (!$song) {
            return response()->json([
                'errors'=>array(
                    'code'=>404,
                    'message'=>'The Song with the id: \''.$id.'\' has not be found'
                )
            ], 404);
        }

        return response()->json([
            'status'=>'ok',
            'data'=>$song
        ], 202);
    }

    /**
     * Update an existing song from the database
     * @param Request $request the request with the fields to update
     * @param $id the id of the song to update
     * @return mixed the response
     */
    public function update(Request $request, $id) {
        $song = Song::find($id);

        if (!$song) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => 'The Song with the id: \''.$id.'\' has not be found'
                ])
            ], 404);
        }

        $title = $request->input('title');
        $artist = $request->input('artist');
        $bpm = $request->input('bpm');
        $bannerImage = $request->input('bannerImage');

        // If is a PARCH request, then
        if ($request->method() === 'PATCH') {
            $band = false; // Band to control if the song has been modified
            if ($title) {
                $song->title = $title;
                $band = true;
            }
            if ($artist) {
                $song->artist = $artist;
                $band = true;
            }
            if ($bpm) {
                $song->bpm = $bpm;
                $band = true;
            }
            if ($bannerImage) {
                $song->bannerImage = $bannerImage;
                $band = true;
            }

            // If some data was modified, we update the song, and then, save the song object
            if ($band) {
                $song->save();
                return response()->json([
                    'status' => 'ok',
                    'data' => $song
                ], 200);
            } else { // Else, send a message to client
                return response()->json([
                    'errors' => array([
                        'code' => 304,
                        'message' => 'No song data has been changed'
                    ])
                ], 304);
            }
        }

        // If the request is no PATCH, then is a PUT, so
        if (!$title || !$artist || !$bpm || $bannerImage) {
            return response()->json([
                'errors' => array([
                    'code' => 422,
                    'message' => 'Missing values to complete the update'
                ])
            ], 422);
        }

        $song->title = $title;
        $song->artist = $artist;
        $song->bpm = $bpm;
        $song->bannerImage = $bannerImage;
        $song->save();
        return response()->json([
            'status' => 'ok',
            'data' => $song
        ], 202);
    }

    public function destroy($id) {
        $song = Song::find($id);

        if (!$song) {
            return response()->json([
                'errors' => array([
                    'code'=>404,
                    'message' => 'The Song with the id: \''.$id.'\' has not be found'
                ])
            ], 404);
        }

        $song->delete();
        return response()->json([
            'code' => 204,
            'message' => 'The song has been removed successfully'
        ], 204);
    }
}
