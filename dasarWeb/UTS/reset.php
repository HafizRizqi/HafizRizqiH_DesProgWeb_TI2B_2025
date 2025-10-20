<?php
session_start();
if (isset($_SESSION['fotoProfil']) && file_exists($_SESSION['fotoProfil'])) {
  unlink($_SESSION['fotoProfil']);
}
session_destroy();
header("Location: index.php");
exit();
?>
