<?php
session_start();
require '../koneksi.php';

$angkatan = htmlspecialchars($_POST['angkatan']);
$biaya = htmlspecialchars($_POST['biaya']);

$insert = mysqli_query($koneksi, "INSERT INTO tb_spp(angkatan,biaya) VALUES ('$angkatan','$biaya')");

if (!isset($insert)) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='spp.php'</script>";
} else {
    echo
    "<script>
    alert('Data Berhasil Masuk'); window.location='../view/spp.php'; 
    </script>";
}
