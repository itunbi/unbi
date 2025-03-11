<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Jika tidak ada session username, redirect ke index.php
    header("Location: index.php");
    exit;
}

// Sertakan koneksi database
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_pengumuman = $_POST['tanggal_pengumuman'];
    $status = $_POST['status'];

    // Query untuk memasukkan data ke dalam tabel pengumuman
    $sql = "INSERT INTO pengumuman (judul, deskripsi, tanggal_pengumuman, status) 
            VALUES ('$judul', '$deskripsi', '$tanggal_pengumuman', '$status')";

    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, beri notifikasi dan redirect ke halaman pengumuman
        echo "<script>alert('Pengumuman berhasil ditambahkan!'); window.location.href='home.php';</script>";
    } else {
        // Jika gagal, tampilkan error
        echo "<script>alert('Gagal menambahkan pengumuman.');</script>";
    }
}

// Query untuk mengambil pengumuman dari database
$sql = "SELECT * FROM pengumuman ORDER BY tanggal_pengumuman DESC";
$result = mysqli_query($conn, $sql);

// Menangani aksi hapus pengumuman
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM pengumuman WHERE id = $id";
    if (mysqli_query($conn, $delete_sql)) {
        echo "<script>alert('Pengumuman berhasil dihapus!'); window.location.href='pengumuman.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pengumuman.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP2M UNBI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="bi bi-house-door"></i> Dashboard
                            </a>
                        </li>

                        <!-- Dropdown Menu Penelitian-->
              <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="bi bi-files"></i> Penelitian
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ul class="list-unstyled">
              <li><a href="penelitian/pengajuan-proposal.php">Pengajuan Proposal</a></li>
              <li><a href="penelitian/hasil-monev.php">Review Proposal</a></li>
              <li><a href="penelitian/laporan-kemajuan.php">Laporan Kemajuan</a></li>
              <li><a href="penelitian/laporan-akhir.php">Laporan Akhir</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Dropdown Menu Pengabdian-->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="bi bi-files"></i> Pengabdian
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ul class="list-unstyled">
            <li><a href="pengabdian/data-pengabdian.php">Data Pengabdian</a></li>
              <li><a href="pengabdian/hasil-review.php">Hasil Penilaian</a></li>
              <li><a href="pengabdian/laporan-akhir.php">Laporan Akhir</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Dropdown Menu Laporan-->    
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="bi-bar-chart"></i> Laporan
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ul class="list-unstyled">
              <li><a href="penelitian/laporan_penelitian_dasboard.php">Penelitian</a></li>
              <li><a href="pengabdian/laporan_pengabdian_dasboard.php">Pengabdian</a></li>
            </ul>
          </div>
        </div>
      </div>
                       <!-- Dropdown Menu User-->  
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">
                                <i class="bi bi-people"></i> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="container mt-5">
        <h2>Tambah Pengumuman</h2>

        <!-- Form Input Pengumuman -->
        <form action="home.php" method="POST">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Pengumuman</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Pengumuman</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal_pengumuman" class="form-label">Tanggal Pengumuman</label>
                <input type="date" class="form-control" id="tanggal_pengumuman" name="tanggal_pengumuman" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status Pengumuman</label>
                <select class="form-select" id="status" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Pengumuman</button>
            <a href="home.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!--Menampilkan hasil pengumuman-->
    <div class="container mt-5">
        <h2>Daftar Pengumuman</h2>
        
        <!-- Tabel Pengumuman -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Pengumuman</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menampilkan pengumuman dalam bentuk tabel
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <td>' . $row['id'] . '</td>
                            <td>' . htmlspecialchars($row['judul']) . '</td>
                            <td>' . htmlspecialchars($row['deskripsi']) . '</td>
                            <td>' . $row['tanggal_pengumuman'] . '</td>
                            <td>' . $row['status'] . '</td>
                            <td>
                                <a href="edit_pengumuman.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                                <a href="pengumuman.php?delete_id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus pengumuman ini?\')">Delete</a>
                            </td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="6" class="text-center">Tidak ada pengumuman yang ditemukan.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
