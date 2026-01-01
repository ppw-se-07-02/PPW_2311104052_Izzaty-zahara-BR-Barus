<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LansiaController;
use App\Http\Controllers\DonasiUangController;
use App\Http\Controllers\DonasiBarangController;

Route::get('/insert/raw', [LansiaController::class, 'insertRaw']);
Route::get('/insert/query', [LansiaController::class, 'insertQuery']);
Route::get('/insert/eloquent', [LansiaController::class, 'insertEloquent']);


// ================= HALAMAN UTAMA =================
Route::get('/', function () {
    return redirect('/dashboard');
});

// ================= DASHBOARD =====================
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

// ================= CRUD LANSIA ===================
Route::resource('lansia', LansiaController::class);

// ================= DONASI UANG ===================
Route::resource('donasi-uang', DonasiUangController::class);

// ================= DONASI BARANG =================
Route::resource('donasi-barang', DonasiBarangController::class);

Route::get('/insert-raw', [DashboardController::class, 'insertRaw']);
Route::get('/insert-query', [DashboardController::class, 'insertQueryBuilder']);
Route::get('/insert-eloquent', [DashboardController::class, 'insertEloquent']);
