<?php
$targetDirectory = "uploads/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; 

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]);
        $targetFile = $targetDirectory . $fileName;
        $fileType = $_FILES['files']['type'][$i];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah. <br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan gambar. Hanya file JPEG, PNG, dan GIF yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>