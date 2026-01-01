<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonasiUang extends Model
{
    protected $table = 'donasi_uangs';

    protected $fillable = [
        'nama_donatur',
        'jumlah',
        'metode',
        'tanggal',
        'keterangan'
    ];
}
