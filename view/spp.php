<?php require "../koneksi.php";
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
    <title>View SPP | Aplikasi Pembayaran SPP</title>
</head>

<body>
    <?php require "../template/navbar.php" ?>
    <div class="container">

        <div class="card-tittle">
            <h4>Data Spp</h4>
        </div>
        <div class="row">
            <table class="table" border="1px solid">
                <thead>
                    <tr>

                        <th>Angkatan</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_spp");
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $row["angkatan"] ?></td>
                            <td><?php echo $row["biaya"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>


    <script src="../js/script.js"></script>
</body>

</html>