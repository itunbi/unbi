<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informatika</title>
    <link rel="icon" type="image/png" href="Image/Unbi.png">

    <!-- Fonts -->

    <!-- nato sans mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100..900&display=swap" rel="stylesheet">

    <!-- crimson pro -->    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Noto+Sans+Mono:wght@100..900&display=swap" rel="stylesheet">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <link rel="stylesheet" href="Tamplate/IF.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('Image/Unbi.png') }}" alt="Logo" width="70" height="70">
            <span>Universitas Bali Internasional</span>
        </div>
        <ul class="navbar-nav">
            <!-- Other Menu Items -->
            <li><a href="/">Home</a></li>
            <li><a href="/Tentang Kami">Tentang Kami</a></li>
            <li><a href="/Kehidupan Kampus">Kehidupan Kampus</a></li>
            <!-- Dropdown Fakultas -->
            <li class="dropdown">
                <a href="#">Lembaga</a>
                <div class="dropdown-menu">
                    <a href="/LP3M">LP3M</a>
                    <a href="/LP2M">LP2M</a>
                </div>
            </li>
            <li><a href="https://pmb.unbi.ac.id/">Pendaftaran</a></li>
        </ul>
    </nav>
<!-- hero start -->
<section class="hero" id="home ">
</section>

<div class="container">
    <div class="left-section">
      <h3>VISI</h3>
      <h5>MENJADI PROGRAM STUDI INFORMATIKA YANG BEREPUTASI
        INTERNASIONAL, PROFESIONAL, UNGGUL, DAN BERBUDAYA PADA BIDANG
        SOFTWARE ENGINEERING DAN SOFT COMPUTING PADA TAHUN 2035
      </h5>
      <br>
        <h3>MISI</h3>
        <h5>1. MENYELENGGARAKAN PENDIDIKAN INFORMATIKA SECARA
          PROFESIONAL BERBASIS KOMPETENSI YANG UNGGUL DI BIDANG
          SOFTWARE ENGINEERING DAN SOFT COMPUTING UNTUK 
          MENGHASILKAN LULUSAN BERKOMPETEN YANG MAMPU BERSAING
          SECARA NASIONAL MAUPUN INTERNASIONAL.<br>
          2. MENGHASILKAN KEGIATAN PENELITIAN UNGGULAN DI BIDANG
          INFOKOM DENGAN MAHASISWA YANG BERMANFAAT BAGI
          MASYARAKAT, PEMERINTAH DAN DUNIA USAHA.<br>
          3. MENYELENGGARAKAN KEGIATAN PENGABDIAN MASYARAKAT DI
          BIDANG INFOKOM MELALUI KEILMUAN DENGAN KETERLIBATAN
          MAHASISWA DAN AKTIF DALAM MENDUKUNG KEARIFAN BUDAYA
          LOKAL<br>
        </h5>
      <div class="program-label">Informatika</div>
      <p>
        Program Studi Informatika di Universitas Bali Internasional (UNBI) menawarkan pendidikan yang berfokus pada pengembangan sistem berbasis komputer. Mahasiswa yang lulus dari program ini akan mendapatkan gelar Sarjana Komputer (S.Kom). Program ini memiliki beberapa keunggulan utama, termasuk pemrograman di mana mahasiswa akan mempelajari berbagai bahasa pemrograman dan teknik pengembangan perangkat lunak, kecerdasan buatan yang mencakup studi tentang algoritma dan aplikasi kecerdasan buatan, serta jaringan komputer di mana mahasiswa akan belajar tentang desain, implementasi, dan manajemen jaringan komputer. Lulusan dari program ini memiliki peluang karir yang luas di berbagai industri, termasuk rumah sakit, perhotelan, industri jasa dan manufaktur, serta memiliki kemampuan untuk berwirausaha secara mandiri.
        </p>
    </div>
    <div class="right-section">
      <div class="badge">
        <img src="Image/A IF.jpeg" alt="Badge Terakreditasi">
      </div>
    </div>
  </div>

<section class="career-section">
<div class="career-container">
<div class="career-left">
  <img src="Image/IF.JPG" alt="Career Image">
</div>
<div class="career-right">
  <h2>PROYEKSI KARIER</h2>
  <ul>
    <li>&gt; Pemrograman Komputer</li>
    <li>&gt; Cyber Security Analys</li>
    <li>&gt; Data Scientist</li>
    <li>&gt; Web Developer</li>
    <li>&gt; Konstultan IT</li>
  </ul>
</div>
</div>
</section>
<footer class="footer">
  <div class="footer-container">
    <!-- Column 1 -->
    <div class="footer-column">
      <h3>Universitas Bali Internasional</h3>
      <p>
        Desain Web menggunakan teknologi responsive, sehingga tetap nyaman diakses dari berbagai perangkat.
      </p>
      <div class="social-icons">
        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-link"><i class="fab fa-pinterest"></i></a>
      </div>
    </div>
    
    <!-- Column 2 -->
    <div class="footer-column">
      <h3>Link Kemdikbud</h3>
      <ul>
        <li><a href="#">Spada Indonesia</a></li>
        <li><a href="#">PDDIKTI</a></li>
        <li><a href="#">Sister</a></li>
      </ul>
    </div>
    
    <!-- Column 3 -->
    <div class="footer-column">
      <h3>Official Website</h3>
      <ul>
        <li><a href="#">Browse Library</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">News & Blogs</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Tutorials</a></li>
      </ul>
    </div>
  </div>
  
  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>&copy; 2024 All Rights Reserved. By <a href="#">Universitas Bali Internasional</a></p>
  </div>
</footer>

</body>
</html>