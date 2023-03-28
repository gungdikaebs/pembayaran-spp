<?php
session_start();
require "../koneksi.php";

$angkatan = $_POST['angkatan'];
$biaya = $_POST['biaya'];

$query = "UPDATE tb_spp SET
angkatan = '$angkatan',
biaya = '$biaya'
WHERE angkatan = '$angkatan'
";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    echo "<script>alert('Masukkan Data dengan benar'); location.href='spp.php'</script>";
} else {
    echo "<script>location.href='../view/spp.php'</script>";
}
