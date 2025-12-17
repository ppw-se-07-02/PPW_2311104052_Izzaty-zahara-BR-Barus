<?php
include "config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Batik Nusantara</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="topbar">
  <div class="container topbar-inner">
    <div class="brand">Toko Online</div>
    <nav class="nav">
      <a href="index.php">Beranda</a>
      <a href="admin/produk.php">Kelola Produk</a>
      <a href="#">Member</a>
      <a href="#">Login</a>
    </nav>
  </div>
</header>

<main class="container main">
  <h2>Daftar Produk</h2>

  <div class="products">
    <?php while ($p = mysqli_fetch_assoc($data)) { ?>
      <div class="product-card">
        <img src="<?= $p['gambar']; ?>">
        <h3><?= $p['nama_produk']; ?></h3>
        <p class="price">Rp <?= number_format($p['harga']); ?></p>
        <button class="btn">Lihat</button>
      </div>
    <?php } ?>
  </div>
</main>

</body>
</html>
