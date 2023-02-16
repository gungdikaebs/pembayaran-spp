<?php
session_start();
require '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/insert.css">
    <title>Aplikasi Pembayaran SPP | Form Tambah Petugas</title>
</head>

<body>
    <?php require '../template/navbar.php'; ?>
    <div class="container">
        <div class="card-tittle">
            <h2>Data Insert Petugas</h2>
        </div>
        <div class="row">
            <form action="prosesinsertpetugas.php" method="post">
                <div class="input-group">
                    <label for="">Nama Petugas</label>
                    <input type="text" name="nama_petugas">
                </div>
                <div class="input-group">
                    <label for="">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="input-group">
                    <label for="">Passsword</label>
                    <input type="password" name="password">
                </div>
                <div class="input-group">
                    <label for="">Level User</label>
                    <Select name="leveluser">
                        <option selected hidden>Choose..</option>
                        <option value="petugas">Petugas</option>
                        <option value="admin">Admin</option>
                    </Select>
                </div>
                <input type="submit" value="Tambah Data" name="submit">
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="../js/script.js"></script>
</body>

</html>