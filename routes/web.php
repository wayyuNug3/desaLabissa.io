<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfiledesaController;
use App\Http\Controllers\SuratketeranganusahaController;
use App\Http\Controllers\SuratketerangandomisiliController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KartukeluargaController;
use App\Http\Controllers\SktkisController;
use App\Models\Sktkis;

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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//profileDesa
Route::get('/profileDesa', [ProfiledesaController::class, 'index']);

// penduduk
Route::get('/penduduk/{penduduk}/edit', [PendudukController::class, 'show']);
Route::get('/penduduk', [PendudukController::class, 'index']);
Route::post('/penduduk', [PendudukController::class, 'store']);
Route::delete('/penduduk/{penduduk}', [PendudukController::class, 'destroy']);
Route::put('/penduduk/{penduduk}', [PendudukController::class, 'update']);
Route::get('/penduduk/mohonSurat/{penduduk}', [PendudukController::class, 'pendudukMohonSurat']);


// kartuKeluarga
Route::get('/kartuKeluarga/{kartukeluarga:nokk}', [KartukeluargaController::class, 'show']);
Route::get('/kartuKeluarga', [KartukeluargaController::class, 'index']);
Route::post('/kartuKeluarga', [KartukeluargaController::class, 'store']);
Route::delete('/kartuKeluarga/{kartukeluarga}', [KartukeluargaController::class, 'destroy']);
Route::put('/kartuKeluarga/{kartukeluarga}', [KartukeluargaController::class, 'update']);

// layanan
// suratKeteranganUsaha
Route::get('/suratKeteranganUsaha/getLaporan/{suratketeranganusaha}', [
    SuratketeranganusahaController::class,
    'laporan',
]);
Route::get('/suratKeteranganUsaha/{suratketeranganusaha}/edit', [
    SuratketeranganusahaController::class,
    'show',
]);
Route::get('/suratKeteranganUsaha/pemohon/{any}', [
    SuratketeranganusahaController::class,
    'calonPemohonSurat',
]);
Route::get('/suratKeteranganUsaha/pemohonById/{penduduk}', [
    SuratketeranganusahaController::class,
    'pemohonById',
]);
Route::get('/suratKeteranganUsaha', [
    SuratketeranganusahaController::class,
    'index',
]);
Route::get('/suratKeteranganUsaha/surat', [
    SuratketeranganusahaController::class,
    'surat',
]);
Route::post('/suratKeteranganUsaha', [
    SuratketeranganusahaController::class,
    'store',
]);
Route::put('/suratKeteranganUsaha/{suratketeranganusaha}', [
    SuratketeranganusahaController::class,
    'update',
]);
Route::delete('/suratKeteranganUsaha/{suratketeranganusaha}', [
    SuratketeranganusahaController::class,
    'destroy',
]);






//suratKeteranganDomisili
Route::get('/suratKeteranganDomisili', [SuratketerangandomisiliController::class, 'index']);   
Route::post('/suratKeteranganDomisili/pemohon', [SuratketerangandomisiliController::class, 'pendudukBerdomisili']);   
Route::post('/suratKeteranganDomisili', [SuratketerangandomisiliController::class, 'store']);   
Route::get('/suratKeteranganDomisili/getLaporan/{suratketerangandomisili}', [SuratketerangandomisiliController::class, 'laporan']);   

// suratKeteranganTidakMemilikiKis
Route::get('/sktkis', [SktkisController::class, 'index']);   
Route::get('/sktkis/pemohon/{any}', [SktkisController::class, 'calonPemohon']);   
Route::get('/sktkis/pemohonById/{penduduk}', [SktkisController::class, 'calonPemohonById']);   
Route::post('/sktkis', [SktkisController::class, 'store']);   
Route::get('/sktkis/getLaporan/{sktkis}', [SktkisController::class, 'laporan']);   




// endlayanan

// laporanSuratKeluart
Route::get('/laporan', [LaporanController::class, 'index']);   
Route::delete('/laporan/{laporan}', [LaporanController::class, 'destroy']);   
// EndLaporangSuratKeluar
