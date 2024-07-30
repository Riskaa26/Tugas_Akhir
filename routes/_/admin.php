<?php

//Admin Controller

use App\Http\Controllers\AdminController\AparatController;
use App\Http\Controllers\AdminController\DataPendudukController;
use App\Http\Controllers\AdminController\HomeController;
use App\Http\Controllers\AdminController\PenggunaController;
use App\Http\Controllers\AdminController\permintaansuratController;
use App\Http\Controllers\AdminController\SambutanController;
use App\Http\Controllers\AdminController\suratselesaiController;
use App\Http\Controllers\AdminController\VisimisiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "admin/dashboard");
Route::resource('data-penduduk', DataPendudukController::class);
Route::get('Dashboard', [HomeController::class, 'index']);
Route::resource('permintaan-surat', permintaansuratController::class);
Route::get('surat-selesai', [suratselesaiController::class, 'index']);
Route::get('surat-selesai/{permintaan_surat}/cetak', [suratselesaiController::class, 'cetak']);
Route::resource('aparat-desa',AparatController::class);
Route::resource('sambutan',SambutanController::class);
Route::resource('visimisi', VisimisiController::class);
Route::resource('pengguna', PenggunaController::class);



