<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BentukPengawasanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\DugaanPelanggaranController;
use App\Http\Controllers\Admin\DugaanSengketaController;
use App\Http\Controllers\Admin\InputReportController;
use App\Http\Controllers\Admin\JenisPemilihanController;
use App\Http\Controllers\Admin\TahapanController;
use App\Http\Controllers\Admin\ValidasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/division', DivisionController::class);
    Route::resource('/input-report', InputReportController::class);
    Route::resource('/jenis-pemilihan', JenisPemilihanController::class);
    Route::resource('/tahapan', TahapanController::class);
    Route::resource('/bentuk-pengawasan', BentukPengawasanController::class);
    Route::resource('/dugaan-pelanggaran', DugaanPelanggaranController::class);
    Route::resource('/dugaan-sengketa', DugaanSengketaController::class);
    Route::resource('/validasi', ValidasiController::class);
});
