<?php
// ==============================
// Menampilkan Teks Sederhana
// ==============================
echo "Hello, World!<br><br>";

// ==============================
// Menggunakan Variabel
// ==============================
$nama = "Izzaty Zahara Br Barus";
$nim = 2211104052;
$hobi = "bermalas malasan tapi kaya";

echo "Nama saya $nama, dan NIM saya $nim, Hobi saya adalah $hobi.<br><br>";

// ==============================
// Menggunakan Konstanta
// ==============================
define("NAMA", "Izzaty Zahara Br Barus");
define("NIM", 2211104052);
define("HOBI", "bermalas malasan tapi kaya");

echo "Nama saya " . NAMA . ", dan NIM saya " . NIM . ", Hobi saya adalah " . HOBI . ".<br><br>";

// ==============================
// Struktur Kontrol If-Else
// ==============================
$nilai = 80;
if ($nilai >= 50) {
    echo "Nilai Anda adalah $nilai, Anda Lulus!<br><br>";
} else {
    echo "Nilai Anda adalah $nilai, Maaf Anda Tidak Lulus!<br><br>";
}

// ==============================
// Struktur Kontrol Switch Case
// ==============================
$nilai = 80;

switch (true) {   // switch(true) agar kondisi bisa menggunakan range
    case ($nilai > 50 && $nilai <= 60):
        echo "Indeks nilai anda C<br><br>";
        break;
    case ($nilai > 60 && $nilai <= 70):
        echo "Indeks nilai anda BC<br><br>";
        break;
    case ($nilai > 70 && $nilai <= 75):
        echo "Indeks nilai anda B<br><br>";
        break;
    case ($nilai > 75 && $nilai <= 80):
        echo "Indeks nilai anda AB<br><br>";
        break;
    case ($nilai > 80 && $nilai <= 100):
        echo "Indeks nilai anda A<br><br>";
        break;
    default:
        echo "Maaf, Anda tidak lulus<br><br>";
        break;
}

// ==============================
// Perulangan For, While, Do-While
// ==============================

echo "Ini adalah contoh perulangan FOR:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

echo "<br><br>Ini adalah contoh perulangan WHILE:<br>";
$i = 1;
while ($i <= 20) {
    echo "$i ";
    $i += 2;
}

echo "<br><br>Ini adalah contoh perulangan DO-WHILE:<br>";
$i = 30;
do {
    echo "$i ";
    $i -= 3;
} while ($i > 0);

echo "<br><br>";

// ==============================
// Fungsi Tanpa Parameter
// ==============================
function cetakGenapTanpaParam()
{
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) echo "$i ";
    }
}

echo "Bilangan genap 1–20 (fungsi tanpa parameter):<br>";
cetakGenapTanpaParam();
echo "<br><br>";

// ==============================
// Fungsi Dengan Parameter
// ==============================
function cetakGenap($awal, $akhir)
{
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) echo "$i ";
    }
}

$a = 10;
$b = 50;

echo "Bilangan genap dari $a sampai $b:<br>";
cetakGenap($a, $b);
echo "<br><br>";

// ==============================
// Fungsi Dengan Return Value
// ==============================
function luasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

$a = 10;
$t = 50;
echo "Luas Segitiga dengan alas $a dan tinggi $t adalah: " . luasSegitiga($a, $t) . "<br><br>";

function luasPermukaanKubus($sisi)
{
    return 6 * ($sisi * $sisi);
}

$s = 10;
echo "Luas Permukaan Kubus dengan sisi $s adalah: " . luasPermukaanKubus($s) . "<br><br>";

// ==============================
// Array Biasa
// ==============================
$arrKendaraan = ["Mobil", "Pesawat", "Kereta Api", "Kapal Laut", "Sepeda"];

echo $arrKendaraan[0] . "<br>";
echo $arrKendaraan[2] . "<br>";
print_r($arrKendaraan);
echo "<br><br>";

// Array Kota
$arrKota = ["Jakarta", "Medan", "Bandung", "Malang", "Sulawesi"];

array_push($arrKota, "Surabaya", "Bali", "Makassar");

echo $arrKota[1] . "<br>"; // Medan
echo $arrKota[2] . "<br>"; // Bandung
echo $arrKota[4] . "<br>"; // Sulawesi
print_r($arrKota);
echo "<br><br>";

// ==============================
// Associative Array Bersarang
// ==============================
$arrMahasiswa = [
    "Rona" => [
        "alamat" => "Banjarmasin",
        "nim" => "11011112",
        "jurusan" => "Software Engineering"
    ],
    "Dhiva" => [
        "alamat" => "Bandung",
        "nim" => "11011101",
               "jurusan" => "Informatika"
    ],
    "Ilham" => [
        "alamat" => "Medan",
        "nim" => "11011309",
        "jurusan" => "Sistem Informasi"
    ],
    "Oku" => [
        "alamat" => "Hongkong",
        "nim" => "11014765",
        "jurusan" => "Teknik Komputer"
    ]
];

echo $arrMahasiswa["Rona"]["alamat"] . "<br>";
echo $arrMahasiswa["Dhiva"]["nim"] . "<br>";
echo $arrMahasiswa["Ilham"]["jurusan"] . "<br><br>";

// ==============================
// Array Nim (Associative)
// ==============================
$arrNim = [
    "Rona" => "11011112",
    "Dhiva" => "11011101",
    "Ilham" => "11011309",
    "Oku" => "11014765",
    "Fadhlan" => "11011113"
];

echo $arrNim["Ilham"] . "<br>";
echo $arrNim["Fadhlan"] . "<br>";

?>
