<?php
$serverName = "localhost";
$connectionOptions = [
    "Database" => "indoapril",
    "Uid" => "",
    "PWD" => ""
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$statusMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['kode_member']) && !empty($_POST['nama']) && !empty($_POST['email'])) {
    $kode_member = $_POST['kode_member'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO members (kode_member, nama, email) VALUES (?, ?, ?)";
    $params = [$kode_member, $nama, $email];

    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
        $statusMessage = "Gagal menambahkan data: " . print_r(sqlsrv_errors(), true);
    } else {
        $statusMessage = "Data berhasil ditambahkan!";
        sqlsrv_free_stmt($stmt);
    }
}

$sql = "SELECT * FROM members";
$result = sqlsrv_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indoapril</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Form Tambah Member</h1>

        <?php if (!empty($statusMessage)): ?>
            <p><?php echo $statusMessage; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="kode_member">Kode Member:</label>
                <input type="text" id="kode_member" name="kode_member" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Tambah Member</button>
        </form>

        <h2>Daftar Member</h2>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Member</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['kode_member']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
sqlsrv_free_stmt($result);
sqlsrv_close($conn);
?>