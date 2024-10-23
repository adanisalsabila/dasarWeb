<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $payment = htmlspecialchars($_POST['payment']);

    if (isset($_FILES['payment_proof']) && $_FILES['payment_proof']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['payment_proof']['tmp_name'];
        $fileName = $_FILES['payment_proof']['name'];
        $fileSize = $_FILES['payment_proof']['size'];
        $fileType = $_FILES['payment_proof']['type'];

        $uploadFileDir = 'uploads/';
        $dest_path = $uploadFileDir . basename($fileName);

        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (in_array($fileExtension, $allowedExtensions) && in_array($fileType, ['image/jpeg', 'image/png', 'image/gif'])) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                echo "<h2>≽^• thank you, $name! ˕ • ྀི≼</h2>";
                echo "<p>email: $email</p>";
                echo "<p>payment method: $payment</p>";
                echo "<p>Your purchase is being processed!</p>";
                echo "<p>payment proof: <a href='$dest_path'>$fileName</a></p>";
            } else {
                echo "<p>there was an error uploading the payment proof.</p>";
            }
        } else {
            echo "<p>only image files in JPG, JPEG, PNG, or GIF formats are allowed.</p>";
        }
    } else {
        echo "<p>please upload proof of payment.</p>";
    }
}
