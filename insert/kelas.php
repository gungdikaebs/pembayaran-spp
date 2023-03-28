<?php
session_start();
require '../koneksi.php';

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silahkan Login Terlebih dahulu');window.location='../login/login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/insert.css">
    <title>Aplikasi Pembayaran SPP | Form Tambah Kelas</title>
</head>

<body>
    <?php
    require '../template/navbar.php';
    ?>
    <div class="container">
        <div class="card-tittle">
            <h2>Insert Data Kelas</h2>
        </div>
        <div class="row">
            <form action="prosesinsertkelas.php" method="post">
                <div class="input-group">
                    <label for="">Nama Kelas</label>
                    <input type="text" name="nama_kelas">
                </div>
                <div class="input-group">
                    <label for="">Keterangan</label>
                    <select name="keterangan" id="">
                        <option value="" disabled selected></option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan"</option>
                        <option value="Animasi">Animasi</option>
                    </select>
                </div>
                <div class="submit">
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="../js/script.js"></script>
</body>

</html>