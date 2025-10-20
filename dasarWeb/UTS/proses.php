<?php
session_start();

if (!file_exists('uploads')) mkdir('uploads', 0777, true);

date_default_timezone_set('Asia/Jakarta');

if (!empty($_POST['nama'])) $_SESSION['namaUser'] = $_POST['nama'];

// Upload foto jika belum ada
if (empty($_SESSION['fotoProfil']) && isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
  $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
  $namaFile = uniqid() . '.' . $ext;
  $target = 'uploads/' . $namaFile;
  move_uploaded_file($_FILES['foto']['tmp_name'], $target);
  $_SESSION['fotoProfil'] = $target;
}

// Inisialisasi transaksi
if (!isset($_SESSION['transaksi'])) $_SESSION['transaksi'] = [];

// Simpan transaksi baru
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $waktu = date("Y-m-d H:i:s");
  $bulan = date("F Y");

  $data = [
    "nama" => $_SESSION['namaUser'] ?? "Pengguna",
    "jenis" => $_POST["jenis"],
    "kategori" => $_POST["kategori"],
    "jumlah" => (int)$_POST["jumlah"],
    "keterangan" => $_POST["keterangan"],
    "waktu" => $waktu,
    "bulan" => $bulan
  ];
  $_SESSION['transaksi'][] = $data;
}

// Kelompokkan per bulan
$transaksiPerBulan = [];
foreach ($_SESSION['transaksi'] as $t) {
  $bulan = $t['bulan'];
  $transaksiPerBulan[$bulan][] = $t;
}

// Hitung total
$totalPemasukan = 0;
$totalPengeluaran = 0;
foreach ($_SESSION['transaksi'] as $t) {
  if ($t['jenis'] == 'pemasukan') $totalPemasukan += $t['jumlah'];
  else $totalPengeluaran += $t['jumlah'];
}
$saldoAkhir = $totalPemasukan - $totalPengeluaran;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>📋 Riwayat Keuangan Otaku</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

  <div class="profile">
    <img src="<?= $_SESSION['fotoProfil'] ?? 'https://via.placeholder.com/120x120?text=User' ?>" alt="Foto Profil">
    <h2><?= htmlspecialchars($_SESSION['namaUser'] ?? 'Pengguna') ?></h2>
    <a href="ganti_foto.php">Ubah Foto Profil</a>
  </div>

  <h1>📅 Riwayat Keuangan</h1>

  <div class="summary">
    <h3>💸 Total Pemasukan: Rp<?= number_format($totalPemasukan, 0, ',', '.') ?></h3>
    <h3>💥 Total Pengeluaran: Rp<?= number_format($totalPengeluaran, 0, ',', '.') ?></h3>
    <h3>💰 Saldo Akhir: Rp<?= number_format($saldoAkhir, 0, ',', '.') ?></h3>
  </div>

  <?php foreach (array_reverse($transaksiPerBulan) as $bulan => $dataBulan): ?>
    <h2 class="month-title"><?= $bulan ?></h2>
    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-radius:10px;">
      <tr style="background-color:#4a90e2; color:white;">
        <th>Waktu</th><th>Jenis</th><th>Kategori</th><th>Jumlah</th><th>Keterangan</th>
      </tr>
      <?php foreach (array_reverse($dataBulan) as $t): ?>
      <tr>
        <td><?= htmlspecialchars($t["waktu"]) ?></td>
        <td><?= htmlspecialchars($t["jenis"]) ?></td>
        <td><?= htmlspecialchars($t["kategori"]) ?></td>
        <td>Rp<?= number_format($t["jumlah"], 0, ',', '.') ?></td>
        <td><?= htmlspecialchars($t["keterangan"]) ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  <?php endforeach; ?>

  <a href="index.php" style="display:block; text-align:center; margin-top:20px;">⬅️ Tambah Lagi</a>
  <a href="reset.php" style="display:block; text-align:center; margin-top:10px; color:red;">❌ Hapus Semua Data</a>
</div>
</body>
</html>
