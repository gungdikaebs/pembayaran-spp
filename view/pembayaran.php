<?php
session_start();
// error_reporting(0);
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
                        <td class="bordered">
                            <input type="text" autocomplete="off" name="nis" list="NIS" placeholder="Masukkan NIS siswa">
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
                            <button class="button"><img src="../img/search.png" width="20px" alt=""></button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>

        <div class="biodata">
            <div class="row">
                <div class="judul-biodata">
                    <h5>Biodata Siswa</h5>
                </div>
            </div>

            <div class="row">
                <div class="table-pembayaran">
                    <table>
                        <?php
                        if (isset($_GET['nis'])) {
                            $nis = $_GET['nis'];
                            $querycari = "SELECT *  FROM tb_siswa WHERE nis='$nis'";
                            $resultcari = mysqli_query($koneksi, $querycari);
                            $data = mysqli_fetch_assoc($resultcari);
                        }
                        ?>

                        <form action="../insert/prosespembayaran.php" method="post">
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nis</td>
                                <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nisn </td>
                                <td><input type="text" name="nisn" value="<?php echo $data['nisn']; ?>"></td>
                            </tr>

                            <tr>
                                <td>Tanggal Bayar</td>
                                <td> <input type="text" name="tanggal" value="<?php echo date("Y-m-d"); ?>"></td>
                            </tr>

                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Jumlah Bayar</td>
                                <?php
                                $angkatan = $data['angkatan'];
                                $queryspp = mysqli_query($koneksi, "SELECT biaya FROM tb_spp WHERE angkatan='$angkatan'");
                                $dataspp = mysqli_fetch_assoc($queryspp);
                                ?>
                                <input type="text" hidden name="angkatan" value="<?php echo $angkatan ?>">
                                <td>
                                    <input type="text" readonly name="biaya" value="<?php echo $dataspp['biaya']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><button type="submit">bayar</button></td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="../js/script.js"></script>
</body>

</html>