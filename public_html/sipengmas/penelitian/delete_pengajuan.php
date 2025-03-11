<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Jika tidak ada session username, redirect ke index.php
    header("Location: index.php");
    exit;
}

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lp2m-unbi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah ID diterima
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $conn->real_escape_string($_POST['id']);

    // Query untuk menghapus data
    $query = "DELETE FROM pengajuan_penelitian WHERE id = '$id'";
    if ($conn->query($query)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'rekap-pengajuan-proposal.php'; // Ganti dengan halaman utama Anda
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href = 'rekap-pengajuan-proposal.php'; // Ganti dengan halaman utama Anda
              </script>";
    }
} else {
    header('Location: home.php'); // Ganti dengan halaman utama Anda
}
?>
