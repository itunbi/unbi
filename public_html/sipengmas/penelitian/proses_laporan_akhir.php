<?php
// Sertakan file koneksi database
include('../koneksi.php');

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $program_studi = mysqli_real_escape_string($conn, $_POST['program_studi']);
    $fakultas = mysqli_real_escape_string($conn, $_POST['fakultas']);
    $ketua_peneliti = mysqli_real_escape_string($conn, $_POST['ketua_peneliti']);
    $nidn = mysqli_real_escape_string($conn, $_POST['nidn']);
    $anggota = mysqli_real_escape_string($conn, $_POST['anggota']);
    $skema_penelitian = mysqli_real_escape_string($conn, $_POST['skema_penelitian']);
    $judul_penelitian = mysqli_real_escape_string($conn, $_POST['judul_penelitian']);
    $kemajuan_penelitian= mysqli_real_escape_string($conn, $_POST['kemajuan_penelitian']);
    $luaran= mysqli_real_escape_string($conn, $_POST['luaran']);
    $kendala= mysqli_real_escape_string($conn, $_POST['kendala']);
    $tindak_lanjut= mysqli_real_escape_string($conn, $_POST['tindak_lanjut']);
    $link_file = mysqli_real_escape_string($conn, $_POST['link_file']);

    

    // Query untuk menyimpan data ke tabel pengajuan_penelitian
    $sql = "INSERT INTO laporan_akhir (
        program_studi, 
        fakultas, 
        ketua_peneliti, 
        nidn, 
        anggota, 
        skema_penelitian, 
        judul_penelitian, 
        kemajuan_penelitian, 
        luaran, 
        kendala, 
        tindak_lanjut, 
        link_file
    ) VALUES (
        '$program_studi', 
        '$fakultas', 
        '$ketua_peneliti', 
        '$nidn', 
        '$anggota', 
        '$skema_penelitian', 
        '$judul_penelitian', 
        '$kemajuan_penelitian', 
        '$luaran', 
        '$kendala', 
        '$tindak_lanjut', 
        '$link_file'
    )";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='laporan-akhir.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . "'); window.location.href='laporan-akhir.php';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.location.href='laporan-akhir.php';</script>";
}
?>


