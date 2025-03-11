<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen Informasi Kesehatan</title>
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


    <link rel="stylesheet" href="Tamplate/Mikes.css">  
    <style>
      p span{
        font-style: italic;
        font-weight: bold;
      }
    </style> 
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
      <h5>
        “Menjadi Program Studi Manajemen Informasi Kesehatan yang menghasilkan Lulusan
        yang Profesional, Unggul, dalam Berbudaya dalam Informatika Kesehatan Masyarakat”
      </h5>
      <br>
        <h3>MISI</h3>
        <h5>1. Menyelenggarakan pendidikan MIKES yang menghasilkan lulusan Sarjana Manajemen
          Informasi kesehatan yang profesional, unggul, dan berbudaya dalam Informatika
          Kesehatan Masyarakat. <br>
          2. Menyelenggarakan dan mengembangkan penelitian MIKES dan informatika kesehatan
          masyarakat yang tepat guna dan bermanfaat bagi derajat kesehatan masyarakat. <br>
          3. Menyelenggarakan pengabdian masyarakat sesuai dengan perkembangan dunia MIKES
          dan informatika kesehatan masyarakat<br>
        </h5>
      <div class="program-label">Manajemen Informasi Kesehatan</div>
      <p>
        Informatika Kesehatan Masyarakat merupakan Penerapan ilmu komputer dan teknologi informasi
secara sistematis dalam praktek, penelitian dan pembelajaran kesehatan masyarakat.
<span>“The systematic application of information and computer science and technology to public
health practice, research, and learning”.</span>
Berkembangnya teknologi saat ini pada teknologi industri 4.0 sehingga adanya literasi baru
meliputi literasi data, literasi teknologi, dan literasi manusia yang membuat masyarakat mengalami
transisi dari offline ke online dalam pemanfaatan IT pun meningkat termasuk di bidang kesehatan
untuk mengumpulkan, mengolah, menganalisis, menyajikan, dan menyimpan Data Kesehatan
dengan cepat, tepat, dan akurat untuk akses pelayanan kesehatan kepada Masyarakat.</p>
    </div>
    <div class="right-section">
      <div class="badge">
        <img src="Image/4. MIKES.jpg" alt="Badge Terakreditasi">
      </div>
    </div>
  </div>

<section class="career-section">
<div class="career-container">
<div class="career-left">
  <img src="Image/Mikes2.JPG" alt="Career Image"> <!-- tunggu foto -->
</div>
<div class="career-right">
  <h2>PROYEKSI KARIER</h2>
  <ul>
    <li>&gt; Dinas Kesehatan</li>
    <li>&gt; Puskesmas</li>
    <li>&gt; Auditor Coding klinis</li>
    <li>&gt; Analisis Data Kesehatan</li>
    <li>&gt; Enterpreneurship</li>
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