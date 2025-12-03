<?php
echo "=== KONVERSI SUHU ===\n";
echo "1. Celcius ke Fahrenheit\n";
echo "2. Fahrenheit ke Celcius\n";
echo "3. Celcius ke Kelvin\n";
$pilih = intval(readline("Pilih menu (1-3): "));
$suhu = floatval(readline("Masukkan suhu: "));
if ($pilih == 1) {
    $hasil = ($suhu * 9/5) + 32;
    echo "Hasil: " . number_format($hasil, 2) . " °F\n";
} elseif ($pilih == 2) {
    $hasil = ($suhu - 32) * 5/9;
    echo "Hasil: " . number_format($hasil, 2) . " °C\n";
} elseif ($pilih == 3) {
    $hasil = $suhu + 273.15;
    echo "Hasil: " . number_format($hasil, 2) . " K\n";
} else {
    echo "Menu tidak valid\n";
}
?>
