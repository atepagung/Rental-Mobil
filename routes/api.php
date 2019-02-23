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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('auth')->group(function () {
    Route::get('/token/{token}', 'Api\AuthController@loginWithToken');
    Route::post('/email', 'Api\AuthController@loginWithEmail');
});

Route::prefix('bookings')->group(function () {
    Route::get('/prepare/{token}', 'Api\BookingController@prepare');
    //Route::get('/pickupPlace/{token}', 'Api\BookingController@getpickupPlace');
    //Route::get('/destination/{token}', 'Api\BookingController@getdestination');
    Route::post('/armada/{token}', 'Api\BookingController@getArmada');
    //Route::post('/email', 'Api\AuthController@loginWithEmail');
});