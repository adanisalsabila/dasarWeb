<?php
// Konfigurasi database
$serverName = "localhost"; // Nama server biasanya emang localhost
$connectionOptions = [ //array berupa data yang mau di koneksikan 
    "Database" => "indoapril", // Nama database Anda
    "Uid" => "", // Ganti dengan username database Anda
    "PWD" => "" // Ganti dengan password database Anda
];

// Membuat koneksi ke database SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions); //jadi variabel conn itu memiliki fungsi sqlsrv_connect yang berfungsi untuk menghubungkan ke database
// parameter dari sqlsrv itu servername dan informasi login
if ($conn === false) {  //apabila variabel conn false atau gagal yang arti nya ga terhubung
    die(print_r(sqlsrv_errors(), true));//jadi die itu berguna untuk menghentikan eksekusi script php nya secara langsung
    //tapi bisa menampilkan pesan sebelum berhenti kalo dikasih padameter
    //parameter nya itu print_r(sqlsrv_errors(), true), jadi print_r it berguna untuk mencetak isi dari array dan sqlsrv_errors() itu informasi tentang eror
    //atau warning yang terjadi waktu operasi sqlsrv jadi ada isinya sendiri biar tau kenapa eror nya nah kenapa print_r karena informasi nya berupa array
    //terus parameter kedua itu true buat hasil outputnya dikembalikan sebagai string kalo
}

$statusMessage = ""; // Variabel untuk menyimpan pesan status

// Menambahkan member baru jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['kode_member']) && !empty($_POST['nama']) && !empty($_POST['email'])) {
    //jadi ini perintah untuk menginput ke dalam database mu yang apabila tidak kosong isi dari kode member, nama, dan email maka perintah di bawah itu dijalankan
//btw itu masuk nya yang dari html nya yang kamu input nanti kita anggap ini poin 1 nanti ada html poin 1 nya
    $kode_member = $_POST['kode_member'];//terus ini maksudnya apa yang kita inputkan kode member di poin 1 itu di masukan ke variabel $kode_member
    $nama = $_POST['nama'];//terus ini maksudnya apa yang kita inputkan nama di poin 1 itu di masukan ke variabel $nama
    $email = $_POST['email'];//terus ini maksudnya apa yang kita inputkan email di poin 1 itu di masukan ke variabel $email

    // Persiapan query untuk memasukkan data
    $sql = "INSERT INTO members (kode_member, nama, email) VALUES (?, ?, ?)";//jadi ini kita buat variabel namanya sql yang nyimpan script sql itu
    $params = [$kode_member, $nama, $email];//kalo ini variabel yang namanya params yang punya isi dari kode_barang, nama, dan email yang kamu input

    // Eksekusi query
    //sqlsrv_query() fungsi nya untuk menjalankan perintah sql pada database
    $stmt = sqlsrv_query($conn, $sql, $params); //ini buat variabel yang namanya stmt yang fungsi nya untuk menyimpan fungsi sqlsrv_query parameter nya variabel conn yang isinya:
    //sqlsrv_connect tadi di atas, variabel sql yang isinya script sql, dan variabel params yang isinya hasil inputan
    if ($stmt === false) { //ini pasti paham kan if else
        $statusMessage = "Gagal menambahkan data: " . print_r(sqlsrv_errors(), true);// nah ini kalo gagal bakal ngeprint pesan kenapa bisa gagal nya 
    } else {
        $statusMessage = "Data berhasil ditambahkan!";//ini pesan kalo berhasil
        sqlsrv_free_stmt($stmt); // Bebaskan sumber daya atau mengosongkan isi variabel stmt
    }
}

// Mengambil data member untuk ditampilkan dalam tabel
$sql = "SELECT * FROM members"; //nah ini variabel sql nya yang tadi ada diatas diganti dengan script sql ini
//sqlsrv_query($conn, $sql) itu variabel conn untuk menghubungkan ke datbase terus variabel sql nya untuk menjalankan script sql nya
$result = sqlsrv_query($conn, $sql);//nah ini variabel result untuk menampilkan perintah diatas itu di variabel sql
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indoapril</title>
    <link rel="stylesheet" href="style.css"><!--ini untuk style nya di hubungkan ke style.css -->
</head>

<body>
    <!-- jadi ini buat div class yang namanya container fungsi nya buat mengelompokkan biar di css mudah di styling -->
    <div class="container">
        <!-- ini ya untuk judul di h1 biar ketebalan nya -->
        <h1>Form Tambah Member</h1>

        <!-- Menampilkan pesan status -->
        <?php if (!empty($statusMessage)): ?>
            <p><?php echo $statusMessage; ?></p>
        <?php endif; ?>
        <!-- pake endif biar ga ada else nya -->

        <!-- Form untuk menambahkan member baru -->
        <!-- nah ini itu poin 1 yang ada di php atas -->
        <form method="POST" action="">
            <!--nah ini method nya tipe post makanya di poin 1 php diatas kan dia tulisan nya $_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['kode_member']) && !empty($_POST['nama']) && !empty($_POST['email']-->
            <!-- jadi inti nya kalo tombol submit di tekan nanti bakal menjalankan method post itu -->
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
                <!-- sqlsrv_fetch_array() untuk mengambil satu baris data dari hasil query. -->
                <!-- SQLSRV_FETCH_ASSOC adalah salah satu konstanta dalam PHP sqlsrv yang digunakan sebagai parameter dalam fungsi sqlsrv_fetch_array() untuk menentukan tipe pengambilan data dari hasil query. -->
                <!-- variabel row menyimpan sqlsrv_fetch_array() parameter nya result yang ada di atas tadi yang untuk ngeprint query dan SQLSRV_FETCH_ASSOC -->
                <?php while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)): ?>
                    <!-- ini html list  -->
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <!-- ini manggil variabel row  dengan isi id fungsi nya ngeprint id-->
                        <td><?php echo $row['kode_member']; ?></td>
                        <!-- ini manggil variabel row  dengan isi kode member fungsi nya ngeprint kode member-->
                        <td><?php echo $row['nama']; ?></td>
                        <!-- ini manggil variabel row  dengan isi nama fungsi nya ngeprint nama-->
                        <td><?php echo $row['email']; ?></td>
                        <!-- ini manggil variabel row  dengan isi email fungsi nya ngeprint email-->
                    </tr>
                <?php endwhile; ?>
                <!-- while ini untuk perulangan jadi kalo ada lebih dari 1 data bisa ke print semua -->
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
// Menutup koneksi database
sqlsrv_free_stmt($result); // Bebaskan hasil statement
sqlsrv_close($conn); // Tutup koneksi
?>