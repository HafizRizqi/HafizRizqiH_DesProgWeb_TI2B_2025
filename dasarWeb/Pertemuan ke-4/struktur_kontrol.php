<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanharian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanharian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah = $jumlahBuah + ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";
echo "<br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";
// Daftar nilai siswa
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan nilai dari kecil ke besar
sort($nilai);

// Abaikan 2 nilai terendah dan 2 nilai tertinggi
$nilaiTerpakai = array_slice($nilai, 2, count($nilai) - 4);

// Hitung total
$total = array_sum($nilaiTerpakai);

// Hitung rata-rata
$rataRata = $total / count($nilaiTerpakai);

// Tampilkan hasil
echo "Total nilai setelah mengabaikan 2 nilai tertinggi & 2 terendah: $total <br>";
echo "Rata-rata: $rataRata";
echo "<br>";
echo "<br>";

// Harga produk
$harga = 120000;

// Diskon (20%)
$diskon = 0.20;

// Syarat: diskon berlaku jika harga > 100000
if ($harga > 100000) {
    $potongan = $harga * $diskon;
    $hargaBayar = $harga - $potongan;
} else {
    $potongan = 0;
    $hargaBayar = $harga;
}

// Tampilkan hasil
echo "Harga awal: Rp $harga <br>";
echo "Potongan: Rp $potongan <br>";
echo "Harga yang harus dibayar: Rp $hargaBayar";
echo "<br>";
echo "<br>";

// Skor pemain
$skor = 620;

// Tampilkan total skor
echo "Total skor pemain adalah: $skor <br>";

// Cek apakah dapat hadiah tambahan
if ($skor > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>