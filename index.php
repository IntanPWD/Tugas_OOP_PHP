<?php
     // Data menu" makanan
     $menu = [
         ['nama' => 'Nasi Goreng', 'kategori' => 'Makanan', 'harga' => 15000],
         ['nama' => 'Mie Ayam', 'kategori' => 'Makanan', 'harga' => 12000],
         ['nama' => 'Es Teh', 'kategori' => 'Minuman', 'harga' => 5000],
         ['nama' => 'Kopi Hitam', 'kategori' => 'Minuman', 'harga' => 7000],
     ];
     ?>
     <h2>Pemesanan Makanan Kantin</h2>
<form action="proses.php" method="post">
    <p>Pilih Menu:</p>
    <?php foreach ($menu as $index => $item): ?>
        <input type="checkbox" name="pesanan[]" value="<?= $index ?>" />
        <?= $item['nama'] ?> - Rp <?= number_format($item['harga'], 0, ',', '.') ?><br>
    <?php endforeach; ?>
    <br>
    <button type="submit">Pesan Sekarang</button>
</form>
