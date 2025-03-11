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
    $skema_hibah = mysqli_real_escape_string($conn, $_POST['skema_hibah']);
    $hasil_review = mysqli_real_escape_string($conn, $_POST['hasil_review']);
    $tindak_lanjut= mysqli_real_escape_string($conn, $_POST['tindak_lanjut']);
    $link_file = mysqli_real_escape_string($conn, $_POST['link_file']);

    // Query untuk mengupdate data
    $query = "UPDATE hasil_monev SET 
                nama_dosen = '$nama_dosen', 
                skema_hibah = '$skema_hibah', 
                nama_review = '$skema_review', 
                hasil_review = '$hasil_review', 
                tindak_lanjut = '$tindak_lanjut', 
                link_file = '$link_file'
              WHERE id = '$id'";

    if ($conn->query($query)) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location.href = 'rekap-monev.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal memperbarui data!');
                window.location.href = 'edit_rekap_monev.php?id=$id';
              </script>";
    }
} else {
    header('Location: ../home.php');
}
?>
