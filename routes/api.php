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
// Route::group(['prefix' => 'v1.0', 'middleware' => ['cors']], function (){
Route::group(['prefix' => 'v1.0', 'middleware' => 'cors'], function (){
    Route::resource('songs', 'SongController', ['except' => ['create', 'edit']]);
    Route::post('songs/image/{id}', 'SongController@image');
    Route::resource('artists', 'ArtistController', ['except' => ['create', 'edit']]);
    Route::resource('gameVersions', 'GameVersionController', ['except' => ['create', 'edit']]);
    Route::post('gameVersions/image/{id}', 'GameVersionController@image');
    Route::resource('stepmakers', 'StepmakerController', ['except' => ['create', 'edit']]);
    Route::resource('styles', 'StyleController', ['except' => ['create', 'edit']]);
    Route::resource('levels', 'LevelController', ['except' => ['create', 'edit']]);
    Route::resource('types', 'TypeController', ['except' => ['create', 'edit']]);
    Route::resource('channels', 'ChannelController', ['except' => ['create', 'edit']]);
    Route::resource('chartTypes', 'ChartTypeController', ['except' => ['create', 'edit']]);
});
