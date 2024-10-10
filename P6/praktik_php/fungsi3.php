<?php
//soal6
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Hamdana", "Halo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "selamat pagi";

perkenalan($saya);
?>