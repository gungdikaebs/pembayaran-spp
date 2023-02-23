<?php
session_start();
require "../koneksi.php";

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
        $nis = $_GET['nis'];
        $query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
        $hasil = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($hasil);
        ?>

        <div class="pembayaran">
            <div class="row">
                <div class="card-tittle">
                    <h2>Masukan Pembayaran</h2>
                </div>
            </div>
            <div class="row">
                <?php
                // mengambil data nominal
                $hasil_angkatan = mysqli_query($koneksi, "SELECT * from tb_siswa INNER JOIN tb_spp USING(angkatan) WHERE nis='$nis'");
                $data_angkatan = mysqli_fetch_assoc($hasil_angkatan);
                ?>
                <table>
                    <form action="prosespembayaran.php" method="POST">
                        <tr>
                            <th>NIS</th>
                            <td><input type="text" name="nis" readonly value="<?= $nis ?>"></td>
                        </tr>
                        <tr>
                            <th>Nama Siswa</th>
                            <td><input type="text" name="nama_siswa" readonly value="<?= $data['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td><input type="text" name="tahun" readonly value="<?= $tahun ?>"></td>
                        </tr>
                        <tr>
                            <th>Tanggal Bayar</th>
                            <td><input type="date" nama="tgl_bayar" readonly value="<?= date('Y-m-d') ?>"></td>
                        </tr>
                        <tr>
                            <th>Bulan Yang Akan di Bayarkan</th>
                            <td><input type="text" name="bulan" readonly value="<?= $bulan ?>"></td>
                        </tr>
                        <tr>
                            <th>Angkatan</th>
                            <td><input type="text" name="angkatan" readonly value="<?= $data_angkatan['angkatan'] ?>"></td>
                        </tr>
                        <tr>
                            <th>Jumlah Yang di Bayarkan</th>
                            <td><input type="text" name="jumlah" readonly value="<?= $data_angkatan['biaya'] ?>"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn-bayar" type="submit" name="bayar" value="BAYAR">
                                <a href="../view/pembayaran.php?nis=<?= $nis ?>" class="btn-batal">BATAL</a>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>

    </div>

    </div>


    <!-- link Js -->
    <script src="../js/script.js"></script>
</body>

</html>