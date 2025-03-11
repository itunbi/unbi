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
   <link rel="stylesheet" href="css/penelitian.css">
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
            <h2 class="mb-4">Form Pengajuan Proposal <br> Penelitian Dosen</h2>
            

    <!-- Upload Button -->
    <form action="upload_excel.php" method="POST" enctype="multipart/form-data">
    <div class="upload-button-container">
      <label for="file"><i class="bi bi-upload"></i>Pilih File Excel</label>
      <input type="file" name="file" id="file" accept=".xls,.xlsx">
      <!-- Tombol Submit -->
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  
    <div class="upload-button-container">
       <!-- Download Button -->
       <a href="path/to/your/file.pdf" download class="btn btn-danger btn-lg">
            <i class="bi bi-download"></i> Download Template Excel
        </a>
    </div>
    
    <!--Form Action-->
    <form action="proses_pengajuan_proposal.php" method="POST">
      <!-- Nama Dosen -->
      <div class="mb-3">
        <label for="nama_dosen" class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Masukkan nama dosen" required>
      </div>

      <!-- Judul Penelitian -->
      <div class="mb-3">
        <label for="judul_penelitian" class="form-label">Judul Penelitian</label>
        <input type="text" class="form-control" name="judul_penelitian" id="judul_penelitian" placeholder="Masukkan judul penelitian" required>
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

      <!-- Prodi (Dropdown) -->
      <div class="mb-3">
        <label for="program_studi" class="form-label">Program Studi</label>
        <select class="form-select" name="program_studi" id="program_studi" required>
          <option value="" disabled selected>Pilih Prodi</option>
          <option value="Farmasi">Farmasi</option>
          <option value="Fisioterapi">Fisioterapi</option>
          <option value="Administrasi Rumah Sakit">Administrasi Rumah Sakit</option>
          <option value="Keselamatan Dan Kesehatan Kerja">Keselamatan Dan Kesehatan Kerja</option>
          <option value="Teknik Elektromedik">Teknik Elektromedik</option>
          <option value="S1 Teknologi Laboratorium Medis">S1 Teknologi Laboratorium Medis</option>
          <option value="D4 Teknologi Laboratorium Medis">D4 Teknologi Laboratorium Medis</option>
          <option value="Manejemen Informasi Kesehatan">Manejemen Informasi Kesehatan</option>
          <option value="Psikologi">Psikologi</option>
          <option value="Bisnis Digital">Bisnis Digital</option>
          <option value="Informatika">Informatika</option>
          <option value="Hubungan Internasional">Hubungan Internasional</option>
          <option value="Hukum">Hukum</option>
          <option value="Administrasi Niaga">Administrasi Niaga</option>
          <option value="Administrasi Negara">Administrasi Negara</option>
        </select>
      </div>

       <!-- Pendanaan (Dropdown) -->
       <div class="mb-3">
        <label for="pendanaan" class="form-label">Pendanaan</label>
        <select class="form-select" name="pendanaan" id="pendanaan" required>
          <option value="" disabled selected>Pendanaan</option>
          <option value="Internal">Internal</option>
          <option value="Mandiri">Mandiri</option>
          <option value="Dalam Negeri Luar PT">Dalam Negeri Luar PT</option>
          <option value="Luar Negeri">Luar Negeri</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="dana_disetujui" class="form-label">Dana Disetujui</label>
        <input type="text" class="form-control" name="dana_disetujui" id="dana_disetujui" placeholder="Masukkan dana yang disetuji" required>
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
