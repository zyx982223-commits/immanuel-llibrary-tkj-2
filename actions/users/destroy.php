<?php
if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  echo "<h3>Pengguna dengan ID $id berhasil dihapus (simulasi, belum memakai database).</h3>";
} else {
  echo "ID pengguna tidak ditemukan.";
}
echo '<p><a href="/pages/users/index.php">Kembali ke daftar pengguna</a></p>';
