<?php require "../koneksi.php";
session_start();

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
    <title>View SPP | Aplikasi Pembayaran SPP</title>
</head>

<body>
    <?php require "../template/navbar.php" ?>
    <div class="container">

        <div class="card-tittle">
            <h4>Data Spp</h4>
        </div>

        <div class="tambah-menu">
            <a href="../insert/spp.php">Tambah Data</a>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Angkatan</th>
                        <th>Biaya</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_spp");
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $data["angkatan"] ?></td>
                            <td>

                                <?php echo 'Rp. ';
                                echo number_format($data['biaya'], 0, ',', '.'); ?>
                            </td>
                            <td class="action">
                                <a href="../update/spp.php?angkatan=<?= $data['angkatan']; ?> " class="btn-aksi"><img src="../img/update.png" alt=""></a>
                                <!-- <a href="../delete/delete_spp.php?angkatan=<?= $data['angkatan']; ?>" class="btn-aksi"><img src="../img/delete.png" alt=""></a> -->
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

    <?php
    require "../template/footer.php";
    ?>
    <script src="../js/script.js"></script>
</body>

</html>