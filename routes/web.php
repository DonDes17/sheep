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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FrontController@index');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('part', 'DashboardController@balance')->name('part');
Route::resource('spending', 'SpendingController');
Route::resource('user', 'PictureController');
