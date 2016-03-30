<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::group(['middleware' => ['api','cors']], function () {
        Route::resource('grupos','GruposController');
        Route::resource('bloques','BloquesController');
        Route::resource('periodos','PeriodosController');
        Route::resource('estados','EstadosController');
        Route::resource('tipos','TiposController');
        Route::resource('series','SeriesController');
        Route::resource('subtipos','SubtiposController');
        Route::resource('elementos','ElementosController');
    });
});
