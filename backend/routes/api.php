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
//Route::post('register', 'App/Http/Controllers/UserController@register');
//Route::post('login', 'UserController@authenticate');
//Route::get('open', 'DataController@open');

//Route::group(['middleware' => ['jwt.verify']], function() {
        //Route::get('user', 'UserController@getAuthenticatedUser');
        //Route::get('closed', 'DataController@closed');
    //});
    Route::group(['namespace' => 'App\Http\Controllers'], function () {
      Route::post('register', 'UserController@register');
      Route::post('login', 'UserController@authenticate');
      Route::get('open', 'DataController@open');
    });

//Route::group([
    //'prefix' => 'auth'
//], function () {
//    Route::post('login', 'AuthController@login');
//    Route::post('registration', 'AuthController@registration');
//    Route::post('logout', 'AuthController@logout');
//    Route::post('refresh', 'AuthController@refresh');
//    Route::post('me', 'AuthController@me');
//});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers'], function() {
Route::get('test', 'iventCreator@callApi');
Route::post('giveAll', 'iventCreator@indexAll');
Route::post('giveAllWhere', 'iventCreator@IndexOneEvent');
Route::post('giveWhereIndex', 'iventCreator@index');
});

//Route::post('registration', 'AuthController@registration');
