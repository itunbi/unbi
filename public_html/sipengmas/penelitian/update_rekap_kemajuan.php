<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Jika tidak ada session username, redirect ke index.php
    header("Location:../index.php");
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

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $conn->real_escape_string($_POST['id']);
    $nama_dosen = $conn->real_escape_string($_POST['nama_dosen']);
    $judul_penelitian = $conn->real_escape_string($_POST['judul_penelitian']);
    $skema_penelitian = $conn->real_escape_string($_POST['skema_penelitian']);
    $tahun = mysqli_real_escape_string($conn, $_POST['tahun']);
    $program_studi = mysqli_real_escape_string($conn, $_POST['program_studi']);
    $link_file = mysqli_real_escape_string($conn, $_POST['link_file']);

    // Query untuk mengupdate data
    $query = "UPDATE kemajuan_penelitian SET 
                nama_dosen = '$nama_dosen', 
                judul_penelitian = '$judul_penelitian',
                skema_penelitian = '$skema_penelitian',
                tahun = '$tahun', 
                program_studi = '$program_studi', 
                link_file = '$link_file'
              WHERE id = '$id'";

    if ($conn->query($query)) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location.href = 'rekap-laporan-kemajuan.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal memperbarui data!');
                window.location.href = 'edit_rekap_kemajuan.php?id=$id';
              </script>";
    }
} else {
    header('Location: ../home.php');
}
?>
