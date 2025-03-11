<?php
// Sertakan autoload dari PhpSpreadsheet yang sudah diunduh
require_once 'phpSpreadsheet/vendor/autoload.php'; // Sesuaikan path sesuai dengan lokasi folder PhpSpreadsheet
require '../koneksi.php'; // Pastikan path ini benar

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['submit'])) {
    // Memeriksa apakah file telah diupload
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['tmp_name'];
        
        // Memeriksa tipe file untuk memastikan hanya file Excel yang diterima
        $fileType = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        if (!in_array($fileType, ['xls', 'xlsx'])) {
            die("<script>alert('Hanya file Excel (xls, xlsx) yang diperbolehkan.'); window.history.back();</script>");
        }
        
        // Membaca file Excel menggunakan PhpSpreadsheet
        try {
            $spreadsheet = IOFactory::load($file);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray(); // Mengonversi sheet menjadi array
            
            // Memulai transaksi untuk memastikan integritas data
            mysqli_begin_transaction($conn);
            
            try {
                // Iterasi untuk setiap baris data Excel
                foreach ($rows as $index => $row) {
                    // Lewati header (baris pertama)
                    if ($index === 0) {
                        continue;
                    }

                    // Ambil data dari setiap kolom
                    $nama_dosen = mysqli_real_escape_string($conn, trim($row[0] ?? '')); 
                    $skema_hibah = mysqli_real_escape_string($conn, trim($row[1] ?? '')); 
                    $nama_review = mysqli_real_escape_string($conn, trim($row[2] ?? '')); 
                    $hasil_review = mysqli_real_escape_string($conn, trim($row[3] ?? '')); 
                    $tindak_lanjut = mysqli_real_escape_string($conn, trim($row[4] ?? '')); 
                    $link_file = mysqli_real_escape_string($conn, trim($row[5] ?? ''));

                    // Validasi: Pastikan kolom yang wajib tidak kosong
                    if (empty($nama_dosen) || empty($skema_hibah) || empty($nama_review)) {
                        throw new Exception("Data tidak lengkap pada baris " . ($index + 1));
                    }

                    // Menggunakan prepared statements untuk mencegah SQL Injection
                    $stmt = $conn->prepare("INSERT INTO hasil_monev (nama_dosen, skema_hibah, nama_review, hasil_review, tindak_lanjut, link_file) 
                                            VALUES (?, ?, ?, ?, ?, ?)");
                    if (!$stmt) {
                        throw new Exception("Statement Error: " . $conn->error);
                    }

                    $stmt->bind_param("ssssss", $nama_dosen, $skema_hibah, $nama_review, $hasil_review, $tindak_lanjut, $link_file);

                    // Eksekusi query
                    if (!$stmt->execute()) {
                        throw new Exception("Insert Error: " . $stmt->error);
                    }
                }
                
                // Commit transaksi
                mysqli_commit($conn);
                echo "<script>
                        alert('Data berhasil diupload!');
                        window.location.href = 'hasil-monev.php'; // Ganti dengan URL halaman Anda
                      </script>";
            } catch (Exception $e) {
                // Rollback transaksi jika ada error
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
