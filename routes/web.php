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
    return view('gambar');
});

Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create');
Route::post('/artikel', 'ArtikelController@store');
Route::get('/artikel/{id_artikel}', 'ArtikelController@show');
Route::get('/artikel/{id_artikel}/edit', 'ArtikelController@edit');
Route::put('/artikel/{id_artikel}', 'ArtikelController@update');
Route::delete('/artikel/{id_artikel}', 'ArtikelController@delete');