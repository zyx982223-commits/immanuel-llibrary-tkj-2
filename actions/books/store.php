<?php
if (isset($_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  echo "<h3>Data buku diterima</h3>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap atau halaman dibuka tanpa mengirim form.";
}
echo '<p><a href="/pages/books/index.php">Kembali ke daftar buku</a></p>';
