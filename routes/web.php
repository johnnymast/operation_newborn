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

Route::get('/johnny', 'JohnnyController@index')->name('johnny');
Route::group(['as' => 'johnny.', 'prefix' => 'johnny'], function () {

    Route::get('/images', 'JohnnyController@images')->name('johnny');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

