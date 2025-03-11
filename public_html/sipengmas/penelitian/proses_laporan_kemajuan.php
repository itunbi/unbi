<?php
// Sertakan file koneksi database
include('../koneksi.php');

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_dosen = mysqli_real_escape_string($conn, $_POST['nama_dosen']);
    $judul_penelitian = mysqli_real_escape_string($conn, $_POST['judul_penelitian']);
    $skema_penelitian = mysqli_real_escape_string($conn, $_POST['skema_penelitian']);
    $tahun = mysqli_real_escape_string($conn, $_POST['tahun']);
    $program_studi = mysqli_real_escape_string($conn, $_POST['program_studi']);
    $link_file = mysqli_real_escape_string($conn, $_POST['link_file']);

    

    // Query untuk menyimpan data ke tabel pengajuan_penelitian
    $sql = "INSERT INTO kemajuan_penelitian (nama_dosen, judul_penelitian, skema_penelitian, tahun, program_studi, link_file)
        VALUES ('$nama_dosen', '$judul_penelitian', '$skema_penelitian', '$tahun', '$program_studi', '$link_file')";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='laporan-kemajuan.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . "'); window.location.href='laporan-kemajuan.php';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.location.href='laporan-kemajuan.php';</script>";
}
?>

<?php
// Sertakan file koneksi database
include('../koneksi.php');

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_dosen = mysqli_real_escape_string($conn, $_POST['nama_dosen']);
    $judul_penelitian = mysqli_real_escape_string($conn, $_POST['judul_penelitian']);
    $skema_penelitian = mysqli_real_escape_string($conn, $_POST['skema_penelitian']);
    $tahun = mysqli_real_escape_string($conn, $_POST['tahun']);
    $program_studi = mysqli_real_escape_string($conn, $_POST['program_studi']);
    $link_file = mysqli_real_escape_string($conn, $_POST['link_file']);

    // Query untuk menyimpan data ke tabel pengajuan_penelitian
    $sql = "INSERT INTO pengajuan_penelitian (nama_dosen, judul_penelitian, skema_penelitian, tahun, program_studi, link_file) 
            VALUES ('$nama_dosen', '$judul_penelitian','$skema_penelitian', '$tahun', '$program_studi','$link_file')";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='laporan-kemajuan.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . "'); window.location.href='laporan-kemajuan.php';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.location.href='laporan-kemajuan.php';</script>";
}
?>

