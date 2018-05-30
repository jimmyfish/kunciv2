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

        Route::match(['get', 'post'], '/create', 'Kunci\CreateKunciController@index')->name('buat_kunci');

        Route::match(['get', 'post'], '/edit/{id}', 'Kunci\AksiKunciController@edit')
            ->where('id', "[0-9]+")->name('edit_kunci');

        Route::get('/hapus/{id}', 'Kunci\AksiKunciController@hapus')
            ->where('id', "[0-9]+")->name('hapus_kunci');
    });
});