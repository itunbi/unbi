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
              <li><a href="../penelitian/pengajuan-proposal.php">Pengajuan Proposal</a></li>
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
              <li><a href="penelitian/rekap-pengajuan-proposal.php">Penelitian</a></li>
              <li><a href="pengabdian/rekap-pengajuan-proposal.php">Pengabdian</a></li>
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
            <main class="col-md-6 mx-sm-auto col-lg-7 main-content">
            <h2 class="mb-4">Form Data Pengabdian <br>Kepada Masyarakat Dosen</h2>
            

    <!-- Upload Button -->
    <form action="upload_excel_data_pengabdian.php" method="POST" enctype="multipart/form-data">
    <div class="upload-button-container">
      <label for="file"><i class="bi bi-upload"></i>Pilih File Excel</label>
      <input type="file" name="file" id="file" accept=".xls,.xlsx">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <!-- Tombol Submit -->
    <div class="upload-button-container">
       <!-- Download Button -->
       <a href="path/to/your/file.pdf" download class="btn btn-danger btn-lg">
            <i class="bi bi-download"></i> Download Template Excel
        </a>
    </div>

    <!-- Form -->
    <form>
      <!-- Nama Dosen -->
      <div class="mb-3">
        <label for="nama_ketua" class="form-label">Nama Ketua</label>
        <input type="text" class="form-control" name="nama_ketua" id="nama_ketua" placeholder="Masukkan nama ketua" required>
      </div>

      <!-- Judul Penelitian -->
      <div class="mb-3">
        <label for="nama_kegiatan" class="form-label">Nama Kegiatan PKM</label>
        <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" placeholder="Masukkan nama kegiatan PKM" required>
      </div>

        <!-- Skema Penelitian (Dropdown) -->
        <div class="mb-3">
        <label for="sumber_pembiayaan" class="form-label">Sumber Pembiayaan</label>
        <select class="form-select" name="sumber_pembiayaan" id="sumber_pembiayaan" required>
          <option value="" disabled selected>Pilih sumber pembiayaan</option>
          <option value="peneliti-muda">Lembaga Luar Negeri</option>
          <option value="peneliti-muda">Dalam Negeri (di Luar PT)</option>
          <option value="hibah-unbi">PT/Mandiri</option>
        </select>
      </div>

      <!-- Tahun (Dropdown) -->
      <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <select class="form-select" name="tahun" id="tahun" required>
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

      
      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-submit w-50">Submit</button>
      </div>
    </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
