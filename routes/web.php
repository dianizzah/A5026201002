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

