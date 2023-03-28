<?php
session_start();
require "../koneksi.php";

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
    <link rel="stylesheet" href="../css/tableview.css">
    <title>Dashboard | Aplikasi Pembayaran SPP</title>
</head>

<body>
    <?php require "../template/navbar.php";
    $nis = $_SESSION['username'];
    ?>

    <div class="container">
        <div class="card-tittle">
            <h4>Welcome Back, <span><?= $_SESSION['username']; ?></span></h4>
        </div>

        <div class="row">

        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>