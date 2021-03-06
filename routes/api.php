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

Route::group(['prefix'=>'v1.0'], function(){
    Route::post('authenticate', 'Auth\LoginController@login');
});

Route::group(['prefix'=>'restricted', 'middleware' => 'auth:api'], function(){
    Route::get('logout', 'Auth\LoginController@logout');
});

// Route::group(['prefix' => 'v1.0', 'middleware' => ['cors']], function (){
Route::group(['prefix' => 'v1.0', 'middleware' => ['cors']], function ()
{
    Route::resource('songs', 'SongController', ['except' => ['create', 'edit']]);
    Route::post('songs/image/{id}', 'SongController@image');
    Route::resource('artists', 'ArtistController', ['except' => ['create', 'edit']]);
    Route::resource('gameVersions', 'GameVersionController', ['except' => ['create', 'edit']]);
    Route::post('gameVersions/image/{id}', 'GameVersionController@image');
    Route::resource('stepmakers', 'StepmakerController', ['except' => ['create', 'edit']]);
    Route::resource('styles', 'StyleController', ['except' => ['create', 'edit']]);
    Route::resource('levels', 'LevelController', ['except' => ['create', 'edit']]);
    Route::get('levels/random-by-level/single', 'LevelController@singleRandomByLevel');
    Route::get('levels/random-by-level/double', 'LevelController@doubleRandomByLevel');
    Route::get('levels/random-by-range/single', 'LevelController@singleRandomByRange');
    Route::get('levels/random-by-range/double', 'LevelController@doubleRandomByRange');
    Route::get('levels/stepmakers/all', 'LevelController@levelsFromStepmaker');
    Route::resource('typesSongs', 'TypeSongController', ['except' => ['create', 'edit']]);
    Route::resource('channels', 'ChannelController', ['except' => ['create', 'edit']]);
    Route::get('channels/songs/all', 'ChannelController@getSongsByChannel');
    Route::resource('chartTypes', 'ChartTypeController', ['except' => ['create', 'edit']]);

    // // Route to create a new role
    Route::post('roles', 'SecurityController@createRole');
    // // Route to create a new permission
    Route::post('permissions', 'SecurityController@createPermission');
    // // Route to assign role to user
    Route::post('assign-role', 'SecurityController@assignRole');
    // // Route to attache permission to a role
    Route::post('attach-permission', 'SecurityController@attachPermission');
});

// Route::group(['prefix' => 'v1.0', 'middleware' => ['ability:Administrator,query-users']], function()
Route::group(['prefix' => 'v1.0'], function()
{
    Route::get('users', 'SecurityController@index');

});
