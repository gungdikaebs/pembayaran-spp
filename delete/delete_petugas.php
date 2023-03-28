<?php
session_start();
require '../koneksi.php';

$id_petugas = $_GET['id_petugas'];

if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $delete = mysqli_query($koneksi, "DELETE FROM tb_petugas WHERE id_petugas='$id_petugas'");

    if ($delete) {
        echo "<script>alert('Data berhasil dihapus'); window.location='../view/petugas.php';</script>";
    } else {
        echo "<script>alert('Gagal Dihapus'); window.location='../view/petugas.php';</script>";
    }
} else {
    echo "<script>
    if(confirm('Apakah Anda yakin akan menghapus?')){
        window.location.href='delete_petugas.php?id_petugas=" . $id_petugas . "&confirm=true';
    } else {
        window.location='../view/petugas.php';
    }
    </script>";
}
