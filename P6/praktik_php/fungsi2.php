<?php
//soal5
function perkenalan($nama, $salam) {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Hamdana", "Halo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "selamat Pagi";

perkenalan($saya, $ucapanSalam);
?>