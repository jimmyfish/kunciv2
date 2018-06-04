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

Route::middleware(['auth'])->group(function () {
    Route::prefix('/kunci')->group(function () {
        Route::get('/', 'Kunci\ListKunciController@index')->name('list_kunci');

        Route::match(['get', 'post'], '/create', 'Kunci\CreateKunciController@index')->name('create_kunci');

        Route::match(['get', 'post'], '/edit/{id}', 'Kunci\EditKunciController@index')->name('edit_kunci');

        Route::get('/hapus/{id}', 'Kunci\DeleteKunciController@index')->name('delete_kunci');
    });

    Route::prefix('/pengguna')->group(function () {
        Route::get('/', 'Pengguna\ListPenggunaController@index')->name('list_pengguna');

        Route::match(['get', 'post'],'/create', 'Pengguna\CreatePenggunaController@index')->name('create_pengguna');

        Route::match(['get', 'post'],'/edit/{id}', 'Pengguna\EditPenggunaController@index')->name('edit_pengguna');

        Route::get('/hapus/{id}', 'Pengguna\DeletePenggunaController@index')->name('delete_pengguna');
    });
});