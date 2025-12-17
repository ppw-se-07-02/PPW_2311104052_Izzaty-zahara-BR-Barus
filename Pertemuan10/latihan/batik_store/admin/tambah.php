<?php
include "../config/koneksi.php";

if (isset($_POST['simpan'])) {
  mysqli_query($conn, "INSERT INTO produk VALUES (
    NULL,
    '$_POST[nama]',
    '$_POST[harga]',
    '$_POST[gambar]'
  )");
  header("Location: produk.php");
}
?>

<!doctype html>
<html>
<head>
  <title>Tambah Produk</title>
  <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="container">
  <h2>Tambah Produk</h2>

  <form method="post">
    <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" name="nama" required>
    </div>

    <div class="form-group">
      <label>Harga</label>
      <input type="number" name="harga" required>
    </div>

    <div class="form-group">
      <label>URL Gambar</label>
      <input type="text" name="gambar" required>
    </div>

    <button class="btn btn-add" name="simpan">Simpan</button>
    <a href="produk.php" class="btn btn-back">Kembali</a>
  </form>
</div>

</body>
</html>
