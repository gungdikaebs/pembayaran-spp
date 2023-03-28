<?php
session_start();
require "../koneksi.php";
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silahkan Login Terlebih dahulu');window.location='../login/login.php';</script>";
}
// error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pembayaran SPP | Form Pembayaran</title>
    <!-- link CSS -->
    <link rel="stylesheet" href="../css/insert.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <div class="container">
        <?php
        require "../template/navbar.php";
        // mengambil data dari detail siswa
        $bulan = $_GET['bulan'];
        $tahun = $_GET['tahun'];
        $id_pembayaran = $_GET['id_pembayaran'];
        $nis = $_GET['nis'];
        $query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
        $hasil = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($hasil);
        ?>
        <div class="pembayaran">
            <div class="card-tittle">
                <h2>Masukan Pembayaran</h2>

            </div>
            <div class="row">
                <?php
                // mengambil data nominal
                $hasil_angkatan = mysqli_query($koneksi, "SELECT * from tb_siswa INNER JOIN tb_spp USING(angkatan) WHERE nis='$nis'");
                $data_angkatan = mysqli_fetch_assoc($hasil_angkatan);
                ?>

                <form action="prosespembayaran.php" method="POST">
                    <div class="input-group">
                        <label for="">Id Pembayaran</label>
                        <input type="text" name="id_pembayaran" readonly value="<?= $id_pembayaran ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Nis</label>
                        <input type="text" name="nis" readonly value="<?= $nis ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Nama Siswa</label>
                        <input type="text" name="nama_siswa" readonly value="<?= $data['nama']; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Tahun</label>
                        <input type="text" name="tahun" readonly value="<?= $tahun ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Tanggal Bayar</label>
                        <input type="date" nama="tgl_bayar" readonly value="<?= date('Y-m-d') ?>">
                    </div>
                    <div class="input-group">
                        <label>Bulan Yang Akan di Bayarkan</label>
                        <input type="text" name="bulan" readonly value="<?= $bulan ?>">
                    </div>
                    <div class="input-group">
                        <label>Angkatan</label>
                        <input type="text" name="angkatan" readonly value="<?= $data_angkatan['angkatan'] ?>">
                    </div>
                    <div class="input-group">
                        <label>Jumlah Yang di Bayarkan</label>
                        <input type="text" name="jumlah" readonly value="<?= $data_angkatan['biaya'] ?>">
                    </div>
                    <div class="input-group">
                        <input class="btn-bayar" type="submit" name="bayar" value="BAYAR">
                        <a href="../view/pembayaran.php?nis=<?= $nis ?>" class="btn-batal">BATAL</a>
                    </div>
                </form>

            </div>
        </div>


    </div>

    </div>


    <!-- link Js -->
    <script src="../js/script.js"></script>
</body>

</html>