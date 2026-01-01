<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lansia;
use App\Models\DonasiUang;
use App\Models\DonasiBarang;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Lansia::insert([
            ['nama_lengkap'=>'Ibu Siti Aminah','jenis_kelamin'=>'P','tanggal_lahir'=>'1958-03-11','alamat'=>'Medan','penyakit'=>'Hipertensi','tanggal_masuk'=>'2024-01-12'],
            ['nama_lengkap'=>'Bapak Ahmad Fauzi','jenis_kelamin'=>'L','tanggal_lahir'=>'1955-08-21','alamat'=>'Binjai','penyakit'=>'Diabetes','tanggal_masuk'=>'2024-02-10'],
            ['nama_lengkap'=>'Ibu Dewi Lestari','jenis_kelamin'=>'P','tanggal_lahir'=>'1962-01-09','alamat'=>'Lubuk Pakam','penyakit'=>'Asma','tanggal_masuk'=>'2024-01-02'],
            ['nama_lengkap'=>'Bapak Sumarno','jenis_kelamin'=>'L','tanggal_lahir'=>'1953-11-01','alamat'=>'Deli Serdang','penyakit'=>'Stroke Ringan','tanggal_masuk'=>'2024-03-10'],
            ['nama_lengkap'=>'Ibu Hartini','jenis_kelamin'=>'P','tanggal_lahir'=>'1959-04-14','alamat'=>'Medan Johor','penyakit'=>'Reumatik','tanggal_masuk'=>'2024-04-12'],
            ['nama_lengkap'=>'Bapak Rahmat Hadi','jenis_kelamin'=>'L','tanggal_lahir'=>'1957-07-29','alamat'=>'Belawan','penyakit'=>'Hipertensi','tanggal_masuk'=>'2024-01-19'],
            ['nama_lengkap'=>'Ibu Lina Marlina','jenis_kelamin'=>'P','tanggal_lahir'=>'1961-12-03','alamat'=>'Percut','penyakit'=>'Asam urat','tanggal_masuk'=>'2024-05-01'],
            ['nama_lengkap'=>'Bapak Hasan Basri','jenis_kelamin'=>'L','tanggal_lahir'=>'1954-02-20','alamat'=>'Padang Bulan','penyakit'=>'Diabetes','tanggal_masuk'=>'2024-02-11'],
            ['nama_lengkap'=>'Ibu Maryati','jenis_kelamin'=>'P','tanggal_lahir'=>'1956-09-17','alamat'=>'Tembung','penyakit'=>'Hypertensi','tanggal_masuk'=>'2024-03-09'],
            ['nama_lengkap'=>'Bapak Zulkifli','jenis_kelamin'=>'L','tanggal_lahir'=>'1952-10-10','alamat'=>'Medan Tuntungan','penyakit'=>'Kolesterol tinggi','tanggal_masuk'=>'2024-06-01'],
        ]);

        DonasiUang::insert([
            ['nama_donatur'=>'PT Indah Sejahtera','jumlah'=>2000000,'tanggal'=>'2024-01-10','keterangan'=>'Donasi rutin'],
            ['nama_donatur'=>'Budi Santoso','jumlah'=>500000,'tanggal'=>'2024-01-12','keterangan'=>'Donasi pribadi'],
            ['nama_donatur'=>'Komunitas Pemuda Hijrah','jumlah'=>1500000,'tanggal'=>'2024-02-01','keterangan'=>'Santunan'],
            ['nama_donatur'=>'CV Jaya Abadi','jumlah'=>3000000,'tanggal'=>'2024-02-11','keterangan'=>'CSR'],
            ['nama_donatur'=>'Annisa','jumlah'=>200000,'tanggal'=>'2024-02-19','keterangan'=>'Donasi online'],
            ['nama_donatur'=>'Doni Saputra','jumlah'=>700000,'tanggal'=>'2024-02-28','keterangan'=>'Sedekah'],
            ['nama_donatur'=>'Bank Sumut','jumlah'=>5000000,'tanggal'=>'2024-03-01','keterangan'=>'Bantuan lembaga'],
            ['nama_donatur'=>'Mahasiswa USU','jumlah'=>1000000,'tanggal'=>'2024-03-06','keterangan'=>'Open donasi'],
            ['nama_donatur'=>'Hamba Allah','jumlah'=>250000,'tanggal'=>'2024-03-11','keterangan'=>'Sedekah Jumat'],
            ['nama_donatur'=>'Alumni SMA 5','jumlah'=>1800000,'tanggal'=>'2024-03-20','keterangan'=>'Reuni'],
        ]);

        DonasiBarang::insert([
            ['nama_donatur'=>'PT Sumber Rezeki','nama_barang'=>'Beras','jumlah'=>200,'satuan'=>'Kg','tanggal'=>'2024-01-10','keterangan'=>'Beras medium'],
            ['nama_donatur'=>'Bu Rina','nama_barang'=>'Gula','jumlah'=>50,'satuan'=>'Kg','tanggal'=>'2024-01-12','keterangan'=>'Gula pasir'],
            ['nama_donatur'=>'Komunitas Ibu-Ibu','nama_barang'=>'Minyak Goreng','jumlah'=>80,'satuan'=>'Liter','tanggal'=>'2024-01-20','keterangan'=>'Minyak kemasan'],
            ['nama_donatur'=>'PT Maju Bersama','nama_barang'=>'Kasur','jumlah'=>10,'satuan'=>'Unit','tanggal'=>'2024-02-01','keterangan'=>'Kasur busa'],
            ['nama_donatur'=>'Mahasiswa KKN','nama_barang'=>'Mie Instan','jumlah'=>30,'satuan'=>'Dus','tanggal'=>'2024-02-09','keterangan'=>'Indomie'],
            ['nama_donatur'=>'SMK Negeri 1','nama_barang'=>'Susu','jumlah'=>40,'satuan'=>'Kaleng','tanggal'=>'2024-02-20','keterangan'=>'Susu kental manis'],
            ['nama_donatur'=>'Pengajian Ibu-Ibu','nama_barang'=>'Mukena','jumlah'=>15,'satuan'=>'Buah','tanggal'=>'2024-03-01','keterangan'=>'Perlengkapan ibadah'],
            ['nama_donatur'=>'Pak Aldi','nama_barang'=>'Bantal','jumlah'=>25,'satuan'=>'Buah','tanggal'=>'2024-03-10','keterangan'=>'Bantal tidur'],
            ['nama_donatur'=>'Hamba Allah','nama_barang'=>'Al-Quran','jumlah'=>20,'satuan'=>'Buah','tanggal'=>'2024-03-11','keterangan'=>'Waqaf'],
            ['nama_donatur'=>'PT Sehat Selalu','nama_barang'=>'Obat Vitamin','jumlah'=>100,'satuan'=>'Strip','tanggal'=>'2024-03-20','keterangan'=>'Vitamin lansia'],
        ]);
    }
}
