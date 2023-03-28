<?php
session_start();
require '../koneksi.php';
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
    <link rel="stylesheet" href="../css/update.css">
    <title>Aplikasi Pembayaran SPP | Update Kelas </title>
</head>

<body>
    <?php
    require "../template/navbar.php";
    $id_kelas = $_GET['id_kelas'];
    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$id_kelas'");
    while ($data = mysqli_fetch_assoc($hasil)) { ?>
        <div class="container">
            <div class="card-tittle">
                <h2>Update Kelas</h2>
            </div>
            <div class="row">
                <form action="prosesupdatekelas.php" method="post">
                    <div class="input-group" hidden>
                        <label for="">Id Kelas</label>
                        <input type="text" name="id_kelas" value="<?= $data['id_kelas']; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" name="nama_kelas" value="<?= $data['nama_kelas']; ?>">
                    </div>
                    <div class="input-group">
                        <label for="">Keterangan</label>
                        <select name="keterangan" id="">
                            <option value="<?= $data['keterangan']; ?>" hidden selected><?= $data['keterangan']; ?></option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan"</option>
                            <option value="Animasi">Animasi</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="submit">
                            <input type="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</body>

</html>