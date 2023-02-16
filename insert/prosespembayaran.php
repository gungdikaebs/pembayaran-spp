<?php
session_start();
require "../koneksi.php";

$id_petugas = $_SESSION['id_petugas'];
$nis = $_POST['nis'];
$tgl_bayar = date("Y-m-d");
$bulan = $_POST[];
