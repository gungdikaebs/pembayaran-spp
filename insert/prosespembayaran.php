<?php
session_start();
require "../koneksi.php";

$id_pembayaran = $_POST['id_pembayaran'];
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
    "UPDATE tb_pembayaran SET

        id_petugas = '$id_petugas',
        nis = '$nis',
        tgl_bayar = '$tgl_bayar',
        bulan = '$bulan',
        tahun = '$tahun',
        jumlah = '$jumlah',
        status = '$status'
        WHERE id_pembayaran = '$id_pembayaran' 
        "
);
if (!$hasil) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='../insert/pembayaran.php'</script>";
} else {
    echo "<script>location.href='../view/pembayaran.php?nis=$nis'</script>";
}
