<?php
session_start();
require '../koneksi.php';

$id_petugas = $_GET['id_petugas'];
$delete = mysqli_query($koneksi, "DELETE FROM tb_petugas WHERE id_petugas='$id_petugas'");

if ($delete) {
    echo
    "<script>
    confirm('Apakah Anda yakin akan menghapus'); 
    window.location='../view/petugas.php'; 
    </script>";
} else {
    echo
    "<script>
    alert('Gagal Dihapus'); window.location='../view/petugas.php'; 
    </script>";
}
