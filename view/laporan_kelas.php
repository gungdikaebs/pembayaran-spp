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
    <title>Aplikasi Pembayaran SPP | Laporan Kelas</title>
</head>

<body>
    <?php
    $kelas = $_POST['kelas'];
    $bulan = $_POST['bulan'];
    $tahun = date('Y');

    $query = mysqli_query($koneksi, "SELECT nama,biaya,tahun,status FROM tb_pembayaran 
    INNER JOIN tb_siswa ON tb_pembayaran.nis = tb_siswa.nis
    INNER JOIN tb_kelas ON tb_siswa.kelas = tb_kelas.id_kelas 
    INNER JOIN tb_spp ON tb_siswa.angkatan = tb_spp.angkatan  
    WHERE bulan = '$bulan' AND kelas = '$kelas' AND tahun='$tahun' 
    ");

    $queryKelas = mysqli_query($koneksi, "SELECT nama_kelas FROM tb_pembayaran 
    INNER JOIN tb_siswa ON tb_pembayaran.nis = tb_siswa.nis
    INNER JOIN tb_kelas ON tb_siswa.kelas = tb_kelas.id_kelas 
    WHERE bulan = '$bulan'");
    $i = 1;
    ?>

    <div class="container">
        <div class="row">
            <?php
            $dataJudul = mysqli_fetch_assoc($queryKelas);
            ?>
            <h3>
                Laporan Pembayaran Kelas <?= $dataJudul['nama_kelas']; ?> <br>
                Bulan <?= $bulan; ?>
            </h3>
        </div>

        <div class="row">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Nama Siswa</th>
                    <th>Jumlah</th>
                    <th>Tahun</th>
                    <th>Status</th>
                </tr>
                <?php
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td>Rp. <?= number_format($data['biaya'], 0, ',', '.'); ?></td>
                        <td><?= $data['tahun']; ?></td>
                        <td><?= $data['status']; ?></td>
                    </tr>
                <?php
                    $i++;
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