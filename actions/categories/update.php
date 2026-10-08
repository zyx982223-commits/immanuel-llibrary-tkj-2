<?php
if (isset($_POST['id'], $_POST['name'], $_POST['description'])) {
  echo "<h3>Data kategori yang diubah diterima</h3>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap atau halaman dibuka tanpa mengirim form.";
}
echo '<p><a href="/pages/categories/index.php">Kembali ke daftar kategori</a></p>';
