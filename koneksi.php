<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_komentar";

// Buat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Fungsi tambah komentar
function tambahKomentar($nama, $email, $komentar) {
    global $koneksi;
    $query = "INSERT INTO komentar (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
    $koneksi->query($query);
}

// Fungsi hapus komentar
function hapusKomentar($id) {
    global $koneksi;
    $query = "DELETE FROM komentar WHERE id = $id";
    $koneksi->query($query);
}

// Fungsi update komentar
function updateKomentar($id, $nama, $email, $komentar) {
    global $koneksi;
    $query = "UPDATE komentar SET nama='$nama', email='$email', komentar='$komentar' WHERE id=$id";
    $koneksi->query($query);
}

// Fungsi ambil semua komentar
function ambilSemuaKomentar() {
    global $koneksi;
    $query = "SELECT * FROM komentar";
    $result = $koneksi->query($query);

    $komentar = [];
    while ($row = $result->fetch_assoc()) {
        $komentar[] = $row;
    }

    return $komentar;
}

// Fungsi ambil komentar berdasarkan ID
function getKomentarById($id) {
    global $koneksi;
    $query = "SELECT * FROM komentar WHERE id = $id";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

?>
