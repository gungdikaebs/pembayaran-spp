<?php
session_start();
require '../koneksi.php';

$angkatan = $_GET['angkatan'];
$delete = mysqli_query($koneksi, "DELETE FROM tb_spp WHERE angkatan='$angkatan'");

if ($delete) {
    echo
    "<script>
    confirm('Apakah Anda yakin akan menghapus'); 
    window.location='../view/spp.php'; 
    </script>";
} else {
    echo
    "<script>
    alert('Gagal Dihapus'); window.location='../view/spp.php'; 
    </script>";
}
