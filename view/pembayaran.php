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
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/tableview.css">
    <title>View Pembayaran | Aplikasi Pembayaran SPP</title>
</head>

<style>
    .table-pembayaran input {
        border: none;
    }
</style>

<body>
    <?php
    require "../template/navbar.php";
    ?>

    <div class="container">
        <div class="card-tittle">
            <h4>Data Pembayaran</h4>
        </div>

        <div class="pencarian">
            <table>
                <form action="" method="GET">
                    <tr>
                        <td>
                            <input type="text" placeholder="Masukkan Nis" autocomplete="off" name="nis" list="NIS">
                            <datalist id="NIS">
                                <?php
                                $result = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option value="<?php echo $row['nis']; ?>"></option>
                                <?php
                                }
                                ?>
                            </datalist>
                        </td>
                        <td class="cari">
                            <button class="button" name="cari"><img src="../img/search-white.png" width="20px" alt=""></button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>

        <?php
        if (isset($_GET['nis']) && ($_GET['nis'] != '')) {
            $querycari = "SELECT *  FROM tb_siswa INNER JOIN tb_spp ON tb_siswa.angkatan = tb_spp.angkatan WHERE nis='$_GET[nis]' ";
            $resultcari = mysqli_query($koneksi, $querycari);
            $data = mysqli_fetch_assoc($resultcari);
            if ($result->num_rows  ==  true) {
        ?>
                <div class="biodata">
                    <div class="judul-biodata">
                        <h2>Biodata Siswa</h2>
                    </div>

                    <div class="table-biodata">
                        <table>
                            <form action="" method="post">
                                <tr>
                                    <td>Nis</td>
                                    <td>:</td>
                                    <td><?= $data['nis']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $data['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nisn</td>
                                    <td>:</td>
                                    <td><?= $data['nisn']; ?></td>
                                </tr>
                                <tr>
                                    <td>Angkatan</td>
                                    <td>:</td>
                                    <td><?= $data['angkatan']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $data['alamat']; ?></td>
                                </tr>
                                <tr>
                                    <td>No Telpon Ortu</td>
                                    <td>:</td>
                                    <td><?= $data['no_ortu']; ?></td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
                <!-- Data Detail Tagihan Siswa -->
                <?php
                $nis = $data['nis'];
                $data_bayar = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE nis = '$nis'");
                $i = 1;
                ?>

                <div class="detail-siswa">
                    <div class="judul-detail">
                        <h2>Detail Siswa</h2>
                    </div>

                    <div class="table-detail">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_bayar as $row) { ?>
                                    <form action="">
                                        <tr>
                                            <td hidden><?= $row['id_pembayaran']; ?></td>
                                            <td><?= $i; ?></td>
                                            <td><?= $row['bulan']; ?></td>
                                            <td><?= $row['tahun']; ?></td>
                                            <td><?= $row['tgl_bayar']; ?></td>
                                            <td><?= $data['biaya']; ?></td>
                                            <td><?= $row['status']; ?></td>
                                            <td>
                                                <?php
                                                if ($row['tgl_bayar'] == NULL) {
                                                ?>
                                                    <a href="../insert/pembayaran.php?nis=<?= $nis; ?>&bulan=<?= $row['bulan']; ?>&tahun=<?= $row['tahun']; ?>&id_pembayaran=<?= $row['id_pembayaran']; ?>">Bayar</a>
                                                <?php
                                                } else {
                                                ?>
                                                    <h4>Selesai</h4>
                                                <?php
                                                }
                                                $i++
                                                ?>
                                            </td>

                                        </tr>
                                    </form>
                            </tbody>
                        <?php
                                    // Penutup Perulangan For Each
                                }
                        ?>
                        </table>
                        <?php


                        ?>
                    </div>
            <?php
                //  <!-- Penutup If Rows -->
            }
            // <!-- Penutup Isset -->
        } ?>
                </div>

    </div>
    <?php
    require "../template/footer.php";
    ?>
    <script src=" ../js/script.js"></script>
</body>

</html>