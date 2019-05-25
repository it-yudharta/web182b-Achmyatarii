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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/koleksi', 'koleksiController@index');
Route::get('/koleksi/tambah', 'koleksiController@create');
Route::get('/koleksi/store', 'koleksiController@store');
Route::get('/koleksi/{id}/edit', 'koleksiController@edit');
Route::get('/koleksi/{id}/update', 'koleksiController@update');
Route::get('/koleksi/{id}/hapus', 'koleksiController@destroy');