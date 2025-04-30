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

        public function tampilkanPesanan() {
            echo "<h3>Detail Pesanan</h3><ul>";
            foreach ($this->daftarPesanan as $makanan) {
                echo "<li>" . $makanan->getInfo() . "</li>";
            }
            echo "</ul>";
            echo "<strong>Total: Rp " . number_format($this->hitungTotal(), 0, ',', '.') . "</strong>";
        }
    }

          ?>