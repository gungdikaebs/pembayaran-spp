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
    <link rel="stylesheet" href="../css/tableview.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Aplikasi Pembayaran SPP | Laporan</title>
</head>

<body>
    <?php
    require "../template/navbar.php";
    ?>

    <div class="container">
        <div class="laporan">
            <div class="card-tittle">
                <h4>Laporan</h4>
            </div>

            <div class="row">
                <table class="table">
                    <form action="laporan_kelas.php" method="post" target="_blank">
                        <tr>
                            <th colspan="3">Laporan Per Kelas </th>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td></td>
                            <td>
                                <select name="kelas" id="">
                                    <?php
                                    $queryKelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                                    while ($dataKelas = mysqli_fetch_assoc($queryKelas)) {
                                    ?>
                                        <option value="<?= $dataKelas['id_kelas'] ?>"><?= $dataKelas['nama_kelas'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bulan</td>
                            <td></td>
                            <td>
                                <select name="bulan" id="">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari ">Februari </option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><br><button type="submit">Kirim</button></td>
                        </tr>
                    </form>
                </table>
            </div>
            <br> <br>
            <div class="row">
                <table class="table">
                    <form action="laporan_pembayaran.php" method="get" target="_blank">
                        <tr>
                            <th colspan="3">Laporan Pembayaran</th>
                        </tr>
                        <tr>
                            <td>Dari</td>
                            <td></td>
                            <td>
                                <input type="date" value="<?= date('Y-m-d'); ?>" name="tanggal_mulai">
                            </td>
                        </tr>
                        <tr>
                            <td>Sampai </td>
                            <td></td>
                            <td> <input type="date" value="<?= date('Y-m-d'); ?>" name="tanggal_selesai"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><br><button type="submit">Kirim</button></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <?php
    require "../template/footer.php";
    ?>
</body>

</html>