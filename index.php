<?php
session_start();
require "koneksi.php";

if (!isset($_SESSION['username'])) {
    echo "<script>location.href='login/login.php';</script>";
} else {
    echo "<script>location.href='view/dashboard.php';</script>";
}
