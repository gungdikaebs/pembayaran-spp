<?php
session_start();
require '../koneksi.php';

$nama = htmlspecialchars($_POST['nama']);
$nisn = htmlspecialchars($_POST['nisn']);
$pass = htmlspecialchars($_POST['password']);
$angkatan = htmlspecialchars($_POST['angkatan']);
$kelas = htmlspecialchars($_POST['kelas']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_ortu = htmlspecialchars($_POST['no_ortu']);

try {
    $result = mysqli_query($koneksi, "INSERT INTO tb_siswa (nama, nisn, password, angkatan, kelas, alamat, no_ortu) 
    VALUES ('{$nama}', '{$nisn}', '{$pass}', '{$angkatan}','{$kelas}','{$alamat}','{$no_ortu}')");

    if ($result) {
        $last_nis = mysqli_insert_id($koneksi);

        $monthNames = [
            1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember"
        ];

        $currentMonth = 7;
        $currentYear = $angkatan;
        $endMonth = 6;
        $endYear = $angkatan + 3;

        while ($currentYear < $endYear || $currentMonth <= $endMonth) {
            $payment_month = $monthNames[$currentMonth];
            // $currentDateTime = date('Y-m-d H:i:s');

            $payment_result = mysqli_query($koneksi, "INSERT INTO tb_pembayaran (nis, id_petugas, bulan, tahun, status) VALUES ('{$last_nis}','1','{$payment_month}','{$currentYear}','Belum Bayar')");

            if (!$payment_result) {
                throw new Exception("Error Processing Request : " . mysqli_error($koneksi));
            }

            $currentMonth++;

            if ($currentMonth > 12) {
                $currentMonth = 1;
                $currentYear++;
            }

            gc_collect_cycles();
        }

        echo
        "<script>
            alert('Data berhasil ditambahkan');
            location.href='../view/siswa.php';
        </script>";
    } else {
        throw new Exception("Error Processing Request : " . mysqli_error($koneksi));
    }
} catch (\Throwable $th) {
    // Print the error msg
    echo $th->getMessage();

    // echo
    //     "<script>
    //         alert('Data gagal ditambahkan');
    //         location.href='../../views/siswa/insert.php';
    //     </script>";
}
