<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$p = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id=$id"));

if (isset($_POST['update'])) {
  mysqli_query($conn, "UPDATE produk SET
    nama_produk='$_POST[nama]',
    harga='$_POST[harga]',
    gambar='$_POST[gambar]'
    WHERE id=$id
  ");
  header("Location: produk.php");
}
?>

<!doctype html>
<html>
<head>
  <title>Edit Produk</title>
  <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="container">
  <h2>Edit Produk</h2>

  <form method="post">
    <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" name="nama" value="<?= $p['nama_produk'] ?>" required>
    </div>

    <div class="form-group">
      <label>Harga</label>
      <input type="number" name="harga" value="<?= $p['harga'] ?>" required>
    </div>

    <div class="form-group">
      <label>URL Gambar</label>
      <input type="text" name="gambar" value="<?= $p['gambar'] ?>" required>
    </div>

    <button class="btn btn-edit" name="update">Update</button>
    <a href="produk.php" class="btn btn-back">Kembali</a>
  </form>
</div>

</body>
</html>
