<?php

//soal 1.2
$umur; 

if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditentukan.";
}

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"]; 
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array."; 
}
?>
