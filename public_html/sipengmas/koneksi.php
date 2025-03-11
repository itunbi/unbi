<?php
// Konfigurasi database
$host = "localhost";     // Nama host, biasanya localhost
$user = "u495571968_lp2m_unbi";          // Username database (default: root)
$password = "!4:fC?qU1";          // Password database (kosong jika default)
$database = "u495571968_lp2m_unbi"; // Ganti dengan nama database kamu

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Jika berhasil
// echo "Koneksi berhasil!";
?>
