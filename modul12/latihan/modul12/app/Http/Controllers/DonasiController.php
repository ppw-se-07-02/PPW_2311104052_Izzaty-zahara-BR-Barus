<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use App\Models\DonasiUang;
use App\Models\DonasiBarang;

class DashboardController extends Controller
{
    public function index()
    {
        $lansia = Lansia::orderBy('id','desc')->get();
        $donasi_uang = DonasiUang::orderBy('id','desc')->get();
        $donasi_barang = DonasiBarang::orderBy('id','desc')->get();

        $total_lansia = Lansia::count();
        $total_uang = DonasiUang::sum('jumlah');
        $total_barang = DonasiBarang::sum('jumlah');

        return view('dashboard.index', compact(
            'lansia',
            'donasi_uang',
            'donasi_barang',
            'total_lansia',
            'total_uang',
            'total_barang'
        ));
    }
}
