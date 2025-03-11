<?php
session_start();

// Cek session
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit;
}

// Sertakan koneksi database
include('../koneksi.php');

// Konfigurasi filter, search, pagination, dan limit
$tahun_filter = isset($_POST['tahun']) ? $_POST['tahun'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';
$entries = isset($_GET['entries']) ? (int)$_GET['entries'] : 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $entries;

// Query dasar dengan filter dan pencarian
$query = "SELECT * FROM data_pengabdian WHERE 1";

// Tambahkan filter tahun jika ada
if (!empty($tahun_filter)) {
    $query .= " AND tahun = '$tahun_filter'";
}

// Tambahkan pencarian jika ada
if (!empty($search)) {
    $query .= " AND (
        nama_dosen LIKE '%$search%' OR 
        judul_penelitian LIKE '%$search%' OR 
        program_studi LIKE '%$search%'
    )";
}

// Hitung total data (untuk pagination)
$countQuery = $query; // Query dasar tanpa limit
$totalResult = $conn->query($countQuery);
$totalData = $totalResult->num_rows;

// Tambahkan limit untuk pagination
$query .= " LIMIT $start, $entries";
$result = $conn->query($query);

// Hitung total halaman
$totalPages = ceil($totalData / $entries);

// Query untuk menghitung total penelitian per tahun (jika filter diterapkan)
$total_sql = !empty($tahun_filter) 
    ? "SELECT COUNT(*) AS total FROM data_pengabdian WHERE tahun = '$tahun_filter'" 
    : "SELECT COUNT(*) AS total FROM data_pengabdian";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_penelitian = $total_row['total'];

