<?php
session_start();
require "../koneksi.php";

$nis = $_GET['nis'];
$delete = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nis='$nis'");

if ($delete) {
    echo
    "<script>
    alert('Data Berhasil Dihapus'); window.location='../view/siswa.php'; 
    </script>";
} else {
    echo
    "<script>
    alert('Gagal Dihapus'); window.location='../view/siswa.php'; 
    </script>";
}
