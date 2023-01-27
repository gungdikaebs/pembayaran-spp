<?php require "../koneksi.php" ?>
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

<body>
    <?php require "../template/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="card-tittle">
                <h4>Data Pembayaran</h4>
            </div>
            <div class="pencarian">
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Search.." width="50px">
                    <button type="submit"><img src="../img/search.png" width="20px" alt=""></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>