<?php
// Sertakan autoload dari PhpSpreadsheet yang sudah diunduh
require_once 'phpSpreadsheet/vendor/autoload.php'; // Sesuaikan path dengan lokasi folder PhpSpreadsheet
require '../koneksi.php'; // Pastikan path ini benar

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['submit'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['tmp_name'];

        // Memeriksa tipe file
        $fileType = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        if (!in_array($fileType, ['xls', 'xlsx'])) {
            die("<script>alert('Hanya file Excel (xls, xlsx) yang diperbolehkan.'); window.history.back();</script>");
        }

        try {
            $spreadsheet = IOFactory::load($file);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray();

            // Mulai transaksi
            mysqli_begin_transaction($conn);

            try {
                foreach ($rows as $index => $row) {
                    if ($index === 0) continue;

                    $program_studi = mysqli_real_escape_string($conn, trim($row[0] ?? '')); 
                    $fakultas = mysqli_real_escape_string($conn, trim($row[1] ?? '')); 
                    $ketua_peneliti = mysqli_real_escape_string($conn, trim($row[2] ?? '')); 
                    $nidn = mysqli_real_escape_string($conn, trim($row[3] ?? '')); 
                    $anggota = mysqli_real_escape_string($conn, trim($row[4] ?? '')); 
                    $skema_penelitian = mysqli_real_escape_string($conn, trim($row[5] ?? '')); 
                    $judul_penelitian = mysqli_real_escape_string($conn, trim($row[6] ?? '')); 
                    $kemajuan_penelitian = mysqli_real_escape_string($conn, trim($row[7] ?? '')); 
                    $luaran = mysqli_real_escape_string($conn, trim($row[8] ?? '')); 
                    $kendala = mysqli_real_escape_string($conn, trim($row[9] ?? '')); 
                    $tindak_lanjut = mysqli_real_escape_string($conn, trim($row[10] ?? '')); 
                    $link_file = mysqli_real_escape_string($conn, trim($row[11] ?? ''));

                    if (empty($program_studi) || empty($fakultas) || empty($ketua_peneliti)) {
                        throw new Exception("Data tidak lengkap pada baris " . ($index + 1));
                    }

                    $stmt = $conn->prepare(
                        "INSERT INTO laporan_akhir 
                        (program_studi, fakultas, ketua_peneliti, nidn, anggota, skema_penelitian, judul_penelitian, kemajuan_penelitian, luaran, kendala, tindak_lanjut, link_file) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
                    );

                    if (!$stmt) {
                        throw new Exception("Statement Error: " . $conn->error);
                    }

                    $stmt->bind_param(
                        "ssssssssssss", 
                        $program_studi, $fakultas, $ketua_peneliti, $nidn, $anggota, 
                        $skema_penelitian, $judul_penelitian, $kemajuan_penelitian, 
                        $luaran, $kendala, $tindak_lanjut, $link_file
                    );

                    if (!$stmt->execute()) {
                        throw new Exception("Insert Error: " . $stmt->error);
                    }
                }

                // Commit transaksi
                mysqli_commit($conn);
                echo "<script>
                        alert('Data berhasil diupload!');
                        window.location.href = 'rekap-laporan-kemajuan.php';
                      </script>";
            } catch (Exception $e) {
                // Rollback transaksi
                mysqli_rollback($conn);
                echo "<script>alert('Gagal mengupload data: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
            }
        } catch (Exception $e) {
            echo "<script>alert('File tidak dapat dibaca: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan saat mengupload file.'); window.history.back();</script>";
    }
}
?>
