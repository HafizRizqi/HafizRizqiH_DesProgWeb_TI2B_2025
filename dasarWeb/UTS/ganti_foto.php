<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fotoBaru"])) {
  if ($_FILES['fotoBaru']['error'] === UPLOAD_ERR_OK) {
    // Hapus foto lama
    if (!empty($_SESSION['fotoProfil']) && file_exists($_SESSION['fotoProfil'])) {
      unlink($_SESSION['fotoProfil']);
    }

    $ext = pathinfo($_FILES['fotoBaru']['name'], PATHINFO_EXTENSION);
    $namaFile = uniqid() . '.' . $ext;
    $target = 'uploads/' . $namaFile;
    move_uploaded_file($_FILES['fotoBaru']['tmp_name'], $target);
    $_SESSION['fotoProfil'] = $target;
  }
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ubah Foto Profil</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>🖼️ Ubah Foto Profil</h1>
  <div class="profile">
    <img src="<?= $_SESSION['fotoProfil'] ?? 'https://via.placeholder.com/120x120?text=User' ?>" alt="Foto Saat Ini">
    <p><?= htmlspecialchars($_SESSION['namaUser'] ?? 'Pengguna') ?></p>
  </div>

  <form action="" method="POST" enctype="multipart/form-data">
    <label>Pilih Foto Baru</label>
    <input type="file" name="fotoBaru" accept="image/*" required>
    <button type="submit">Simpan Foto</button>
  </form>

  <a href="index.php" style="display:block; text-align:center; margin-top:20px;">⬅️ Kembali</a>
</div>
</body>
</html>
