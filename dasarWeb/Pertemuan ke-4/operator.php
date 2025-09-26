<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan $a dan $b adalah $hasilTambah <br>";
echo "Hasil Pengurangan $a dan $b adalah $hasilKurang <br>";
echo "Hasil Perkalian $a dan $b adalah $hasilKali <br>";
echo "Hasil Pembagian $a dan $b adalah $hasilBagi <br>";
echo "Hasil Sisa bagi $a dan $b adalah $sisaBagi <br>";
echo "Hasil Pangkat $a dan $b adalah $pangkat <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Pembanding ' == ' $a dengan $b adalah " . ($hasilSama ? "true" : "false") . "<br>";
echo "Hasil Pembanding ' != ' $a dengan $b adalah " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Hasil Pembanding ' < ' $a dengan $b adalah " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Hasil Pembanding ' > ' $a dengan $b adalah " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Hasil Pembanding ' <= ' $a dengan $b adalah " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Hasil Pembanding ' >= ' $a dengan $b adalah " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Logika '&&' $a dengan $b adalah " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil Logika '||' $a dengan $b adalah " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil Logika '!' $a adalah " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil Logika '!' $b adalah " . ($hasilNotB ? "true" : "false") . "<br>";
echo "<br>";
$hasilTambah = $a;
$hasilTambah += $b;

$hasilKurang = $a;
$hasilKurang -= $b;

$hasilKali = $a;
$hasilKali *= $b;

$hasilBagi = $a;
$hasilBagi /= $b;

$hasilMod = $a;
$hasilMod %= $b;

echo "Hasil Penugasan '+= ' $a dengan $b adalah $hasilTambah <br>";
echo "Hasil Penugasan '-= ' $a dengan $b adalah $hasilKurang <br>";
echo "Hasil Penugasan '*= ' $a dengan $b adalah $hasilKali <br>";
echo "Hasil Penugasan '/= ' $a dengan $b adalah $hasilBagi <br>";
echo "Hasil Penugasan '%= ' $a dengan $b adalah $hasilMod <br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik $a dengan $b adalah " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Hasil Tidak identik $a dengan $b adalah " . ($hasilTidakIdentik ? "true" : "false") . "<br>";
echo "<br>";

$totalKursi = 45;
$kursiterisi = 28;
$kursiKosong = $totalKursi - $kursiterisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Persen dari Kursi restoran yang kosong adalah $persentaseKosong %"
?>