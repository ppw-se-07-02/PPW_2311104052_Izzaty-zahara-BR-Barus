<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    protected $table = 'lansias';
    
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'penyakit',
        'tanggal_masuk',
    ];
}
