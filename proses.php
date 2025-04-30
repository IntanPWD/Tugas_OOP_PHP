<?php
     require_once 'MenuMakanan.php';
     require_once 'Pesanan.php';
     
     // Daftar makanan yang tersedia
     $menuTersedia = [
         new MenuMakanan('Nasi Goreng', 'Makanan', 15000),
         new MenuMakanan('Mie Ayam', 'Makanan', 12000),
         new MenuMakanan('Es Teh', 'Minuman', 5000),
         new MenuMakanan('Kopi Hitam', 'Minuman', 7000),
     ];
     
     // Cek apa ada pesanan atau tidak
     if (isset($_POST['pesanan'])) {
         $pesanan = new Pesanan();
     
         foreach ($_POST['pesanan'] as $index) {
             $makanan = $menuTersedia[(int)$index];
             $pesanan->tambahMakanan($makanan);
         }
     
         // menampilkan hasil
         $pesanan->tampilkanPesanan();
     } else {
         echo "Tidak ada pesanan yang dipilih.";
     }