<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrasi Rumah Sakit</title>
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


    <link rel="stylesheet" href="Tamplate/ARS.css">   
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
      <h5>“Mengembangkan Keilmuan Administrasi Rumah Sakit Yang <span>Professional,
        Berbudaya Dan Unggul di Bidang Digital Administration </span> Nasional Serta
        Internasional Pada Tahun 2035”
      </h5>
      <br>
        <h3>MISI</h3>
        <h5>1. Menyelenggarakan pendidikan administrasi rumah sakit yang menghasilkan
               lulusan yang professional, berbudaya dan unggul di bidang digital
               administration berskala nasional dan internasional.<br>
            2. Menyelenggarakan dan mengembangkan penelitian di bidang administrasi
               rumah sakit dan digital administration yang bermanfaat bagi kepentingan
               keilmuan, masyarakat dan bangsa.<br>
            3. Menyelenggarakan kegiatan pengabdian kepada masyarakat pada bidang
               administrasi rumah sakit dan digital administration berdasarkan kebutuhan
               masyarakat.<br>
            4. Melakukan implementasi kerjasama yang berkesinambungan dalam
               peningkatan mutu Tri Dharma Perguruan Tinggi bidang administrasi rumah
               sakit.<br>
        </h5>
      <div class="program-label">Administrasi Rumah Sakit</div>
      <p>
        Data dari Kementerian Kesehatan Republik Indonesia pada tahun 2023, terdapat
        3155 rumah sakit di Indonesia yang terdiri dari 2.636 Rumah Sakit Umum (RSU) dan 519
        Rumah Sakit Khusus (RSK), serta jumlah Puskesmas tercatat sebanyak 10.180 di seluruh
        Indonesia. Fasilitas pelayanan kesehatan tersebut membutuhkan tenaga profesional dalam
        pengelolaannya salah satunya adalah Sarjana Administrasi Rumah Sakit. Selain itu, untuk
        mengantisipasi tuntutan masyarakat akan mutu pelayanan kesehatan baik di rumah sakit
        maupun fasilitas pelayanan kesehatan lainnya yang semakin meningkat, maka fasilitas
        pelayanan kesehatan berkewajiban untuk meningkatkan mutu pelayanan melalui
        pemenuhan berbagai standar, salah satunya adalah sumber daya manusia yang baik dari
        segi kualitas, kuantitas maupun kompetensi.</p>
    </div>
    <div class="right-section">
      <div class="badge">
        <img src="Image/1. ARS.jpg" alt="Badge Terakreditasi">
      </div>
    </div>
  </div>

<section class="career-section">
<div class="career-container">
<div class="career-left">
  <img src="Image/fhd.JPG" alt="Career Image">
</div>
<div class="career-right">
  <h2>PROYEKSI KARIER</h2>
  <ul>
    <li>&gt; Kementrian Kesehatan</li>
    <li>&gt; DInas Kesehatan</li>
    <li>&gt; Evaluator Internal</li>
    <li>&gt; Asisten konsultan</li>
    <li>&gt; Rumah Sakit</li>
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