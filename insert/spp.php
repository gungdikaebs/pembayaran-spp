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
    <title>Aplikasi Pembayaran SPP | Form Tambah Spp</title>
</head>

<body>
    <?php
    require '../template/navbar.php';
    ?>
    <div class="container">
        <div class="card-tittle">
            <h2>Insert Data Spp</h2>
        </div>
        <div class="row">
            <form action="" method="post">
                <div class="input-group">
                    <label for="">Angkatan</label>
                    <input type="text" name="angkatan">
                </div>
                <div class="input-group">
                    <label for="">Biaya</label>
                    <input type="text" name="biaya">
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