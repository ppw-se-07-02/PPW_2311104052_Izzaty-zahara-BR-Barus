<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonasiBarang extends Model
{
    protected $table = 'donasi_barangs';

    protected $fillable = [
        'nama_donatur',
        'nama_barang',
        'jumlah',
        'satuan',
        'tanggal',
        'keterangan'
    ];
}
