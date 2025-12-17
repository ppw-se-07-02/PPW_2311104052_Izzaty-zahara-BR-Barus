<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Route tanpa parameter (5)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return 'Halaman Home';
});
Route::get('/about', function () {
    return 'Halaman About';
});
Route::get('/contact', function () {
    return 'Halaman Contact';
});
Route::get('/profile', function () {
    return 'Halaman Profile';
});
Route::get('/help', function () {
    return 'Halaman Help';
});
/*
|--------------------------------------------------------------------------
| Route dengan parameter (3)
|--------------------------------------------------------------------------
*/
Route::get('/user/{nama}', function ($nama) {
    return 'Nama User : ' . $nama;
});
Route::get('/produk/{id}', function ($id) {
    return 'ID Produk : ' . $id;
});
Route::get('/kelas/{nama}', function ($nama) {
    return 'Kelas : ' . $nama;
});
/*
|--------------------------------------------------------------------------
| Route dengan parameter opsional (3)
|--------------------------------------------------------------------------
*/
Route::get('/kota/{nama?}', function ($nama = 'Tidak diisi') {
    return 'Kota : ' . $nama;
});
Route::get('/umur/{usia?}', function ($usia = 0) {
    return 'Usia : ' . $usia;
});
Route::get('/hobi/{hobi?}', function ($hobi = 'Belum ada') {
    return 'Hobi : ' . $hobi;
});
/*
|--------------------------------------------------------------------------
| Route View & Blade
|--------------------------------------------------------------------------
*/
Route::get('/asset', function () {
    return view('asset');
});
Route::get('/mahasiswa', function () {
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswa', compact('nilai'));
});
/*
|--------------------------------------------------------------------------
| Route Controller
|--------------------------------------------------------------------------
*/
Route::get('/mahasiswa-controller', [MahasiswaController::class, 'index']);