// Query untuk menghitung total seluruh penelitian
$total_all_sql = "SELECT COUNT(*) AS total FROM data_pengabdian";
$total_all_result = $conn->query($total_all_sql);
$total_all_row = $total_all_result->fetch_assoc();
$total_all_penelitian = $total_all_row['total'];
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
   <link rel="stylesheet" href="css/pengabdian.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../home.php">
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
              <li><a href="pengajuan-proposal.php">Pengajuan Proposal</a></li>
              <li><a href="hasil-monev.php">Review Proposal</a></li>
              <li><a href="laporan-kemajuan.php">Laporan Kemajuan</a></li>
              <li><a href="laporan-akhir.php">Laporan Akhir</a></li>
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
            <li><a href="../pengabdian/data-pengabdian.php">Data Pengabdian</a></li>
              <li><a href="../pengabdian/hasil-review.php">Hasil Penilaian</a></li>
              <li><a href="../pengabdian/laporan-akhir.php">Laporan Akhir</a></li>
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
              <li><a href="laporan_penelitian_dasboard.php">Penelitian</a></li>
              <li><a href="../pengabdian/rekap-laporan-akhir.php">Pengabdian</a></li>
            </ul>
          </div>
        </div>
      </div>
                       <!-- Dropdown Menu User-->  
                        <li class="nav-item">
                            <a class="nav-link" href="#">
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
             <!--Navbar-->
            <main class="col-md-9 mx-sm-auto col-lg-10 main-content">
            <h2 class="mb-4">Form Rekap Laporan <br> Akhir Penelitian</h2>
            <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="rekap-laporan-akhir.php">Data Pengabdian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rekap-hasil.php">Hasil Penilaian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rekap-laporan-pengabdian.php">Laporan Akhir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- Download Button -->
    <div class="upload-button-container">
       <a href="path/to/your/file.pdf" download class="btn btn-danger btn-lg">
            <i class="bi bi-download"></i> Download Laporan
        </a>
    </div>

       <!-- Form Filter Tahun -->
       <form action="rekap_laporan_akhir.php" method="POST" class="mb-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="tahun" class="form-label">Filter Tahun</label>
                    <select name="tahun" class="form-select" id="tahun">
                        <option value="">Pilih Tahun</option>
                        <?php
                        // Menampilkan tahun unik dari database untuk filter
                        $query_tahun = "SELECT DISTINCT tahun FROM data_pengabdian ORDER BY tahun DESC";
                        $result_tahun = mysqli_query($conn, $query_tahun);
                        
                        while ($row_tahun = mysqli_fetch_assoc($result_tahun)) {
                            $selected = ($row_tahun['tahun'] == $tahun_filter) ? 'selected' : '';
                            echo "<option value='{$row_tahun['tahun']}' $selected>{$row_tahun['tahun']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>&nbsp;</label><br>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

<!-- Awal Content-->
<!-- Controls -->
<div class="row mb-3">
           <!-- Dropdown Show Entries -->
    <form method="GET" class="mb-3">
        <label for="entries" class="form-label">Show Entries:</label>
        <select name="entries" class="form-select w-auto d-inline" onchange="this.form.submit()">
                <option value="5" <?php echo $entries == 5 ? 'selected' : ''; ?>>5</option>
                <option value="10" <?php echo $entries == 10 ? 'selected' : ''; ?>>10</option>
                <option value="25" <?php echo $entries == 25 ? 'selected' : ''; ?>>25</option>
                <option value="50" <?php echo $entries == 50 ? 'selected' : ''; ?>>50</option>
            </select
        <input type="hidden" name="page" value="1">
    </form>
    <!-- Search -->
           <!-- Form Pencarian -->
    <form method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari data..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

        </div>
        <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama Ketua</th>
          <th>Nama Kegiatan</th>
          <th>Sumber Pembiayaan</th>
          <th>Tahun</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
      // Menampilkan data dari database dalam tabel
                  $no = $start + 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['nama_ketua']}</td>
                            <td>{$row['nama_kegiatan']}</td>
                            <td>{$row['sumber_pembiayaan']}</td>
                            <td>{$row['tahun']}</td>
                            <td>
                                <!-- Edit Form -->
                                <form action='edit_laporan_akhir.php' method='POST' style='display:inline;'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <button type='submit' class='btn btn-warning btn-sm'>Edit</button>
                                </form>
                                <!-- Delete Form -->
                                <form action='delete_laporan_akhir.php' method='POST' style='display:inline;'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Anda yakin ingin menghapus data ini?\")'>Delete</button>
                                </form>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="container mt-5">
        <?php
        // Variabel Pagination
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Halaman saat ini
        $total_pages = 100; // Total halaman
        $limit_links = 5; // Jumlah link di sekitar halaman aktif

        // Menghitung awal dan akhir pagination
        $start = max(1, $current_page - floor($limit_links / 2));
        $end = min($total_pages, $current_page + floor($limit_links / 2));

        if ($end - $start + 1 < $limit_links) {
            if ($start == 1) {
                $end = min($total_pages, $start + $limit_links - 1);
            } elseif ($end == $total_pages) {
                $start = max(1, $end - $limit_links + 1);
            }
        }

        echo '<nav><ul class="pagination justify-content-center">';

        // Tampilkan tombol "Previous"
        if ($current_page > 1) {
            echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '">&laquo; Previous</a></li>';
        }

        // Tampilkan halaman pertama dan ellipsis jika perlu
        if ($start > 1) {
            echo '<li class="page-item"><a class="page-link" href="?page=1">1</a></li>';
            if ($start > 2) {
                echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
            }
        }

        // Tampilkan link halaman di sekitar halaman aktif
        for ($i = $start; $i <= $end; $i++) {
            $active = $i == $current_page ? ' active' : '';
            echo '<li class="page-item' . $active . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }

        // Tampilkan ellipsis dan halaman terakhir jika perlu
        if ($end < $total_pages) {
            if ($end < $total_pages - 1) {
                echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
            }
            echo '<li class="page-item"><a class="page-link" href="?page=' . $total_pages . '">' . $total_pages . '</a></li>';
        }

        // Tampilkan tombol "Next"
        if ($current_page < $total_pages) {
            echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '">Next &raquo;</a></li>';
        }

        echo '</ul></nav>';
        ?>
    </div>
        <!--total_penelitian-->
        <div class="mb-3">
            <h5>Total Pengabdian <?php echo $tahun_filter ? "Tahun $tahun_filter" : "Semua Tahun"; ?></h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($total_penelitian / $total_all_penelitian) * 100; ?>%;" aria-valuenow="<?php echo $total_penelitian; ?>" aria-valuemin="0" aria-valuemax="<?php echo $total_all_penelitian; ?>">
                    <?php echo $total_penelitian; ?> Pengabdian
                </div>
            </div>
        </div>
    <!-- Form -->
  </div>

  </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
