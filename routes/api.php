<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware(['cors', 'json.response', 'auth:api'])->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => ['cors', 'json.response']], function () {

    // public routes
    Route::post('/login', 'API\AuthController@login')->name('login.api');
    Route::post('/register', 'API\AuthController@register')->name('register.api');
});

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/logout', 'API\AuthController@logout')->name('logout.api');

    Route::group(['middleware' => 'api.admin'], function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
    });
});
