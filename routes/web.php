<?php

//Admin Controller


use App\Http\Controllers\FrontController\WebController;
use App\Http\Controllers\KepaladesaController\RekapDataPendudukController;

use App\Http\Controllers\KepaladesaController\RekapLaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\HomeController;
use App\Http\Controllers\AdminController\DataPendudukController;
use App\Http\Controllers\AdminController\permintaansuratController;
use App\Http\Controllers\AdminController\suratselesaiController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\AdminController\LaporanController;
use App\Http\Controllers\AuthController;

//Kepala Desa Controller
use App\Http\Controllers\KepaladesaController\berandaController;

//Front
use App\Http\Controllers\FrontController\BuatSurat\BuatSuratController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of tccem will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Admin 
Route::get('public', [HomeController::class,'index']);   
Route::get('Dashboard', [HomeController::class,'index']);
Route::get('/', [HomeController::class, 'index']);

//Admin 
Route::resource('data-penduduk',DataPendudukController::class);
Route::resource('permintaan-surat',permintaansuratController::class);
Route::get('admin/permintaan-surat/terima/{id}', [permintaanSuratController::class, 'halamanTerima'])->name('permintaan-surat.terima');
Route::get('admin/surat-selesai/cetak/{id}', [suratselesaiController::class, 'cetak']);

Route::resource('surat-selesai',suratselesaiController::class);

Route::get('home', function () {return view('components.front');  });

//Kepala Desa
Route::get('Kepdes/beranda', [berandaController::class,'index']);  
Route::get('Kepdes/data-penduduk', [rekapdatapendudukController::class,'index']);  
Route::get('Kepdes/data-penduduk/{data_penduduk}', [rekapdatapendudukController::class,'show']);  




Route::prefix('admin')->group(function () {include "_/admin.php";});


//Front
Route::get('home', [WebController::class,'index']);
Route::get('buat-surat', [WebController::class,'surat']);
Route::post('buat-surat', [WebController::class,'storeSurat']);
Route::get('panduan', [WebController::class,'panduan']);
Route::get('cek-nik', [WebController::class,'ceknik']);
Route::post('Pengajuan-Surat', [WebController::class,'pengajuanSurat']);
Route::get('berita', [WebController::class,'berita']);


// Route untuk menerima permintaan surat
Route::put('admin/permintaan-surat/diterima/{id}', [PermintaanSuratController::class, 'terima'])->name('permintaan-surat.terima');

// Route untuk menolak permintaan surat
Route::put('admin/permintaan-surat/ditolak/{id}', [PermintaanSuratController::class, 'tolak'])->name('permintaan-surat.tolak');
Route::get('admin/permintaan-surat/cetak/{id}', [SuratController::class, 'cetak'])->name('permintaan-surat.cetak');


Route::prefix('admin')->group(function () {
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
});

Route::get('Kepdes/laporan', [RekapLaporanController::class, 'index']);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



