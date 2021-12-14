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

//link route tugas 4 juga
Route::get('prak2', function () {
    //tidak banyak proses atau persiapan load form
    return view('praktikum2');
});
Route::get('tgs4', function () {
    //tidak banyak proses atau persiapan load form
    return view('tugas4');
});

//jika butuh load banyak proses
Route::get('isitugasphp',"ViewController@showForm");
Route::get('tugasphp',"ViewController@resultForm");

Route::get('ets',"ViewController@formets");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD 25/11
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//route CRUD kursi
Route::get('/kursi','KursiController@index');
Route::get('/kursi/add','KursiController@add');
Route::post('/kursi/store','KursiController@store');
Route::get('/kursi/edit/{kode}','KursiController@edit');
Route::post('/kursi/update','KursiController@update');
Route::get('/kursi/hapus/{kode}','KursiController@delete');
Route::get('/kursi/search','KursiController@search');
Route::get('/kursi/view/{kode}','KursiController@detail');
