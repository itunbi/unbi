<?php
// Sertakan file koneksi database
include('../koneksi.php');

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_dosen = mysqli_real_escape_string($conn, $_POST['nama_dosen']);
    $judul_penelitian = mysqli_real_escape_string($conn, $_POST['judul_penelitian']);
    $tahun = mysqli_real_escape_string($conn, $_POST['tahun']);
    $program_studi = mysqli_real_escape_string($conn, $_POST['program_studi']);
    $pendanaan = mysqli_real_escape_string($conn, $_POST['pendanaan']);
    $dana_disetujui = mysqli_real_escape_string($conn, $_POST['dana_disetujui']);

    // Query untuk menyimpan data ke tabel pengajuan_penelitian
    $sql = "INSERT INTO pengajuan_penelitian (nama_dosen, judul_penelitian, tahun, program_studi, pendanaan, dana_disetujui) 
            VALUES ('$nama_dosen', '$judul_penelitian', '$tahun', '$program_studi', '$pendanaan','$dana_disetujui')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='pengajuan-proposal.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . "'); window.location.href='pengajuan-proposal.php';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.location.href='pengajuan-proposal.php';</script>";
}
?>

