<?php
session_start();
require "../koneksi.php";
error_reporting(0);

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
        <?php
        if ($_SESSION['leveluser'] == 'siswa') {
            echo "";
        } else { ?>
            <div class="cari-bulan">
                <form action="" method="get">
                    <label for="">Bulan</label>
                    <select name="bulan" id="">
                        <option value="" selected hidden>Pilih Bulan...</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <button type="submit"> Cari </button>
                </form>
            </div>
        <?php } ?>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $bulan = $_GET['bulan'];
                    $i = 1;
                    if (isset($bulan)) {
                        if ($_SESSION['leveluser'] == 'admin' || $_SESSION['leveluser'] == 'petugas') {
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE bulan = '$bulan'");
                            $baris = mysqli_num_rows($query);
                            if ($baris == 0) {
                    ?>
                                <td colspan="6">Tidak ada data</td>
                                <?php
                            } else {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    if ($data['tgl_bayar'] != NULL) {

                                ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['tgl_bayar']; ?></td>
                                            <td><?php echo $data['bulan']; ?></td>
                                            <td><?php echo $data['tahun']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                }
                            }
                        }
                    } else {
                        if ($_SESSION['leveluser'] == 'admin' || $_SESSION['leveluser'] == 'petugas') {
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa ON tb_pembayaran.nis = tb_siswa.nis");
                            while ($data = mysqli_fetch_assoc($query)) {
                                if ($data['tgl_bayar'] != NULL) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['tgl_bayar']; ?></td>
                                        <td><?php echo $data['bulan']; ?></td>
                                        <td><?php echo $data['tahun']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        } else if ($_SESSION['leveluser'] == 'siswa') {
                            $nis = $_SESSION['nis'];
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa using(nis) WHERE nis='$nis' ");
                            while ($data = mysqli_fetch_assoc($query)) {

                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['tgl_bayar']; ?></td>
                                    <td><?php echo $data['bulan']; ?></td>
                                    <td><?php echo $data['tahun']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                </tr>
                    <?php

                            }
                        }
                    } //Penutupan Isset
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    require "../template/footer.php";
    ?>
    <script src="../js/script.js"></script>
</body>

</html>