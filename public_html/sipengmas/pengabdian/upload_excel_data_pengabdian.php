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
                    $nama_ketua = mysqli_real_escape_string($conn, trim($row[0] ?? '')); 
                    $nama_kegiatan = mysqli_real_escape_string($conn, trim($row[1] ?? '')); 
                    $sumber_pembiayaan = mysqli_real_escape_string($conn, trim($row[2] ?? '')); 
                    $tahun = mysqli_real_escape_string($conn, trim($row[3] ?? '')); 

                    // Validasi: Pastikan kolom yang wajib tidak kosong
                    if (empty($nama_ketua) || empty($nama_kegiatan) || empty($sumber_pembiayaan) || empty($tahun)) {
                        throw new Exception("Data tidak lengkap atau format tahun tidak valid pada baris " . ($index + 1));
                    }

                    // Menggunakan prepared statements untuk mencegah SQL Injection
                    $stmt = $conn->prepare("INSERT INTO data_pengabdian (nama_ketua, nama_kegiatan, sumber_pembiayaan, tahun) 
                                            VALUES (?, ?, ?, ?)");
                    if (!$stmt) {
                        throw new Exception("Statement Error: " . $conn->error);
                    }

                    // Binding parameters
                    $stmt->bind_param("ssss", $nama_ketua, $nama_kegiatan, $sumber_pembiayaan, $tahun);

                    // Eksekusi query
                    if (!$stmt->execute()) {
                        throw new Exception("Insert Error: " . $stmt->error);
                    }
                }
                
                // Commit transaksi
                mysqli_commit($conn);
                echo "<script>
                        alert('Data berhasil diupload!');
                        window.location.href = 'data-pengabdian.php'; // Ganti dengan URL halaman Anda
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
