<?php

$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda Sudah dewasa";
} else {
    echo "Anda belum dewasa atau variabel 'umur' belum di temukan";
}