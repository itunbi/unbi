<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kesehatan Keselamatan Kerja</title>
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


    <link rel="stylesheet" href="Tamplate/K3.css">  
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
      <h5>Menjadi Program Studi yang Profesional, Unggul dan Berbudaya dalam bidang K3
        Pariwisata di tingkat Nasional dan Internasional pada Tahun 2035.
      </h5>
      <br>
        <h3>MISI</h3>
        <h5>1. Menyelenggarakan pendidikan yang bermutu dengan kekhususan bidang K3 Pariwisata.<br>
            2. Menyelenggarakan dan mengembangkan penelitian bidang kesehatan yang bermanfaat bagi
               kesehatan masyarakat di bidang K3 Pariwisata.<br> 
            3. Menyelengarakan pendidikan kesehatan yang mampu melaksanakan kegiatan pengabdian dan
               pelayanan kesehatan masyarakat di bidang K3 Pariwisata.<br> 
            4. Menyelenggarakan tata kelola manajemen pendidikan yang profesional dan terbuka serta
               meningkatkan potensi sumber daya secara optimal, efektif dan efisien.<br> 
        </h5>
      <div class="program-label">Kesehatan Keselamatan Kerja</div>
      <p>
        Hadirnya Program Studi K3 Fakultas Ilmu-Ilmu Kesehatan Universitas Bali Internasional
untuk menjawab tantangan kedepan bagaimana sumber daya manusia dapat bersaing di kancah
nasional maupun internasional. Banyaknya industri kerja pada era ini diharapkan mampu
meningkatkan keterampilan dan keahliannya dalam bekerja. Bidang K3 sebagai bidang yang
mengatur manajemen dan sumber daya manusia, sehingga para pekerja dapat bekerja secara aman,
nyaman, sehat dan produktif. Menurut ILO (International Labour Organization) setiap tahunnya
ada 2,78 juta pekerja yang meninggal karena kecelakaan di tempat kerja atau terdampak penyakit
dari pekerjaannya tersebut.</p>
    </div>
    <div class="right-section">
      <div class="badge">
        <img src="Image/A K3.jpeg" alt="Badge Terakreditasi">
      </div>
    </div>
  </div>

<section class="career-section">
<div class="career-container">
<div class="career-left">
  <img src="Image/KKK.JPG" alt="Career Image">
</div>
<div class="career-right">
  <h2>PROYEKSI KARIER</h2>
  <ul>
    <li>&gt; K3 Rumah Sakit</li>
    <li>&gt; Perusahaan Jasa K3</li>
    <li>&gt; Dinas Kesehatan</li>
    <li>&gt; Pemerintah</li>
    <li>&gt; Enterpreneur</li>
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