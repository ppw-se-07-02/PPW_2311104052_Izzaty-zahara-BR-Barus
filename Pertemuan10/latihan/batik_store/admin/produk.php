<?php
include "../config/koneksi.php";
$cari = $_GET['cari'] ?? '';
$data = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%$cari%'");
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Produk</title>
  <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="container">
  <h2>Kelola Produk</h2>

  <div class="top-action">
    <form method="get">
      <input type="text" name="cari" placeholder="Cari produk..." value="<?= $cari ?>">
      <button class="btn">Cari</button>
    </form>

    <a href="tambah.php" class="btn btn-add">+ Tambah Produk</a>
  </div>

  <table>
    <tr>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>

    <?php while ($p = mysqli_fetch_assoc($data)) { ?>
    <tr>
      <td><?= $p['nama_produk'] ?></td>
      <td>Rp <?= number_format($p['harga']) ?></td>
      <td class="action">
        <a href="edit.php?id=<?= $p['id'] ?>" class="btn btn-edit">Edit</a>
        <a href="hapus.php?id=<?= $p['id'] ?>" class="btn btn-delete"
           onclick="return confirm('Yakin hapus data?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

</body>
</html>
