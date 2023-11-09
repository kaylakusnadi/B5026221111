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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');