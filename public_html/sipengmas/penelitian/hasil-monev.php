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
            <h2 class="mb-4">Form Review Proposal <br> Penelitian Dosen</h2>
            

    <!-- Upload Button -->
    <form action="upload_excel_monev.php" method="POST" enctype="multipart/form-data">
    <div class="upload-button-container">
      <label for="file"><i class="bi bi-upload"></i>Pilih File Excel</label>
      <input type="file" name="file" id="file" accept=".xls,.xlsx">
      <!-- Tombol Submit -->
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
    
    <!-- Download Button -->
    <div class="upload-button-container">
       <a href="path/to/your/file.pdf" download class="btn btn-danger btn-lg">
            <i class="bi bi-download"></i> Download Template Excel
        </a>
    </div>

    <!-- Form -->
    <form action="proses_hasil_monev.php" method="POST">
      
      <!-- Nama Dosen -->
      <div class="mb-3">
        <label for="nama_dosen" class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Masukkan nama dosen" required>
      </div>

  
      <!-- Skema Hibah-->
      <div class="mb-3">
        <label for="skema_hibah" class="form-label">Skema Hibah</label>
        <input type="text" class="form-control" name="skema_hibah" id="skema_hibah" placeholder="Masukkan skema hibah" required>
      </div>

       <!-- Nama review-->
       <div class="mb-3">
        <label for="nama_review" class="form-label">Nama Reviewer</label>
        <input type="text" class="form-control" name="nama_review" id="nama_review" placeholder="Masukkan judul penelitian" required>
      </div>

      <!-- Hasil Review -->
      <div class="mb-3">
        <label for="hasil_review" class="form-label">Hasil Review </label>
        <textarea class="form-control" name="hasil_review" id="hasil_review" rows="5" placeholder="Masukkan teks disini" required></textarea>
      </div>

      <!-- tindak lanjut -->
      <div class="mb-3">
        <label for="tindak_lanjut" class="form-label">Tindak Lanjut</label>
        <input type="text" class="form-control" name="tindak_lanjut" id="pendanaan" placeholder="Masukkan Hasil Tindak Lanjut" required>
      </div>

      <!-- File Upload -->
      <div class="mb-3">
                <label for="link_file" class="form-label">Masukkan URL (Link)</label>
                <input type="url" class="form-control" name="link_file" id="link_file" placeholder="Masukkan URL" required>
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
