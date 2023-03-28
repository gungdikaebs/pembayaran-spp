<?php
session_start();
require '../koneksi.php';

$nama_kelas = htmlspecialchars($_POST['nama_kelas']);
$keterangan = htmlspecialchars($_POST['keterangan']);

$insert = mysqli_query($koneksi, "INSERT INTO tb_kelas(nama_kelas,keterangan) VALUES ('$nama_kelas','$keterangan')");

if (!isset($insert)) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='kelas.php'</script>";
} else {
    echo
    "<script>
    alert('Data Berhasil Masuk'); window.location='../view/kelas.php'; 
    </script>";
}
