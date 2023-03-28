   <?php
    session_start();
    require "../koneksi.php";

    //  Mengambil data dari Form
    $username = $_POST['username'];
    $nis = $_POST['username'];
    $password = $_POST['password'];

    // Data Petugas
    $query_petugas = mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE username='$username' AND password = '$password'");
    $cek_petugas = mysqli_num_rows($query_petugas);
    $baris_petugas = mysqli_fetch_assoc($query_petugas);


    // Data Siswa
    $query_siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis='$username' AND password='$password'");
    $cek_siswa = mysqli_num_rows($query_siswa);
    $baris_siswa = mysqli_fetch_assoc($query_siswa);

    if ($cek_petugas > 0) {
        $_SESSION['id_petugas'] = $baris_petugas['id_petugas'];
        $_SESSION['username'] = $username;
        $_SESSION['nama_petugas'] = $baris_petugas['nama_petugas'];
        $_SESSION['leveluser'] = $baris_petugas['leveluser'];
        header("location: ../view/dashboard.php");
    } else if ($cek_siswa > 0) {
        $_SESSION['nis'] = $nis;
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $baris_petugas['nama'];
        $_SESSION['leveluser'] = "siswa";
        header("location:../view/dashboard.php");
    } else {
        echo "<script> alert('Username / Password Salah'); window.location.href = 'login.php';</script> ";
    }

    ?> 