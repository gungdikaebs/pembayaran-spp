<?php
session_start();
require "../koneksi.php";
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/tableview.css">
    <link rel="stylesheet" href="../css/search.css">
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

                        <td>
                            <?php ?>
                        </td>
                        <td>
                            <button class="button" name="cari">Cari</button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>

        <?php
        if (isset($_GET['nis']) && ($_GET['nis'] != '')) {
            $querycari = "SELECT *  FROM tb_siswa WHERE nis='$_GET[nis]'";
            $resultcari = mysqli_query($koneksi, $querycari);
            $data = mysqli_fetch_assoc($resultcari);
            $nis = $data['nis'];

        ?>
            <div class="biodata">
                <div class="judul-biodata">
                    <h2>Biodata Siswa</h2>
                </div>

                <div class="table-biodata">
                    <table>
                        <form action="../insert/prosespembayaran.php" method="post">
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

            <div class="detail-siswa">
                <div class="judul-detail">
                    <h2>Detail Siswa</h2>
                </div>
                <div class="table-detail">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Jatuh Tempo</th>
                                <th>Tanggal Bayar</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="" method="get">
                                <?php
                                $awaltempo = date('y-06-d');
                                $bulanIndo = [
                                    '01' => 'Januari',
                                    '02' => 'Februari',
                                    '03' => 'Maret',
                                    '04' => 'April',
                                    '05' => 'Mei',
                                    '06' => 'Juni',
                                    '07' => 'Juli',
                                    '08' => 'Agustus',
                                    '09' => 'September',
                                    '10' => 'Oktober',
                                    '11' => 'November',
                                    '12' => 'Desember',
                                ];

                                for ($i = 1; $i < 13; $i++) {
                                    $jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));
                                    $tahun_now = $data['angkatan'];

                                    $bulan = $bulanIndo[date('m', strtotime($jatuhtempo))];
                                    $hasil_bulan = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE bulan='$bulan' AND nis='$nis'");
                                    $data_bulan = mysqli_fetch_assoc($hasil_bulan);

                                ?>
                                    <tr>
                                        <td> <?= $i; ?> </td>
                                        <td> <?= $bulan; ?></td>
                                        <?php
                                        if ($i < 7) {
                                        ?>
                                            <td>
                                                <?php
                                                $tahun_bayar = $tahun_now;
                                                echo $tahun_bayar;
                                                ?>
                                            </td>
                                        <?php
                                        } else {
                                        ?>
                                            <td>
                                                <?php
                                                $tahun_bayar = $tahun_now + 1;
                                                echo $tahun_bayar;
                                                ?>
                                            </td>

                                        <?php } ?>
                                        <td>10-<?= $bulanIndo[date('m', strtotime($jatuhtempo))]; ?></td>
                                        <td><?= $data_bulan['status']; ?></td>
                                        <td><?= $data_bulan['tgl_bayar']; ?></td>
                                        <td>
                                            <?php
                                            if (isset($data_bulan)) {
                                            ?>
                                                Rp. <?= number_format($data_bulan['jumlah'], 0, ',', '.'); ?>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td class="btn-detail">
                                            <?php
                                            $cek_bulan = mysqli_num_rows($hasil_bulan);
                                            if (!$cek_bulan > 0) {
                                                if (!$nis == 0) {
                                            ?>
                                                    <a href="../insert/pembayaran.php?bulan=<?= $bulan ?>&nis=<?= $data['nis'] ?>&tahun=<?= $tahun_bayar; ?>">Bayar</a>
                                                    <input type="text" hidden name="bulan" value="<?= $bulan; ?>">
                                                    <input type="text" hidden name="nis" value="<?= $data['nis']; ?>">
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <a href="../delete/proses_pembayaran.php?id_pembayaran=<?= $data_bulan['id_pembayaran']; ?>" onclick="return confirm('Anda Yakin mau membatalkan transaksi')">Batal</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <!-- Penutup Perulangan -->
                                <?php } ?>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Penutup Isset  -->
        <?php }
        ?>

    </div>
    <script src="../js/script.js"></script>
</body>

</html>