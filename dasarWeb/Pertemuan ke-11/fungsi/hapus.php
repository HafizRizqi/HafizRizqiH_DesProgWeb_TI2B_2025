<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = antiInjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) {
    $id = antiinjection($koneksi, $_GET['id']);

    // 1. Hapus data anggota terlebih dahulu
    $query1 = "DELETE FROM anggota WHERE user_id = '$id'";
    if (mysqli_query($koneksi, $query1)) {

        // 2. Hapus data user
        $query2 = "DELETE FROM user WHERE id = '$id'";
        if (mysqli_query($koneksi, $query2)) {
            pesan('success', "Anggota berhasil dihapus.");
        } else {
            pesan('warning', "Data anggota terhapus, tetapi data user gagal dihapus: " . mysqli_error($koneksi));
        }

    } else {
        pesan('danger', "Data anggota gagal dihapus: " . mysqli_error($koneksi));
    }

    header("Location: ../index.php?page=anggota");
}


}
?>