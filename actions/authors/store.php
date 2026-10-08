<?php
if (isset($_POST['name'], $_POST['bio'])) {
  echo "<h3>Data penulis diterima</h3>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap atau halaman dibuka tanpa mengirim form.";
}
echo '<p><a href="/pages/authors/index.php">Kembali ke daftar penulis</a></p>';
