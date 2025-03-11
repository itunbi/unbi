<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Jika tidak ada session username, redirect ke index.php
    header("Location: index.php");
    exit;
}

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lp2m-unbi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data berdasarkan ID
$id = $_POST['id'];
$query = "SELECT * FROM pengajuan_penelitian WHERE id = '$id'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data</title>
</head>
<body>
<div class="container mt-5">
    <h3>Edit Data</h3>
    <form method="POST" action="update_pengajuan.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?php echo $row['nama_dosen']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="judul_penelitian" class="form-label">Judul Penelitian</label>
            <input type="text" class="form-control" id="judul_penelitian" name="judul_penelitian" value="<?php echo $row['judul_penelitian']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $row['tahun']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="program_studi" class="form-label">Program Studi</label>
            <input type="text" class="form-control" id="program_studi" name="program_studi" value="<?php echo $row['program_studi']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="pendanaan" class="form-label">Pendanaan</label>
            <input type="text" class="form-control" id="pendanaan" name="pendanaan" value="<?php echo $row['pendanaan']; ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="rekap-pengajuan-proposal.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
