<?php

$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda Sudah dewasa <br>";
} else {
    echo "Anda belum dewasa atau variabel 'umur' belum di temukan <br>";
}

$data = array("nama" => "Jane", "umur" => 25);
if (isset($data["nama"])) {
    echo "<br>Nama : " . $data["nama"];
} else {
    echo "<br> Variabel 'nama' tidak ditemukan dalam array.";
}
?>