<?php

use Illuminate\Support\Facades\Route;

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
    return view('template');
});

Route::get('/home','\App\Http\Controllers\HomeController@index');


Route::get('/karyawan','\App\Http\Controllers\KaryawanController@data');

Route::get('/karyawan/tambah','\App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','\App\Http\Controllers\KaryawanController@store');

Route::get('/karyawan/delete/{id}', '\App\Http\Controllers\KaryawanController@delete');

Route::get('/karyawan/edit/{id}', '\App\Http\Controllers\KaryawanController@edit');
Route::post('/karyawan/update','\App\Http\Controllers\KaryawanController@update');

Route::get('karyawan/cari', '\App\Http\Controllers\KaryawanController@cari');