<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "perpus_xyz"; // Nama database perpustakaan kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database perpustakaan gagal: " . mysqli_connect_error());
}
?>