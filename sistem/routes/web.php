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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/ketentuan-layanan', function () {
    return view('ketentuan-layanan');
})->name('ketentuan-layanan');

Route::get('/standar-komunitas', function () {
    return view('standar-komunitas');
})->name('standar-komunitas');

Route::get('/pusat-bantuan/mengelola-akun', function () {
    return view('pusat-bantuan/mengelola-akun');
})->name('mengelola-akun');

Route::get('/pusat-bantuan/menggunakan-ocd', function () {
    return view('pusat-bantuan/menggunakan-ocd');
})->name('menggunakan-ocd');

// Career dipake di lain
// Route::get('/career', function () {
//     return view('carerr');
// })->name('career');
