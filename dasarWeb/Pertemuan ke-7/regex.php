<?php

$pattern = '/[a-z]/'; // Mencari huruf kecil

$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
$text = 'There are 123 Apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br> Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

$pattern = '/apple/'; // Mencari kata "apple"
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo "<br>" . $new_text; // Output: I like banana pie.

$pattern = '/go*d/'; // Cocokkan 'gd', 'god', 'good', 'goood', dll.
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "<br> Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

?>
