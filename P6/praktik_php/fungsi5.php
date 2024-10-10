<?php
//soal8
function hitungUmur($thn_lahir) {
    $tahun_sekarang = date("Y");
    $umur = $tahun_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $thn_lahir, $salam="Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Saya berusia " . hitungUmur($thn_lahir) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Elok", 2004); 
?>