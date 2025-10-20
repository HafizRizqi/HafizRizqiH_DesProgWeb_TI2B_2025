<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>💰 Catatan Keuangan Otaku</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js" defer></script>
</head>
<body>
  <div class="container">
    <h1>💰 Catatan Keuangan Otaku</h1>

    <div class="profile">
      <img src="<?= $_SESSION['fotoProfil'] ?? 'https://via.placeholder.com/120x120?text=User' ?>" alt="Foto Profil">
      <h3><?= htmlspecialchars($_SESSION['namaUser'] ?? 'Pengguna Baru') ?></h3>
      <a href="ganti_foto.php">Ubah Foto Profil</a>
    </div>

    <form id="formTransaksi" action="proses.php" method="POST" enctype="multipart/form-data">
      <label>Nama</label>
      <input type="text" name="nama" id="nama"
             value="<?= htmlspecialchars($_SESSION['namaUser'] ?? '') ?>"
             placeholder="Masukkan nama kamu">

      <?php if (empty($_SESSION['fotoProfil'])): ?>
      <label>Foto Profil</label>
      <input type="file" name="foto" id="foto" accept="image/*">
      <?php endif; ?>

      <label>Jenis Transaksi</label>
      <select name="jenis" id="jenis">
        <option value="">-- Pilih --</option>
        <option value="pemasukan">Pemasukan</option>
        <option value="pengeluaran">Pengeluaran</option>
      </select>

      <label>Kategori</label>
      <select name="kategori" id="kategori">
        <option value="">-- Pilih Kategori --</option>
        <option value="Komik">Komik</option>
        <option value="Merchandise">Merchandise</option>
        <option value="Tiket Event">Tiket Event</option>
        <option value="Makanan">Makanan</option>
        <option value="Lainnya">Lainnya</option>
      </select>

      <label>Jumlah (Rp)</label>
      <input type="number" name="jumlah" id="jumlah" placeholder="Contoh: 50000">

      <label>Keterangan</label>
      <textarea name="keterangan" id="keterangan" rows="3" placeholder="Misal: Beli Komik One Piece Vol.106"></textarea>

      <button type="submit">💾 Simpan Transaksi</button>
    </form>

    <div id="error"></div>
  </div>
</body>
</html>

