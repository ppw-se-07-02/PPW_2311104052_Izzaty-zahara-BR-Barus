<?php
$nilai = [75, 89, 65, 90, 85, 70, 98, 65, 69, 70, 12];

$nilai_tertinggi = max($nilai);
$nilai_terendah = min($nilai);
$rata_rata = array_sum($nilai) / count($nilai);

$jumlah_lulus = 0;
foreach ($nilai as $n) {
    if ($n >= 70) $jumlah_lulus++;
}

rsort($nilai); // urutkan dari terbesar ke kecil

echo "=== DATA NILAI MAHASISWA ===\n";
echo "Nilai tertinggi : $nilai_tertinggi\n";
echo "Nilai terendah  : $nilai_terendah\n";
echo "Rata-rata       : " . number_format($rata_rata, 2) . "\n";
echo "Jumlah lulus    : $jumlah_lulus mahasiswa\n";
echo "Urut (desc)     : " . implode(", ", $nilai) . "\n";
?>
