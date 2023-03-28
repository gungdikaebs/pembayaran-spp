<?php
session_start();
require "../koneksi.php";

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$keterangan = $_POST['keterangan'];
var_dump($nama_kelas);

$query = "UPDATE tb_kelas 
SET
nama_kelas = '$nama_kelas',
keterangan = '$keterangan'
WHERE 
id_kelas = '$id_kelas'
";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='kelas.php'</script>";
} else {
    echo "<script>location.href='../view/kelas.php'</script>";
}
