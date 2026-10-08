<?php
if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  echo "<h3>Kategori dengan ID $id berhasil dihapus (simulasi, belum memakai database).</h3>";
} else {
  echo "ID kategori tidak ditemukan.";
}
echo '<p><a href="/pages/categories/index.php">Kembali ke daftar kategori</a></p>';
