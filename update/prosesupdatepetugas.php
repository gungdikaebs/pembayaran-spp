<?php
session_start();
require '../koneksi.php';

$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['leveluser'];

$query = "UPDATE tb_petugas SET
id_petugas = '$id_petugas',
nama_petugas = '$nama_petugas',
username = '$username',
password = '$password',
leveluser = '$level' 
WHERE id_petugas = '$id_petugas'
";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='petugas.php'</script>";
} else {
    echo "<script>location.href='../view/petugas.php'</script>";
}
