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
              <li><a href="../penelitian/pengajuan-proposal">Pengajuan Proposal</a></li>
              <li><a href="../penelitian/hasil-monev.php">Hasil Monev</a></li>
              <li><a href="../penelitian/laporan-kemajuan.php">Laporan Kemajuan</a></li>
              <li><a href="../penelitian/laporan-akhir.php">Laporan Akhir</a></li>
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
            <li><a href="data-pengabdian.php">Data Pengabdian</a></li>
              <li><a href="hasil-review.php">Hasil Penilaian</a></li>
              <li><a href="laporan-akhir.php">Laporan Akhir</a></li>
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
              <li><a href="../penelitian/rekap-laporan-akhir.php">Penelitian</a></li>
              <li><a href="rekap-laporan-akhir.php">Pengabdian</a></li>
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
            <h2 class="mb-4">Form Rekap Laporan <br> Pengajuan Proposal</h2>
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
            <a class="nav-link" href="laporan-review.php">Hasil Penilaian</a>
          </li>>
            <a class="nav-link" href="laporan-akhir.php">Laporan Akhir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Upload Button -->
    <div class="upload-button-container">
      <label for="uploadExcel"><i class="bi bi-upload"></i>Upload Excel</label>
      <input type="file" id="uploadExcel" accept=".xls,.xlsx">
    </div>
    <div class="upload-button-container">
       <!-- Download Button -->
       <a href="path/to/your/file.pdf" download class="btn btn-danger btn-lg">
            <i class="bi bi-download"></i> Download Template Excel
        </a>
    </div>
    <p>Silahkan pilih tahun untuk melihat laporan.</p>
    <!-- Tahun (Dropdown) -->
    <div class="mb-3">
        <label for="tahunPenelitian" class="form-label">Tahun</label>
        <select class="form-select" id="tahunPenelitian" required>
          <option value="" disabled selected>Pilih tahun</option>
          <option value="2024">2026</option>
          <option value="2024">2025</option>
          <option value="2024">2024</option>
          <option value="2023">2023</option>
          <option value="2022">2022</option>
          <option value="2021">2021</option>
          <option value="2020">2020</option>
          <option value="2020">2019</option>
        </select>
</div>

<!-- Awal Content-->
<!-- Controls -->
<div class="row mb-3">
            <div class="col-md-6">
                <label for="itemsPerPage" class="form-label">Show entries:</label>
                <select id="itemsPerPage" class="form-select w-auto">
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div class="col-md-6 text-end">
                <label for="searchInput" class="form-label">Search:</label>
                <input type="text" id="searchInput" class="form-control d-inline-block w-auto" placeholder="Type to search">
            </div>
        </div>
<table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Hasil Monev</th>
          <th>Luaran</th>
          <th>Dokumen Laporan Download</th>
          <th>Tahun</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Sudah baik</td>
          <td>Publikasi Jurnal</td>
          <td>Download Dokumen</td>
          <td>2024</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Sudah baik</td>
          <td>Publikasi Jurnal</td>
          <td>Download Dokumen</td>
          <td>2024</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Sudah baik</td>
          <td>Publikasi Jurnal</td>
          <td>Download Dokumen</td>
          <td>2024</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Sudah baik</td>
          <td>Publikasi Jurnal</td>
          <td>Download Dokumen</td>
          <td>2024</td>
        </tr>
      </tbody>
    </table>
     <!-- Pagination -->
    <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
  </div>

  </div>

    <!-- Form -->
    
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
