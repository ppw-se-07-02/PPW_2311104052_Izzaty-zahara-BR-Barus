<?php
$conn = mysqli_connect("localhost", "root", "", "batik_store");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
