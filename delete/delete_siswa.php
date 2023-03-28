<?php
session_start();
require "../koneksi.php";

$nis = $_GET['nis'];

if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $delete_pembayaran = mysqli_query($koneksi, "DELETE FROM tb_pembayaran WHERE nis='$nis'");
    $delete = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nis='$nis'");

    if ($delete) {
        echo "<script>alert('Data berhasil dihapus'); window.location='../view/siswa.php';</script>";
    } else {
        echo "<script>alert('Gagal Dihapus'); window.location='../view/siswa.php';</script>";
    }
} else {
    echo "<script>
    if(confirm('Apakah yakin ingin menghapus data ini')){
        window.location.href='delete_siswa.php?nis=" . $nis . "&confirm=true';
    } else {
        window.location='../view/siswa.php';
    }
    </script>";
}
