<?php
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
  echo "<h3>Data profil diterima</h3>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap atau halaman dibuka tanpa mengirim form.";
}
echo '<p><a href="/pages/profile/edit.php">Kembali ke profil</a></p>';
