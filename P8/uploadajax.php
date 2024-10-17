<?php 
if (isset($_FILES['files'])) {
    $errors = array();
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        
        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "Ekstensi file $file_name tidak diizinkan. Hanya JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        }

       
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB.";
        }

        
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
