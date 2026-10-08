<?php
if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  echo "<h3>Penulis dengan ID $id berhasil dihapus (simulasi, belum memakai database).</h3>";
} else {
  echo "ID penulis tidak ditemukan.";
}
echo '<p><a href="/pages/authors/index.php">Kembali ke daftar penulis</a></p>';
