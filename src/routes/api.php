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

Route::namespace('Api')->group(function () {

    // TODO サンプル
    Route::get('/getSample', 'SampleController@getSample');
    Route::post('/postSample', 'SampleController@postSample');

    Route::group(['middleware' => ['auth:web']], function () {
        // ログインが必要なものは以下に書く

    });

});