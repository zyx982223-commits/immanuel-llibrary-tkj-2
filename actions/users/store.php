<?php
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "<h3>Data pengguna diterima</h3>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap atau halaman dibuka tanpa mengirim form.";
}
echo '<p><a href="/pages/users/index.php">Kembali ke daftar pengguna</a></p>';
