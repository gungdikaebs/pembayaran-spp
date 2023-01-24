<!-- <?php require "../koneksi.php"; ?> -->
<?php
$queryPetugas = mysqli_query($con, "SELECT * FROM tb_petugas");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas | Aplikasi Pembayaran SPP</title>
</head>

<body>
    <?php require "../template/navbar.php" ?>
    <table></table>
</body>

</html>