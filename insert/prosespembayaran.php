<?php
session_start();
require "../koneksi.php";

$id_petugas = $_SESSION['id_petugas'];
$nis = $_POST['nis'];
$tgl = $_POST['tanggal'];
$bulan = date("F");
$tahun = date("Y");
$angkatan =  $_POST['angkatan'];
$bayar = $_POST['biaya'];

$query = "INSERT INTO tb_pembayaran (id_petugas,nis,tgl_bayar,bulan,tahun,angkatan,biaya)
VALUES ('$id_petugas','$nis','$bulan','$tahun','$angkatan','$bayar')";

$result = mysqli_query($koneksi, $query);
?>

<script>
    // window.location = "../view/pembayaran.php";
</script>