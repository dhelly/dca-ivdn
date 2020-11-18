<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    /** rota de login */
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    /** Rotas Protegidas */
    Route::group(['middleware' => ['auth']], function () {
        /** Dashboard Home */
        Route::get('home', 'AuthController@home')->name('home');

        /** Maps */
        Route::resource('maps', 'MapController');
    });

    /** logout */
    Route::get('logout', 'AuthController@logout')->name('logout');
});

Route::get('/', function () {
    return view('public.maps');
})->name('public.maps');

Route::get('/list', function () {
    return view('public.list');
})->name('public.list');
