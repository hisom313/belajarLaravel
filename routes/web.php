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

Route::get('/', 'mahasiswacontroller@index');
Route::get('/tambah', 'mahasiswacontroller@tambah');
Route::get('/edit/{id}', 'mahasiswacontroller@edit');
Route::get('/detail', 'mahasiswacontroller@detail');
Route::post('/mhs-save', 'mahasiswacontroller@save');
Route::get('/hapus/{id}', 'mahasiswacontroller@hapus');
Route::post('/update/{id}', 'mahasiswacontroller@update');
Route::get('/latihan', 'mahasiswacontroller@latihan');
Route::get('/admin1', 'mahasiswacontroller@admin1');
