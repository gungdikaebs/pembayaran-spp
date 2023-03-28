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
    <link rel="stylesheet" href="../css/update.css">
    <title>Aplikasi Pembayaran SPP | Update SPP </title>
</head>

<body>
    <?php require "../template/navbar.php"; ?>
    <?php
    $angkatan = $_GET['angkatan'];
    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_spp WHERE angkatan='$angkatan'");
    while ($data = mysqli_fetch_assoc($hasil)) { ?>
        <div class="container">
            <div class="card-tittle">
                <h2>Update SPP</h2>
            </div>
            <div class="row">
                <form action="prosesupdatespp.php" method="post">
                    <div class="input-group" hidden>
                        <label for="">Angkatan</label>
                        <input type="text" name="angkatan" value="<?= $angkatan; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Biaya</label>
                        <input type="text" name="biaya" value="<?= $data['biaya']; ?>">
                    </div>
                    <div class="input-group">
                        <div class="submit">
                            <input type="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</body>

</html>