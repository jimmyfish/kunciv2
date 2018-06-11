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

    Route::prefix('/data-pinjaman')->group(function () {
        Route::get('/', 'DataPinjaman\ListDataPinjamanController@index')->name('list_data_pinjaman');

        Route::match(['get', 'post'], '/create', 'DataPinjaman\CreateDataPinjamanController@index')->name('create_data_pinjaman');
        Route::match(['get', 'post'], '/kembali', 'DataPinjaman\KembalikanDataPinjamanController@index')->name('kembalikan_data_pinjaman');
    });

    Route::prefix('/region')->group(function () {
        Route::get('/', 'Region\ListRegionController@index')->name('list_region');

        Route::match(['get', 'post'],'/create', 'Region\CreateRegionController@index')->name('create_region');

        Route::match(['get', 'post'],'/edit/{id}', 'Region\EditRegionController@index')->name('edit_region');

        Route::get('/hapus/{id}', 'Region\DeleteRegionController@index')->name('delete_region');
    });

    Route::prefix('/api')->group(function () {
        Route::get('/kunci-result/{pengguna_id}', 'Api\ListKunciAsRegionController@index')->name('api_kunci');
    });
});