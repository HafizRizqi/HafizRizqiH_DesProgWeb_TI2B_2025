<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);   // ✔ password di-enkripsi MD5

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

if($cek){
    echo "Anda berhasil login. silahkan menuju"; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
<?php
} else {
    echo "Anda gagal login. silahkan "; ?>
    <a href="loginForm.html">Login Kembali</a>
<?php
    // echo mysqli_error($connect);  // optional: hapus jika tidak perlu
}
?>
