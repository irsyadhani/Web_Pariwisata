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
 
//route untuk admin
Route::get('/backend/admin', 'AdminController@index');
Route::get('/backend/admin/tambah', 'AdminController@tambah');
Route::post('/backend/admin/store', 'AdminController@store');
Route::get('/backend/admin/edit/{id}', 'AdminController@edit');
Route::post('/backend/admin/update', 'AdminController@update');
Route::get('/backend/admin/hapus/{id}', 'AdminController@hapus');

//route untuk daerah
Route::get('/backend/daerah', 'DaerahController@index');
Route::get('/backend/daerah/tambah', 'DaerahController@tambah');
Route::post('/backend/daerah/store', 'DaerahController@store');
Route::get('/backend/daerah/edit/{id}', 'DaerahController@edit');
Route::post('/backend/daerah/update', 'DaerahController@update');
Route::get('/backend/daerah/hapus/{id}', 'DaerahController@hapus');

//route untuk kategori
Route::get('/backend/kategori', 'KategoriController@index');
Route::get('/backend/kategori/tambah', 'KategoriController@tambah');
Route::post('/backend/kategori/store', 'KategoriController@store');
Route::get('/backend/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/backend/kategori/update', 'KategoriController@update');
Route::get('/backend/kategori/hapus/{id}', 'KategoriController@hapus');

//route untuk pengguna
Route::get('/backend/pengguna', 'PenggunaController@index');
Route::get('/backend/pengguna/tambah', 'PenggunaController@tambah');
Route::post('/backend/pengguna/store', 'PenggunaController@store');
Route::get('/backend/pengguna/edit/{id}', 'PenggunaController@edit');
Route::post('/backend/pengguna/update', 'PenggunaController@update');
Route::get('/backend/pengguna/hapus/{id}', 'PenggunaController@hapus');

//route untuk detail pariwisata
Route::get('/backend/detail_pariwisata', 'DetailpariwisataController@index');

//route untuk foto pariwisata
Route::get('/backend/foto_pariwisata', 'FotopariwisataController@index');

//route untuk jadwal buka
Route::get('/backend/jadwal_buka', 'JadwalbukaController@index');

//route untuk pariwisata
Route::get('/backend/pariwisata', 'PariwisataController@index');

//route untuk detail review
Route::get('/backend/review', 'ReviewController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
