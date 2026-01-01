<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use App\Models\DonasiUang;
use App\Models\DonasiBarang;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'lansia' => Lansia::all(),
            'donasi_uang' => DonasiUang::all(),
            'donasi_barang' => DonasiBarang::all(),
            'total_lansia' => Lansia::count(),
            'total_donasi_uang' => DonasiUang::sum('jumlah'),
            'total_donasi_barang' => DonasiBarang::sum('jumlah')
        ]);
    }
}
