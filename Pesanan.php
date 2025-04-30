<?php
    require_once 'MenuMakanan.php';
      class Pesanan {
          private $daftarPesanan = [];

          public function tambahMakanan(MenuMakanan $makanan) {
            $this->daftarPesanan[] = $makanan;
        }
        public function hitungTotal() {
            $total = 0;
            foreach ($this->daftarPesanan as $makanan) {
                $total += $makanan->harga;
            }
            return $total;
        }

          ?>