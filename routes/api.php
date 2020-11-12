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

    //NOTE SEBELUM LOGIN
    Route::post('/login', 'API\AuthController@login')->name('login.api');
    Route::post('/register', 'API\AuthController@register')->name('register.api');

    //ANCHOR Middleware untuk auth api login
    Route::middleware('auth:api')->group(function () {

        //NOTE UNTUK USER
        Route::post('/logout', 'API\AuthController@logout')->name('logout.api');

        //ANCHOR Middleware untuk admin
        /*
        Route::group(['middleware' => 'api.admin'], function () {
            Route::get('/user', function (Request $request) {
                return $request->user();
            });
        });
        */

        Route::prefix('admin')
            ->middleware('api.admin')
            ->group(function () {
                Route::get('/user', function (Request $request) {
                    return $request->user();
                });

                Route::get('t4pelanggan', 'API\Admin\T4PelangganController@index'); //NOTE VIEW ALL DATA
                Route::get('t4pelanggan/{idpel}', 'API\Admin\T4PelangganController@show'); //NOTE VIEW SINGLE DATA
                Route::put('t4pelanggan/', 'API\Admin\T4PelangganController@store'); //NOTE INPUT DATA
            });
    });
});
