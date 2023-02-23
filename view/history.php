<?php
session_start();
require "../koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tableview.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <title>Aplikasi Pembayaran SPP | History Pembayaran</title>
</head>

<body>
    <?php require "../template/navbar.php"; ?>

    <div class="container">
        <div class="card-tittle">
            <h4>History Pembayaran</h4>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nis</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_SESSION['leveluser'] == 'admin' || $_SESSION['leveluser'] == 'petugas') {
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran");
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                            <tr>
                                <td><?php echo $data['id_pembayaran']; ?></td>
                                <td><?php echo $data['nis']; ?></td>
                                <td><?php echo $data['tgl_bayar']; ?></td>
                                <td><?php echo $data['bulan']; ?></td>
                                <td><?php echo $data['tahun']; ?></td>
                                <td><?php echo $data['jumlah']; ?></td>
                            </tr>
                        <?php
                        }
                    } else if ($_SESSION['leveluser'] == 'siswa') {
                        $nis = $_SESSION['nis'];
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE nis='$nis'");
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?php echo $data['id_pembayaran']; ?></td>
                                <td><?php echo $data['nis']; ?></td>
                                <td><?php echo $data['tgl_bayar']; ?></td>
                                <td><?php echo $data['bulan']; ?></td>
                                <td><?php echo $data['tahun']; ?></td>
                                <td><?php echo $data['jumlah']; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>