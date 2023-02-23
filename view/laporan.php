<?php
session_start();
require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tableview.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Aplikasi Pembayaran SPP | Laporan</title>
</head>

<body>
    <?php
    require "../template/navbar.php";
    ?>

    <div class="container">

        <div class="card-tittle">
            <h4>Laporan</h4>
        </div>
        <div class="row">
            <div class="sort">
                <table>
                    <form action="../insert/proseslaporanpembayaran.php" method="get">
                        <td>
                            Mulai Tanggal
                            <input type="date" class="" name="tanggal_mulai">
                        </td>
                        <td>
                            Sampai Tanggal
                            <input type="date" class="" name="tanggal_selesai">
                        </td>
                        <td>
                            <button class="button-tanggal" name="tampil">Tampilkan</button>
                        </td>
                    </form>
                </table>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>