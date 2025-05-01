<?php
define("PAJAK", 0.10);

$barang = array(
    "Keyboard" => 150000
);

$jumlahBeli = 2;

$namaBarang = "Keyboard";
$hargaSatuan = $barang[$namaBarang];

$totalSebelumPajak = $hargaSatuan * $jumlahBeli;

$pajak = $totalSebelumPajak * PAJAK;

$totalBayar = $totalSebelumPajak + $pajak;

echo "<div style='border:1px solid black; 
    padding:20px; 
    width:fit-content; 
    font-family:sans-serif; 
    background-color:#d4fcd4; 
    font-size:18px; 
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);'>";
echo "<h2 style='margin:0;'>Perhitungan Total Pembelian (Dengan Array)</h2>";
echo "<hr>";
echo "Nama Barang: $namaBarang<br>";
echo "Harga Satuan: Rp " . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Jumlah Beli: $jumlahBeli<br>";
echo "Total Harga (Sebelum Pajak): Rp " . number_format($totalSebelumPajak, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "<br>";
echo "<b>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</b>";
echo "</div>";
?>