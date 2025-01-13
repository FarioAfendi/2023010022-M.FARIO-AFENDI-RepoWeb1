<?php
// Tipe data integer
$jumlahTerjual = 20; // Jumlah mie ayam terjual

// Tipe data float
$hargaPerPorsi = 5.000; // Harga satu porsi mie ayam

// Tipe data string
$namaPelanggan = "Budi";

// Tipe data array
$daftarPesanan = array("Mie Ayam Biasa", "Mie Ayam Bakso", "Mie Ayam Jumbo");

// Menampilkan informasi pesanan
echo "Nama Pelanggan: " . $namaPelanggan . "<br>";
echo "Jumlah Mie Ayam Terjual: " . $jumlahTerjual . "<br>";
echo "Harga per Porsi: Rp" . number_format($hargaPerPorsi, 2, ',', '.') . "<br>";

echo "Daftar Pesanan:<br>";
foreach ($daftarPesanan as $pesanan) {
    echo "- " . $pesanan . "<br>";
}

// Menghitung total pendapatan
$totalPendapatan = $jumlahTerjual * $hargaPerPorsi;
echo "Total Pendapatan: Rp" . number_format($totalPendapatan, 2, ',', '.');
