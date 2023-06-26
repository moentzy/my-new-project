<?php
global $koneksi;
$host = "localhost"; // ganti dengan nama host Anda
$username = "root"; // ganti dengan nama pengguna database Anda
$password = ""; // ganti dengan kata sandi database Anda
$database = "gobang"; // ganti dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>

