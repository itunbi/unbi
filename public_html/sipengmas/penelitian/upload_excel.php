<?php
// Sertakan autoload dari PhpSpreadsheet yang sudah diunduh
require_once 'phpSpreadsheet/vendor/autoload.php'; // Sesuaikan path sesuai dengan lokasi folder PhpSpreadsheet
require '../koneksi.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['submit'])) {
    // Memeriksa apakah file telah diupload
    if ($_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['tmp_name'];
        
        // Memeriksa tipe file untuk memastikan hanya Excel yang diterima
        $fileType = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array($fileType, ['xls', 'xlsx'])) {
            die("Hanya file Excel yang diperbolehkan.");
        }
        
        // Membaca file Excel menggunakan PhpSpreadsheet
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

                // Ambil data dari setiap kolom (misalnya, nama_dosen, judul_penelitian, tahun, program_studi, pendanaan)
                $nama_dosen = mysqli_real_escape_string($conn, $row[0]); // Kolom pertama (nama_dosen)
                $judul_penelitian = mysqli_real_escape_string($conn, $row[1]); // Kolom kedua (judul_penelitian)
                $tahun = (int) $row[2]; // Kolom ketiga (tahun)
                $program_studi = mysqli_real_escape_string($conn, $row[3]); // Kolom keempat (program_studi)
                $pendanaan = mysqli_real_escape_string($conn, $row[4]); // Kolom kelima (pendanaan)

                // Menggunakan prepared statements untuk mencegah SQL Injection
                $stmt = $conn->prepare("INSERT INTO pengajuan_penelitian (nama_dosen, judul_penelitian, tahun, program_studi, pendanaan) 
                                        VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("ssiss", $nama_dosen, $judul_penelitian, $tahun, $program_studi, $pendanaan);

                // Eksekusi query
                if (!$stmt->execute()) {
                    throw new Exception("Error: " . $stmt->error);
                }
            }
            
            // Commit transaksi
            mysqli_commit($conn);
            echo "<script>
                    alert('Data berhasil diupload!');
                    window.location.href = 'pengajuan-proposal.php'; // Ganti dengan URL halaman home Anda
                  </script>";
        } catch (Exception $e) {
            // Rollback transaksi jika ada error
            mysqli_rollback($conn);
            echo "Gagal mengupload data: " . $e->getMessage();
        }
    } else {
        echo "Terjadi kesalahan saat mengupload file.";
    }
}
?>
