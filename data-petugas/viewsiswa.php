<?php require "../koneksi.php" ?>

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
    <?php require "../template/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="card-tittle">
                <h4>Data Siswa</h4>
            </div>
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td> <?php echo $row['nis']; ?></td>
                            <td> <?php echo $row['nama']; ?></td>
                            <td> <?php echo $row['nisn']; ?></td>
                            <td> <?php echo $row['id_spp']; ?></td>
                            <td> <?php echo $row['kelas']; ?></td>
                            <td> <?php echo $row['alamat']; ?></td>
                            <td> <?php echo $row['no_ortu']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>