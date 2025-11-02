<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>

<h2>Form Contoh</h2>
<form action="proses_lanjut.php" method="POST">
    <label for="buah">Pilih Buah:</label>
    <select id="buah" name="buah">
        <option value="apel">Apel</option>
        <option value="pisang">Pisang</option>
        <option value="jeruk">Mangga</option>
        <option value="mangga">Jeruk</option>
    </select>
    <br><br>

    <label>Pilih Warna Favorit:</label><br>
    <input type="checkbox" name="warna[]" value="merah"> Merah<br>
    <input type="checkbox" name="warna[]" value="biru"> Biru<br>
    <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

    <br>

    <label>Pilih Jenis Kelamin:</label><br>
    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

    <br>

    <input type="submit" value="Kirim">
</form>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $selectedBuah = $_POST['buah'];

    if(isset($_POST['warna'])){
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Ansa memilih buah: " . $selectedBuah . "<br>";

    if(!empty($selectedWarna)){
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . $selectedJenisKelamin . "<br>";
}
?>