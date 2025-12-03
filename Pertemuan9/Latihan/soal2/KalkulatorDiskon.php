<?php
echo "=== KALKULATOR DISKON ===\n";

$total = floatval(readline("Total belanja: Rp "));

if ($total >= 1000000) {
    $diskon = 0.30;
} elseif ($total >= 500000) {
    $diskon = 0.20;
} elseif ($total >= 100000) {
    $diskon = 0.10;
} else {
    $diskon = 0;
}

$jumlah_diskon = $total * $diskon;
$total_bayar = $total - $jumlah_diskon;

echo "Total Belanja : Rp " . number_format($total, 0) . "\n";
echo "Diskon        : Rp " . number_format($jumlah_diskon, 0) . " (" . ($diskon*100) . "%)\n";
echo "Total Bayar   : Rp " . number_format($total_bayar, 0) . "\n";
?>
