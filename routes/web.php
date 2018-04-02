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

Route::get('/','AlbumsController@index');
Route::get('/album','AlbumsController@index');
Route::get('/album/create','AlbumsController@create');
Route::post('/album/store','AlbumsController@store');
Route::get('/photo/index', 'PhotoController@index');
Route::get('/photo', 'PhotoController@index');
Route::get('/photo/create', 'PhotoController@create');
Route::post('/photo/store', 'PhotoController@store');
