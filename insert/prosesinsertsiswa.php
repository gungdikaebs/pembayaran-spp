<?php
session_start();
require '../koneksi.php';

$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$angkatan = $_POST['angkatan'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_ortu = $_POST['no_ortu'];

$insert = mysqli_query($koneksi, "INSERT INTO tb_siswa(nama,nisn,angkatan,kelas,alamat,no_ortu) VALUES ('$nama','$nisn','$angkatan','$kelas','$alamat','$no_ortu')");

if (!isset($insert)) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='siswa.php'</script>";
} else {
    echo
    "<script>
    alert('Data Berhasil Masuk'); window.location='../view/siswa.php'; 
    </script>";
}
