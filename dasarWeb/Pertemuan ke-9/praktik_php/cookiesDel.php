<?php
// Menghapus cookie dengan nama "username"
setcookie("user", "Polinema", time() - 3600); // Set expiration time in the past