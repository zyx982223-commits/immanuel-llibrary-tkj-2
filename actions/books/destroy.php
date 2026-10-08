<?php
if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  echo "<h3>Buku dengan ID $id berhasil dihapus (simulasi, belum memakai database).</h3>";
} else {
  echo "ID buku tidak ditemukan.";
}
echo '<p><a href="/pages/books/index.php">Kembali ke daftar buku</a></p>';
