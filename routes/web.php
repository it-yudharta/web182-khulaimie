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
    return redirect()->route('buku.index');
});


Route::get('/buku', 'bukuController@index')->name('buku.index');
Route::get('/buku/add', 'bukuController@add')->name('buku.add');
Route::post('/buku/add', 'bukuController@store')->name('buku.store');
Route::get('/buku/add/{buku}', 'bukuController@view')->name('buku.view');
Route::get('/buku/edit/{buku}', 'bukuController@edit')->name('buku.edit');
Route::put('/buku/edit/{buku}', 'bukuController@save')->name('buku.save');
Route::delete('/buku/destroy/{buku}', 'bukuController@destroy')->name('buku.destroy');