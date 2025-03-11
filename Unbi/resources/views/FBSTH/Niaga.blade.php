<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ilmu Administrasi Niaga</title>
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


    <link rel="stylesheet" href="Tamplate/tamplate niaga.css">   
    <style>
      p span{
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
      <h5>“Menjadi Program Studi yang bereputasi unggul, professional, berkarakter,
        berbudaya, adaptasi teknologi digital, dan berdaya saing internasional yang
        terfokus di bidang Keilmuan Administrasi Bisnis pada tahun 2035.”
      </h5>
      <br>
        <h3>MISI</h3>
        <h5>1. Menyelenggarakan pendidikan di bidang Ilmu Administrasi Niaga yang
            profesional dan berkualitas internasional.<br>
            2. Menghasilkan penelitian unggulan di bidang Ilmu Administrasi Niaga yang
            inovatif, serta bermanfaat bagi masyarakat, pemerintah, dan dunia usaha.<br>
            3. Menyelenggarakan kegiatan pengabdian kepada masyarakat di bidang
            Ilmu Administrasi Niaga yang berlandaskan IPTEK dan kearifan lokal.<br>
            4. Mengembangkan, menyebarluaskan, dan menerapkan ilmu pengetahuan di
            bidang Ilmu Administrasi Niaga bagi kemajuan masyarakat, pemerintah
            dan dunia usaha.<br>
            5. Menghasilkan lulusan di bidang Ilmu Administrasi Niaga yang visioner,
            berjiwa wirausaha, beradaptasi terhadap perkembangan teknologi digital,
            serta berintegritas dan kapabilitas.<br>
            6. Mengembangkan kolaborasi dan kerjasama di bidang Administrasi Niaga
            dengan berbagai stakeholders.<br>
        </h5>
      <div class="program-label">Ilmu Administrasi Niaga</div>
      <p>
        Program Studi Ilmu Administrasi Niaga Memiliki Fokus dalam
pengembangan bisnis di Bidang UMKM (Usaha Mikro Kecil dan
Menengah) dengan keunggulan<span> SMART (Specific, Measurable,
Achievable, Relevant,and Timely) Business Development.</span><br> <br>
Pendekatan ini mendukung UMKM beradaptasi dengan era digital melalui inovasi, peningkatan daya saing, dan perluasan pasar berbasis manajemen strategis. Lulusan diharapkan memiliki integritas tinggi, jiwa wirausaha, pemikiran strategis dan inovatif, kemampuan analitis, serta adaptasi terhadap teknologi dan lingkungan global yang kompetitif.
</p>
    </div>
    <div class="right-section">
      <div class="badge">
        <img src="Image/mural.jpg" alt="Badge Terakreditasi">
      </div>
    </div>
  </div>

<section class="career-section">
<div class="career-container">
<div class="career-left">
  <img src="Image/pakar.jpg" alt="Career Image">
</div>
<div class="career-right">
  <h2>PROYEKSI KARIER</h2>
  <ul>
    <li>&gt; Business Manager</li>
    <li>&gt; Entrepreneur</li>
    <li>&gt; Digital Marketer</li>
    <li>&gt; Financial Analyst</li>
    <li>&gt; Human Resource
        Manager</li>
    <li>&gt; Tour Consultant</li>
    <li>&gt; Consultant in Business
        Development</li>
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