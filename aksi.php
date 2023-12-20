<?php

include 'koneksi.php';

// Aksi Tambah Komentar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'tambah') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    tambahKomentar($nama, $email, $komentar);
    header("Location: Comentar.php");
}

// Aksi Hapus Komentar
if ($_GET['action'] === 'hapus' && isset($_GET['id'])) {
    $id = $_GET['id'];
    hapusKomentar($id);
    header("Location: Comentar.php");
}

// Aksi Update Komentar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'update') {
    $id_update = $_POST['id_update'];
    $nama_update = $_POST['nama'];
    $email_update = $_POST['email'];
    $komentar_update = $_POST['komentar'];

    updateKomentar($id_update, $nama_update, $email_update, $komentar_update);
    header("Location: Comentar.php");
}
?>
