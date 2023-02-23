<?php
session_start();
require "../koneksi.php";

$id_petugas = $_SESSION['id_petugas'];
$nis = $_POST['nis'];
$tgl_bayar = date("Y-m-d");
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$jumlah = $_POST['jumlah'];
$status = "Lunas";
$angkatan = $_POST['angkatan'];

$hasil = mysqli_query(
    $koneksi,
    "INSERT INTO tb_pembayaran
(id_petugas,nis,tgl_bayar
,bulan,tahun,status,jumlah,angkatan)
VALUES ('$id_petugas','$nis','$tgl_bayar','$bulan','$tahun','$status','$jumlah','$angkatan')"
);

if (!$hasil) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='../insert/pembayaran.php'</script>";
} else {
    echo "<script>location.href='../view/pembayaran.php?nis=$nis'</script>";
}
