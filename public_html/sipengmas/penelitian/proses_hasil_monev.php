<?php
// Sertakan file koneksi database
include('../koneksi.php');

// Periksa apakah form dikirimkan dengan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama_dosen = mysqli_real_escape_string($conn, $_POST['nama_dosen']);
    $skema_hibah = mysqli_real_escape_string($conn, $_POST['skema_hibah']);
    $nama_review = mysqli_real_escape_string($conn, $_POST['nama_review']);
    $hasil_review = mysqli_real_escape_string($conn, $_POST['hasil_review']);
    $tindak_lanjut = mysqli_real_escape_string($conn, $_POST['tindak_lanjut']);
    $link_file = mysqli_real_escape_string($conn, $_POST['link_file']);
    // Query untuk menyimpan data ke tabel hasil_monev
    $sql = "INSERT INTO hasil_monev (nama_dosen, skema_hibah, nama_review, hasil_review, tindak_lanjut, link_file)
            VALUES ('$nama_dosen', '$skema_hibah', '$nama_review', '$hasil_review', '$tindak_lanjut', '$link_file')";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='hasil-monev.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . "'); window.location.href='hasil-monev.php';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.location.href='hasil-monev.php';</script>";
}
?>
