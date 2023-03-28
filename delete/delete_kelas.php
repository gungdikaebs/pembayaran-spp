<?php
session_start();
require '../koneksi.php';

$id_kelas = $_GET['id_kelas'];
$delete = mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id_kelas='$id_kelas'");

if ($delete) {
    echo
    "<script>
    confirm('Apakah Anda yakin akan menghapus'); 
    window.location='../view/kelas.php'; 
    </script>";
} else {
    echo
    "<script>
    alert('Gagal Dihapus'); window.location='../view/kelas.php'; 
    </script>";
}
