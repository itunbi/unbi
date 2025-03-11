<?php
// Sertakan autoload dari PhpSpreadsheet yang sudah diunduh
require_once 'phpSpreadsheet/vendor/autoload.php'; // Sesuaikan path sesuai dengan lokasi folder PhpSpreadsheet
require '../koneksi.php';


use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['submit'])) {
    // Memeriksa apakah file telah diupload
    if ($_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['tmp_name'];
        
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
                $luaran_tercapai = mysqli_real_escape_string($conn, $row[2]); // Kolom keempat (program_studi)
                $tahun = (int) $row[3]; // Kolom ketiga (tahun)
                $program_studi = mysqli_real_escape_string($conn, $row[4]); // Kolom kelima (review1)
                $link_file = mysqli_real_escape_string($conn, $row[5]); // Kolom kelima (review2)
                

                // Query untuk memasukkan data ke dalam tabel pengajuan_penelitian
                // Query untuk menyimpan data ke tabel pengajuan_penelitian
    $query = "INSERT INTO laporan_kemajuan (nama_dosen, judul_penelitian, luaran_penelitian, tahun, program_studi, link_file)
    VALUES ('$nama_dosen', '$judul_penelitian', '$luaran_tercapai', '$tahun', '$program_studi', '$link_file')";
                
                if (!mysqli_query($conn, $query)) {
                    throw new Exception("Error: " . mysqli_error($conn));
                }
            }
            
            // Commit transaksi
            mysqli_commit($conn);
            echo "<script>
                    alert('Data berhasil diupload!');
                    window.location.href = 'laporan-akhir.php'; // Ganti dengan URL halaman home Anda
                  </script>";
        } catch (Exception $e) {
            // Rollback transaksi jika ada error
            mysqli_roll_back($conn);
            echo "Gagal mengupload data: " . $e->getMessage();
        }
    } else {
        echo "Terjadi kesalahan saat mengupload file.";
    }
}
?>
