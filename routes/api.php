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

                //ANCHOR T4PELANGGAN
                Route::get('t4pelanggan', 'API\Admin\T4PelangganController@index'); //NOTE VIEW ALL DATA
                Route::get('t4pelanggan/{idpel}', 'API\Admin\T4PelangganController@show'); //NOTE VIEW SINGLE DATA
                Route::post('t4pelanggan', 'API\Admin\T4PelangganController@store'); //NOTE INPUT DATA
                Route::put('t4pelanggan/{idpel}', 'API\Admin\T4PelangganController@update'); //NOTE UPDATE DATA
                Route::delete('t4pelanggan/{idpel}', 'API\Admin\T4PelangganController@destroy'); //NOTE DELETE DATA
                Route::post('t4pelanggan/search', 'API\Admin\T4PelangganController@search'); //NOTE SEARCH DATA

                //ANCHOR T4REKTAGIH
                Route::get('t4rektagih', 'API\Admin\T4RekTagihController@index'); //NOTE VIEW ALL DATA
                Route::get('t4rektagih/{id}', 'API\Admin\T4RekTagihController@show'); //NOTE VIEW SINGLE DATA
                Route::post('t4rektagih', 'API\Admin\T4RekTagihController@store'); //NOTE INPUT DATA
                Route::put('t4rektagih/{id}', 'API\Admin\T4RekTagihController@update'); //NOTE UPDATE DATA
                Route::delete('t4rektagih/{id}', 'API\Admin\T4RekTagihController@destroy'); //NOTE DELETE DATA
                Route::post('t4rektagih/search', 'API\Admin\T4RekTagihController@search'); //NOTE SEARCH DATA

                //ANCHOR T4REKBAYARBAS
                Route::post('t4rekbayarbas/search', 'API\Admin\T4RekBayarBasController@search'); //NOTE SEARCH DATA
            });

        Route::get('lihatprofilpelanggan/{idpel}', 'API\T4ProfilPelangganController@profile'); //NOTE GET DATA

        Route::post('bayartagihan/lihat', 'API\T4BayarTagihanController@lihat'); //NOTE GET DATA
        Route::post('bayartagihan/bayar', 'API\T4BayarTagihanController@bayar'); //NOTE POST DATA
    });
});
