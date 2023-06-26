<?php
include "koneksi.php";

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi database berhasil!";
}

// Kode PHP lainnya
?>
