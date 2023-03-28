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
    <link rel="stylesheet" href="../css/print.css">
    <title>Aplikasi Pembayaran SPP | Laporan Pembayaran</title>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['tanggal_mulai']) && ($_GET['tanggal_selesai'])) {
            $tanggal_mulai = $_GET['tanggal_mulai'];
            $tanggal_selesai = $_GET['tanggal_selesai'];

        ?>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <?php
                    $pembayaran = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran 
                    INNER JOIN tb_siswa ON tb_pembayaran.nis=tb_siswa.nis 
                    WHERE tgl_bayar 
                    BETWEEN '$_GET[tanggal_mulai]' AND '$_GET[tanggal_selesai]'
                    ORDER BY id_pembayaran ASC");
                    $i = 1;
                    $total = 0;
                    $baris = mysqli_num_rows($pembayaran);
                    if ($baris == 0) {
                    ?>
                        <tbody>
                            <td colspan="7">Tidak ada Data</td>
                        </tbody>
                        <?php
                    } else {
                        while ($data = mysqli_fetch_assoc($pembayaran)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $data['nis']; ?></td>
                                    <td><?= $data['nama']; ?></td>
                                    <td><?= $data['tgl_bayar']; ?></td>
                                    <td><?= $data['bulan']; ?></td>
                                    <td><?= $data['tahun']; ?></td>
                                    <td><?= $data['jumlah']; ?></td>

                                </tr>

                        <?php
                            $i++;
                            $total += $data['jumlah'];
                        }
                    }
                        ?>
                        <tr class="total">
                            <td colspan="5"></td>
                            <td colspan=3">
                                <b>Total : <br> Rp. <?= number_format(($total), 0, ',', '.') ?> </b>
                            </td>
                        </tr>
                            </tbody>
                        <?php
                    }
                        ?>
                </table>
            </div>
            <div class="tanda-tangan">
                <p> <?= $_SESSION['username'] ?>, <?= date('Y-m-d') ?> <br> Operator</p>
                <br> <br> <br>
                <hr>
            </div>
    </div>
    <script src="../js/print.js"></script>
</body>

</html>