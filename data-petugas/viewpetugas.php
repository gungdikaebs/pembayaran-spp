<?php require "../koneksi.php"; ?>

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
    <?php require "../template/navbar.php" ?>
    <div class="container">
        <div class="row">
            <div class="card-tittle">
                <h4>Data Petugas</h4>
            </div>
            <table class="table" border="1px solid">
                <thead>
                    <tr>
                        <th>Id Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_petugas");

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id_petugas']; ?></td>
                            <td><?php echo $row['nama_petugas']; ?></td>
                            <td><?php echo $row['leveluser']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>