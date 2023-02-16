<?php
session_start();
require '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/insert.css">
    <title>Aplikasi Pembayaran SPP | Form Tambah Siswa</title>
</head>

<body>
    <?php
    require '../template/navbar.php';
    ?>
    <div class="container">
        <div class="card-tittle">
            <h2> Form Tambah Data Siswa</h2>
        </div>
        <div class="row">
            <form action="prosesinsertsiswa.php" method="post">
                <div class="input-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="" placeholder="Masukkan Nama">
                </div>
                <div class="input-group">
                    <label for="">Nisn</label>
                    <input type="text" name="nisn" id="" placeholder="Masukkan Nisn">
                </div>
                <div class="input-group">
                    <label for="">Angkatan</label>
                    <select name="angkatan" id="">
                        <option selected hidden>Choose Angkatan</option>
                        <?php
                        $hasilSpp = mysqli_query($koneksi, "SELECT * FROM tb_spp ");
                        while ($rowAngkatan = mysqli_fetch_assoc($hasilSpp)) {
                        ?>
                            <option value="<?= $rowAngkatan['angkatan']; ?>">
                                <?= $rowAngkatan['angkatan']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">Kelas</label>
                    <select name="kelas" id="">
                        <option selected hidden> Choose Kelas </option>
                        <?php
                        $hasilKelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                        while ($rowKelas = mysqli_fetch_assoc($hasilKelas)) {
                        ?>
                            <option value="<?php echo $rowKelas['id_kelas']; ?>"><?php echo $rowKelas['nama_kelas']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" id="" placeholder="Masukkan Alamat">
                </div>
                <div class="input-group">
                    <label for="">No Telp Ortu</label>
                    <input type="text" name="no_ortu" id="" placeholder="Masukkan No Telp Ortu">
                </div>
                <br>
                <div class="submit">
                    <input type="submit" name="submit" value="Tambah Data">
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="../js/script.js"></script>
</body>

</html>