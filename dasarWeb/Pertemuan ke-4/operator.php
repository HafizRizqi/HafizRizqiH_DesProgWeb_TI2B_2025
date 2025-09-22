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

echo "Hasil Pembanding ' == ' $a dengan $b adalah $hasilSama <br>";
echo "Hasil Pembanding ' != ' $a dengan $b adalah $hasilTidakSama <br>";
echo "Hasil Pembanding ' < ' $a dengan $b adalah $hasilLebihKecil <br>";
echo "Hasil Pembanding ' > ' $a dengan $b adalah $hasilLebihBesar <br>";
echo "Hasil Pembanding ' <= ' $a dengan $b adalah $hasilLebihKecilSama <br>";
echo "Hasil Pembanding ' >= ' $a dengan $b adalah $hasilLebihBesarSama <br>";
?>