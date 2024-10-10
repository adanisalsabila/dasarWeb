<?php
//soal8
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $thn_lahir, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    
    echo "Saya berusia ".hitungUmur($thn_lahir, 2023)." tahun<br/>"; 
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Elok");