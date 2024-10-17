<?php
$pattern = '/[a-z]+/';
$text = 'This is a sample text.';
if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
}else{
    echo "Tidak ada huruf kecil!";
}
echo "<br>";
$pattern2 = '/[0-9]+/';
$text2 = 'There are 123 apple.';
if(preg_match($pattern2, $text2,$matches)){
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}
?>