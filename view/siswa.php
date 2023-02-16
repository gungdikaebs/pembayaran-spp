<?php
require "../koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/tableview.css">
    <title>Data Petugas | Aplikasi Pembayaran SPP</title>
</head>

<body>
    <?php
    require "../template/navbar.php";
    ?>
    <div class="container">

        <div class="card-tittle">
            <h4>Data Siswa</h4>
        </div>

        <div class="tambah-menu">
            <a href="../insert/siswa.php">Tambah Data</a>
        </div>

        <div class="row">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Id Spp</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>No Telp Orang Tua</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td> <?php echo $data['nis']; ?></td>
                            <td> <?php echo $data['nama']; ?></td>
                            <td> <?php echo $data['nisn']; ?></td>
                            <td> <?php echo $data['angkatan']; ?></td>
                            <td> <?php echo $data['kelas']; ?></td>
                            <td> <?php echo $data['alamat']; ?></td>
                            <td> <?php echo $data['no_ortu']; ?></td>
                            <td class="action">
                                <a href="../update/siswa.php?nis=<?= $data['nis']; ?>" class="update">Update</a>
                                <a href="../delete/delete_siswa.php?nis=<?= $data['nis']; ?>" class="delete">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>