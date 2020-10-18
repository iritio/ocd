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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/index', function () {
    return view('index');
});

Route::get('/ketentuan-layanan', function () {
    return view('ketentuan-layanan');
});

Route::get('/standar-komunitas', function () {
    return view('standar-komunitas');
});

Route::get('/pusat-bantuan/mengelola-akun', function () {
    return view('pusat-bantuan/mengelola-akun');
});

Route::get('/pusat-bantuan/menggunakan-ocd', function () {
    return view('pusat-bantuan/menggunakan-ocd');
});

Route::get('/career', function () {
    return view('carerr');
});
