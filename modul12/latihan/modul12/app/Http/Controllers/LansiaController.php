<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LansiaController extends Controller
{
   // ================= INSERT RAW SQL =================
public function insertRaw()
{
    DB::insert("
        INSERT INTO lansias 
        (nama_lengkap, jenis_kelamin, tanggal_lahir, alamat, penyakit, tanggal_masuk)
        VALUES (?, ?, ?, ?, ?, ?)
    ", [
        'Ibu Siti Aminah',
        'P',
        '1958-03-11',
        'Medan',
        'Hipertensi',
        '2024-02-10'
    ]);

    return "DATA RAW SQL BERHASIL MASUK";
}



// ================= INSERT QUERY BUILDER =================
public function insertQuery()
{
    DB::table('lansias')->insert([
        'nama_lengkap'   => 'Bapak Ahmad Fauzi',
        'jenis_kelamin'  => 'L',
        'tanggal_lahir'  => '1955-08-21',
        'alamat'         => 'Binjai',
        'penyakit'       => 'Diabetes',
        'tanggal_masuk'  => '2024-01-10'
    ]);

    return "DATA QUERY BUILDER BERHASIL MASUK";
}



// ================= INSERT ELOQUENT ORM =================
public function insertEloquent()
{
    Lansia::create([
        'nama_lengkap'   => 'Ibu Ratna Dewi',
        'jenis_kelamin'  => 'P',
        'tanggal_lahir'  => '1962-09-01',
        'alamat'         => 'Medan Johor',
        'penyakit'       => 'Reumatik',
        'tanggal_masuk'  => '2024-03-01'
    ]);

    return "DATA ELOQUENT BERHASIL MASUK";
}

}
