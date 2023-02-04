<!-- Admin Navbar -->
<?php
if ($_SESSION['leveluser'] == "admin") {
?>
    <nav class="navbar ">
        <a href="" class="navbar-logo">Pembayaran<span>SPP</span></a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="../view/siswa.php">Data Siswa</a>
            <a href="../view/petugas.php">Data Petugas</a>
            <a href="../view/spp.php">Data Spp</a>
            <a href="../view/pembayaran.php">Pembayaran</a>
            <a href="#history-pembayaran">History Pembayaran</a>
            <a href="">Laporan</a>
            <a href="../login/logout.php">Logout</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><img src="../img/menu.png" alt="menu" width="30px"></a>
        </div>
    </nav>
<?php  } ?>
<!-- Akhir Admin Navbar -->

<!-- Petugas Navbar -->
<?php
if ($_SESSION['leveluser'] == "petugas") {
?>
    <nav class="navbar">
        <a href="" class="navbar-logo"></a>
        <div class="navbar-nav">
            <a href="../view/dashboard.php">Home</a>
            <a href="../view/pembayaran.php">Pembayaran</a>
            <a href="#history-pembayaran">History Pembayaran</a>
            <a href="#laporan">Laporan</a>
            <a href="#logout">Logout</a>
        </div>
    </nav>
<?php  } ?>
<!-- Akhir Petugas Navbar -->

<!-- Siswa Navbar -->
<?php
if ($_SESSION['leveluser'] == "siswa") {
?>
    <nav class="navbar">
        <a href="" class="navbar-logo"></a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#history-pembayaran">History Pembayaran</a>
            <a href="#logout">Logout</a>
        </div>
    </nav>
<?php  } ?>
<!-- Akhir Siswa Navbar -->