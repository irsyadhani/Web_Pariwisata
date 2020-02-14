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
Route::get('/backend/daerah/cari','DaerahController@cari');

//route untuk kategori
Route::get('/backend/kategori', 'KategoriController@index');
Route::get('/backend/kategori/tambah', 'KategoriController@tambah');
Route::post('/backend/kategori/store', 'KategoriController@store');
Route::get('/backend/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/backend/kategori/update', 'KategoriController@update');
Route::get('/backend/kategori/hapus/{id}', 'KategoriController@hapus');
Route::get('/backend/kategori/cari','KategoriController@cari');

//route untuk pengguna
Route::get('/backend/pengguna', 'PenggunaController@index');
Route::get('/backend/pengguna/tambah', 'PenggunaController@tambah');
Route::post('/backend/pengguna/store', 'PenggunaController@store');
Route::get('/backend/pengguna/edit/{id}', 'PenggunaController@edit');
Route::post('/backend/pengguna/update', 'PenggunaController@update');
Route::get('/backend/pengguna/hapus/{id}', 'PenggunaController@hapus');
Route::get('/backend/pengguna/cari','PenggunaController@cari');

//route untuk detail pariwisata
Route::get('/backend/detail_pariwisata', 'DetailpariwisataController@index');
Route::get('/backend/detail_pariwisata/cari','DetailpariwisataController@cari');

//route untuk foto pariwisata
Route::get('/backend/foto_pariwisata', 'FotopariwisataController@index');
Route::get('/backend/foto_pariwisata/cari','FotopariwisataController@cari');
Route::get('/backend/foto_pariwisata/tambah', 'FotopariwisataController@tambah');
Route::post('/backend/foto_pariwisata/store', 'FotopariwisataController@store');
Route::get('/backend/foto_pariwisata/edit/{id}', 'FotopariwisataController@edit');
Route::post('/backend/foto_pariwisata/update', 'FotopariwisataController@update');
Route::get('/backend/foto_pariwisata/hapus/{id}', 'FotopariwisataController@hapus');

//route untuk jadwal buka
Route::get('/backend/jadwal_buka', 'JadwalbukaController@index');
Route::get('/backend/jadwal_buka/cari','JadwalbukaController@cari');

//route untuk pariwisata
Route::get('/backend/pariwisata', 'PariwisataController@index');
Route::get('/backend/pariwisata/cari','PariwisataController@cari');

//route untuk detail review
Route::get('/backend/review', 'ReviewController@index');
Route::get('/backend/review/cari','ReviewController@cari');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/cari','HomeController@cari');
