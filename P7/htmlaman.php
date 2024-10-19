<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="html_aman.php" method="POST">
        <label for="keyword">Masukkan Contoh Injection</label> <br>
        <input type="text" name="keyword"> <br>
        <label for="Email">Email</label> <br>
        <input type="text" name="email"> <br>
        <input type="submit" value="Search">
    </form>
    <?php
        if (isset($_POST['keyword'])) {
            $input = $_POST['keyword'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Input yang aman: " . $input . "<br>";
        } else {
            echo "Tidak ada data yang aman.<br>";
        }
        ?>