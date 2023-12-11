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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang Kayla!";
});

Route::get('/halo2', function () {
	return "<h1>Halo, Apa Kabar?<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('P1', function () {
	return view('P1_Hello');
});

Route::get('P2-1', function () {
	return view('P2-1_Link');
});

Route::get('P2-2', function () {
	return view('P2-2_Style');
});

Route::get('P2-3', function () {
	return view('P2-3_LinkTree');
});

Route::get('P3', function () {
	return view('P3_Responsive');
});

Route::get('P4', function () {
	return view('P4_Layout');
});

Route::get('P5-1', function () {
	return view('P5-1_Javascript');
});

Route::get('P5-2', function () {
	return view('P5-2_Javascript');
});

Route::get('P6', function () {
	return view('P6_Validation');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index') -> name('perkalian');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata') -> name('biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir') -> name('formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index') -> name('pegawai');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@index') -> name('keranjangbelanja');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');
Route::get('/keranjangbelanja/tambah','App\Http\Controllers\BelanjaController@tambah');
Route::get('/keranjangbelanja/hapus/{ID}','App\Http\Controllers\BelanjaController@hapus');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index') -> name('nilaikuliah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');

// Route::get('/nilaikuliah/hapus/{ID}','App\Http\Controllers\NilaiKuliahController@hapus');

Route::get('/kopi','App\Http\Controllers\KopiController@index') -> name('kopi');

Route::post('/kopi/store','App\Http\Controllers\KopiController@store');
Route::get('/kopi/edit/{id}','App\Http\Controllers\KopiController@edit');
Route::post('/kopi/update','App\Http\Controllers\KopiController@update');

Route::get('/kopi/tambah','App\Http\Controllers\KopiController@tambah');
Route::get('/kopi/hapus/{id}','App\Http\Controllers\KopiController@hapus');

Route::get('/kopi/cari','App\Http\Controllers\KopiController@cari');

// EAS
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index') -> name('karyawan');

Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
Route::post('/karyawan/update','App\Http\Controllers\KaryawanController@update');

Route::get('/karyawan/cari','App\Http\Controllers\KaryawanController@cari');

Route::get('/karyawan/pesan', 'App\Http\Controllers\KaryawanController@pesan');