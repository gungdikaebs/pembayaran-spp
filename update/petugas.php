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
    <link rel="stylesheet" href="../css/update.css">
    <title>Aplikasi Pembayaran SPP| Update Petugas</title>
</head>

<body>
    <div class="container">
        <?php
        require '../template/navbar.php';
        $id_petugas = $_GET['id_petugas'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE id_petugas='$id_petugas'");
        while ($data = mysqli_fetch_assoc($hasil)) {
        ?>
            <div class="container">
                <div class="card-tittle">
                    <h2>Form Update Petugas</h2>
                </div>

                <div class="row">
                    <form action="prosesupdatepetugas.php" method="post">
                        <div class="input-group">
                            <label for="">Id Petugas</label>
                            <input type="text" name="id_petugas" value="<?= $data['id_petugas']; ?>">
                        </div>
                        <div class="input-group">
                            <label for="">Nama Petugas</label>
                            <input type="text" name="nama_petugas" value="<?= $data['nama_petugas']; ?>">
                        </div>
                        <div class="input-group">
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?= $data['username']; ?>">
                        </div>
                        <div class="input-group">
                            <label for="">Password</label>
                            <input type="text" name="password" value="<?= $data['password']; ?>">
                        </div>
                        <div class="input-group">
                            <label for="">Level Petugas</label>
                            <select name="leveluser" id="">
                                <option selected hidden value="<?= $data['leveluser']; ?>"><?= $data['leveluser']; ?></option>
                                <option value="petugas">Petugas</option>
                                <option value="admin">Admin</option>
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
        <?php
        }
        ?>
    </div>
</body>

</html>