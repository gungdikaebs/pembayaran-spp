<?php
session_start();
require '../koneksi.php';

$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$leveluser = $_POST['leveluser'];


$insert = mysqli_query($koneksi, "INSERT INTO tb_petugas(nama_petugas,username,password,leveluser) VALUES ('$nama_petugas','$username','$password','$leveluser')");

if (!isset($insert)) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='petugas.php'</script>";
} else {
    echo
    "<script>
    alert('Data Berhasil Masuk'); window.location='../view/petugas.php'; 
    </script>";
}
