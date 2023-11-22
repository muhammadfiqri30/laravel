<?php

use App\Http\Controllers\detailLaporanController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\registerPetugasController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pengaduanMasyarakatController;
use App\Http\Controllers\petugasController;  
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

Route::get('/laporan', [pengaduanController::class, 'proses_tambah_pengaduan']);


// Route::get('/petugas', function () {
    //     return view('petugas');
// });

Route::get('/login', [loginController::class, "login"]);
Route::post('/login', [loginController::class, "proses_login"]);

Route::get('/register', [registerController::class, "register_masyarakat"]);
Route::post('/register', [registerController::class, "proses_tambah_masyarakat"]);

Route::get('/logout', [loginController::class, "logout"]);

Route::get('/detailLaporan/hapus/{id_pengaduan}', [detailLaporanController::class, "hapus"]);
Route::get('/detailLaporan/detail/{id_pengaduan}', [detailLaporanController::class, "detail"]);
Route::post('/detailLaporan/update/{id_pengaduan}', [detailLaporanController::class, "update"]);
Route::get('/detailLaporan/update/{id_pengaduan}', [detailLaporanController::class, "tampil_update"]);    

Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/laporan', [PengaduanController::class, 'proses_isi_pengaduan']);
Route::post('/laporan', [PengaduanController::class, 'proses_tambah_pengaduan']);

Route::get('/loginPetugas', function () {
    return view('loginPetugas');
});
Route::get('/loginPetugas', [petugasController::class, "index"]);
Route::post('/loginPetugas', [petugasController::class, "login"]);

Route::get('/petugas', [petugasController::class, "tampilPetugas"]);
Route::post('/petugas', [petugasController::class, "tampilData"]);

Route::get('/registerPetugas', [registerPetugasController::class, "register"]);
Route::post('/registerPetugas', [registerPetugasController::class, "proses_tambah_petugas"]);

Route::get('/petugas',[pengaduanMasyarakatController::class, 'index']);