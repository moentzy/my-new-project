<?php

    include "koneksi.php";

    

    $sql = "SELECT * FROM produk WHERE id_produk = $id_produk";
    $result = $koneksi->query($sql);
    
    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while ($row = $result->fetch_assoc()) {
            $namaProduk =  $row['nama_produk'];
            $produkDeskripsi =  $row['deskripsi'];
            $produkgambar =  $row['gambar'];
            $produkLink =  $row['link'];

            
        }
    } else {
        echo "Produk tidak ditemukan.";
    }
      // Menutup koneksi database
      $koneksi->close();
      ?>