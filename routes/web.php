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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],  function () {

    Route::get('/buy/{id}', 'HomeController@buy');

    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'AdminController@index');
        // Routes for all resources
        Route::resource('devices', 'DeviceController');
        Route::resource('covers', 'CoverController');
        Route::resource('materials', 'MaterialController');
        Route::resource('types', 'TypeController');
    });
});
