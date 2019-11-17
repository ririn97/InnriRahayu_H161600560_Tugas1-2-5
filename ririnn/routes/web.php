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

Route::get('/tampil', function () {
	echo "ini laravel";
});

Route::get('/tampilview', function () {
	return view('prodi');
});

Route::get('/tampilController','prodicontroller@tampil');

Route::get('/tampilModel','prodicontroller@tampilModel');

