<?php
session_start();
require "../koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$pass = $_POST['password'];
$angkatan = $_POST['angkatan'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_ortu = $_POST['no_ortu'];


$query = "UPDATE tb_siswa SET
nama = '$nama',
nisn = '$nisn',
password = '$pass',
angkatan = '$angkatan',
kelas = '$kelas',
alamat = '$alamat',
no_ortu = '$no_ortu'
WHERE nis = '$nis'
";
$hasil = mysqli_query($koneksi, $query);

// var_dump($nis);
if (!$hasil) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='siswa.php'</script>";
} else {
    echo "<script>location.href='../view/siswa.php'</script>";
}
