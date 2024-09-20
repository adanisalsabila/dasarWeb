<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik >= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
   echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf  : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br> <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 0;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah <br><br>";


$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
   $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor <br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
   if ($nilai < 60) {
    echo "Nilai : $nilai (Tidak Lulus) <br>";
    continue;
   }
   echo "Nilai : $nilai (Lulus) <br>";
}
echo "<br><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

array_splice($nilaiSiswa, 0, 2); 
array_splice($nilaiSiswa, -2); 

$totalNilai = array_sum($nilaiSiswa);

$rataRata = $totalNilai / count($nilaiSiswa);

echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai\n";
echo "Rata-rata nilai: $rataRata";
?>