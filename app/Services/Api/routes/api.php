<?php

/*
|--------------------------------------------------------------------------
| Service - API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Prefix: /api/api
Route::group(['prefix' => 'api'], function() {

    // Prefix: /v1
    Route::group(['prefix' => 'v1'], function() {

    // Controllers live in src/Services/Api/Http/Controllers

    Route::get('/users', 'UserController@index');

});

});
