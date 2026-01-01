<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // ================= INSERT =================
    public function insertData()
    {
        $nim = '23111040';

        // cek dulu biar tidak duplicate
        $cek = DB::table('mahasiswas')->where('nim', $nim)->first();
        if ($cek) {
            return 'NIM sudah ada, insert dibatalkan';
        }

        DB::table('mahasiswas')->insert([
            'nim' => $nim,
            'nama_lengkap' => 'Izzaty Zahara Br Barus',
            'tempat_lahir' => 'Medan',
            'tanggal_lahir' => '2005-02-24',
            'alamat' => 'Jl. Kebon Jeruk No. 123',
            'fakultas' => 'Ilmu Komputer',
            'jurusan' => 'Sistem Informasi',
        ]);

        return 'INSERT DATA BERHASIL';
    }

    // ================= SELECT =================
    public function selectData()
    {
        $data = DB::table('mahasiswas')->get();
        return response()->json($data);
    }

    // ================= UPDATE =================
    public function updateData()
    {
        DB::table('mahasiswas')
            ->where('nim', '23111040')
            ->update([
                'alamat' => 'Jl. Merdeka No. 45',
                'jurusan' => 'Teknik Informatika',
            ]);

        return 'UPDATE DATA BERHASIL';
    }

    // ================= DELETE =================
    public function deleteData()
    {
        DB::table('mahasiswas')
            ->where('nim', '23111040')
            ->delete();

        return 'DELETE DATA BERHASIL';
    }
}
