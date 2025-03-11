<?php
// Koneksi ke database
$host = 'localhost';
$user = 'u495571968_lp2m_unbi';
$password = '!4:fC?qU1';
$dbname = 'u495571968_lp2m_unbi';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap filter tahun dari form
$tahun_filter = isset($_GET['tahun']) ? $_GET['tahun'] : '';

// Query untuk mengambil tahun unik (untuk dropdown)
$query_tahun = "SELECT DISTINCT tahun FROM data_pengabdian ORDER BY tahun DESC";
$result_tahun = $conn->query($query_tahun);

// Query untuk mengambil data penelitian sesuai filter
$query = "SELECT tahun, COUNT(*) as total 
          FROM data_pengabdian";
if ($tahun_filter) {
    $query .= " WHERE tahun = $tahun_filter";
}
$query .= " GROUP BY tahun";

$result = $conn->query($query);

$data_chart = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data_chart[] = $row;
    }
}

// Konversi data ke format JSON untuk digunakan di Chart.js
$data_json = json_encode($data_chart);
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
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
              <li><a href="pengajuan-proposal">Pengajuan Proposal</a></li>
              <li><a href="hasil-monev.php">Hasil Monev</a></li>
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
            <h2 class="mb-4">Laporan <br> Pengabdian Dosen </h2>
            <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="rekap_laporan_akhir.php">Data Pengabdian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rekap-monev.php">Hasil Penilaian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rekap-laporan-kemajuan.php">Laporan Akhir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


       

  <div class="container mt-5">
        <h2 class="text-center">Statistik PKM</h2>

        <!-- Filter Tahun -->
        <form method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <label for="tahun" class="form-label">Filter Tahun</label>
                    <select name="tahun" id="tahun" class="form-select">
                        <option value="">Semua Tahun</option>
                        <?php if ($result_tahun->num_rows > 0): ?>
                            <?php while ($row_tahun = $result_tahun->fetch_assoc()): ?>
                                <option value="<?php echo $row_tahun['tahun']; ?>" 
                                    <?php echo $tahun_filter == $row_tahun['tahun'] ? 'selected' : ''; ?>>
                                    <?php echo $row_tahun['tahun']; ?>
                                </option>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <!-- Chart -->
        <canvas id="chartPenelitian"></canvas>
    </div>

    <script>
        // Ambil data dari PHP
        const dataChart = <?php echo $data_json; ?>;

        // Olah data untuk Chart.js
        const labels = [...new Set(dataChart.map(item => `${item.program_studi} (${item.tahun})`))];
        const datasets = {};

        dataChart.forEach(item => {
            if (!datasets[item.skema_penelitian]) {
                datasets[item.skema_penelitian] = [];
            }
            datasets[item.skema_penelitian].push(item.total);
        });

        const data = {
            labels: labels,
            datasets: Object.keys(datasets).map((key, index) => ({
                label: key,
                data: datasets[key],
                backgroundColor: `rgba(${(index * 50) % 255}, ${(index * 100) % 255}, ${(index * 150) % 255}, 0.5)`,
                borderColor: `rgba(${(index * 50) % 255}, ${(index * 100) % 255}, ${(index * 150) % 255}, 1)`,
                borderWidth: 1
            }))
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Statistik Pengabdian Berdasarkan Tahun'
                    }
                }
            },
        };

        // Render chart
        const chartPenelitian = new Chart(
            document.getElementById('chartPenelitian'),
            config
        );
    </script>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
