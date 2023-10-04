<?php

use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', [registerController::class, "register"]);
Route::post('/register', [registerController::class, "proses_tambah_petugas"]);

Route::get('/isi_pengaduan', function () {
    return view('isi_pengaduan');
});

Route::get('/home', [pengaduanController::class, 'halaman_home']);

Route::get('/pengaduan', function () {
    return view('pengaduan');
});

Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_pengaduan']);
Route::post('/isi-pengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);