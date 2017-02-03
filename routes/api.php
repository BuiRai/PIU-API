<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(array('prefix'=>'/v1.0'), function (){
    Route::resource('songs', 'SongController', ['except' => ['create', 'edit']]);
    Route::resource('artists', 'ArtistController', ['except' => ['create', 'edit']]);
    Route::resource('gameVersions', 'GameVersionController', ['except' => ['create', 'edit']]);
    Route::resource('stepmakers', 'StepmakerController', ['except' => ['create', 'edit']]);
    Route::resource('styles', 'StyleController', ['except' => ['create', 'edit']]);
    Route::resource('levels', 'LevelController', ['except' => ['create', 'edit']]);
});
