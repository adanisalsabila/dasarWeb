<?php
//buat fungsi

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";
perkenalan($saya);

echo "<hr>";

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
    

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Umur saya adalah ". hitungUmur(2004, 2024) . " tahun <br/>";
    echo "Senang berkenalan dengan Anda <br/>";
}

perkenalan ("Elok");

?>
