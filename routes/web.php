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

//jika butuh load banyak proses
Route::get('isitugas4',"ViewController@showForm");
Route::get('tugas4',"ViewController@resultForm");

