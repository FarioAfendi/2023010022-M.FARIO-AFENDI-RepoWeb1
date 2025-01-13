<?php
// Server dengan pengaturan default (user 'root' tanpa password)
$host = 'localhost'; // Server
$user = 'root';      // Username
$pass = '';          // Password
$database = 'crudphp'; // Nama Database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $database);

// Cek koneksi
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

echo 'Koneksi berhasil!';
