<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah : {$hasilTambah} <br>";
echo "Hasil Kurang : {$hasilKurang} <br>";
echo "Hasil Kali : {$hasilKali} <br>";
echo "Hasil Bagi : {$hasilBagi} <br>";
echo "Sisa Bagi : {$sisaBagi} <br>";
echo "Pangkat : {$pangkat} <br> <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama : {$hasilSama} <br>";
echo "Hasil Tidak Sama : {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil : {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar : {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama : {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama : {$hasilLebihBesarSama} <br> <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And : {$hasilAnd} <br>";
echo "Hasil Or : {$hasilOr} <br>";
echo "Hasil Not A : {$hasilNotA} <br>";
echo "Hasil Not B : {$hasilNotB} <br> <br>";

$hasilPenugasanPenjumlahan = $a += $b;
$hasilPenugasanPengurangan = $a -= $b;
$hasilPenugasanPerkalian = $a *= $b;
$hasilPenugasanPembagian = $a /= $b;
$hasilPenugasanSisaBagi = $a %= $b;

echo "Hasil Penugasan Penjumlahan : {$hasilPenugasanPenjumlahan} <br>";
echo "Hasil Penugasan Pengurangan : {$hasilPenugasanPengurangan} <br>";
echo "Hasil Penugasan Perkalian : {$hasilPenugasanPerkalian} <br>";
echo "Hasil Penugasan Pembagian : {$hasilPenugasanPembagian} <br>";
echo "Hasil Penugasan Sisa Bagi : {$hasilPenugasanSisaBagi} <br> <br>";



?>