<?php
session_start();
require '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/update.css">
    <title>Aplikasi Pembayaran SPP | Update Siswa</title>
</head>

<body>
    <?php
    require '../template/navbar.php';
    $nis = $_GET['nis'];
    $hasil = mysqli_query($koneksi, ("SELECT * FROM tb_siswa WHERE nis='$nis'"));
    while ($data = mysqli_fetch_assoc($hasil)) { ?>
        <div class="container">
            <div class="card-tittle">
                <h2>Form Update Siswa</h2>
            </div>

            <div class="row">
                <form action="prosesupdatesiswa.php" method="post">
                    <div class="input-group">
                        <label for="">Nis</label>
                        <input type="text" name="nis" value="<?= $data['nis']; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" value="<?= $data['nama']; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Nisn</label>
                        <input type="text" name="nisn" value="<?= $data['nisn']; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Angkatan</label>
                        <select name="angkatan" id="">
                            <option selected hidden><?= $data['angkatan'] ?></option>
                            <?php
                            $hasilSpp = mysqli_query($koneksi, "SELECT * FROM tb_spp ");
                            while ($rowAngkatan = mysqli_fetch_assoc($hasilSpp)) {
                            ?>
                                <option value="<?= $rowAngkatan['angkatan']; ?>">
                                    <?= $rowAngkatan['angkatan']; ?>
                                </option>
                            <?php } ?></option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="">Kelas</label>
                        <select name="kelas" id="">
                            <option selected hidden> <?= $data['kelas']; ?> </option>
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
                        <input type="text" name="alamat" value="<?= $data['alamat']; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">No Telp Ortu</label>
                        <input type="text" name="no_ortu" value="<?= $data['no_ortu']; ?>">
                    </div>
                    <div class="input-group">
                        <div class="submit">
                            <input type="submit" value="Update">
                        </div>
                    </div>
            </div>
            </form>
        </div>
    <?php
    }
    ?>

</body>

</html>