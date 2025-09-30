<?php
$x = 75;
$y = 25;

function addition() {
    // global $x, $y; // cara 1
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // cara 2
}

addition();
echo $z; // menampilkan nilai variabel z yang merupakan hasil penjumlahan variabel x dan y
?>