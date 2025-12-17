<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $nilai = [80, 64, 30, 76, 95];
        return view('mahasiswa', compact('nilai'));
    }
}
