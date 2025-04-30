<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="Image/Unbi.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"  />
    <link rel="stylesheet" href="{{ asset('Home.css') }}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"  />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Lobster&display=swap" />
    <link href="https://db.onlinewebfonts.com/c/c07d5c6528b6cc0eac08afd7a3199657?family=TrajanPro-Regular" />
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Universitas Bali Internasional</title>
  </head>
  <body>

    <div id="customPopup" class="popup-overlay">
      <div class="popup-box">
          <div class="popup-header">
              <h5>📢 Informasi Unbi Terkini</h5>
              <span class="popup-close" onclick="closePopup()">×</span>
          </div>
          <div class="popup-body">
              <img src="Image/akreditasi BAN-PT.jpg" alt="Gambar Info" class="popup-img">
              <div class="popup-info">
                  <h4>Selamat Atas Terakreditasi "Baik Sekali" Universitas Bali Internasional</h4>
                  <p>Universitas Bali Internasional</p>
                  <a href="https://pmb.unbi.ac.id/" class="popup-btn">Daftar Sekarang</a>
              </div>
          </div>
      </div>
    </div>
   
    <nav class="navbar navbar-expand-lg fixed-top mt-0">
      <div class="container-fluid">
    
          <div class="navbar-logo">
              <img src="Image/Unbi.png" alt="Logo" width="70" height="70">
              <span style="padding-right: 20px">Universitas Bali Internasional</span>
          </div>
      


      <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0 w-100">
          <li class="nav-item"><a class="nav-link" href="/TentangKami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="/KehidupanKampus">Kehidupan Kampus</a></li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#">Fakultas</a>
              <ul class="dropdown-menu">

                  <!-- Dropdown FBSTH -->
                  <li class="dropdown">
                      <a href="/FBSTH">FBSTH</a>
                      <ul class="dropdown-menu">
                          <li><a href="/BIDI">Bisnis Digital</a></li>
                          <li><a href="/HI">Hubungan Internasional</a></li>
                          <li><a href="/Hukum">Hukum</a></li>
                          <li><a href="/Informatika">Informatika</a></li>
                          <li><a href="/Negara">Ilmu Administrasi Negara</a></li>
                          <li><a href="/Niaga">Ilmu Administrasi Niaga</a></li>
                          <li><a href="/Psikologi">Psikologi</a></li>
                      </ul>
                  </li>
                  <!-- Dropdown FIIK -->
                  <li class="dropdown">
                      <a href="/FIIK">FIIK</a>
                      <ul class="dropdown-menu">
                          <li><a href="/ARS">Administrasi Rumah Sakit</a></li>
                          <li><a href="/D4TLM">D4 Teknologi Laboratorium Medik</a></li>
                          <li><a href="/TLM">Teknologi Laboratorium Medik</a></li>
                          <li><a href="/TEM">Teknik Elektromedik</a></li>
                          <li><a href="/Farmasi">Farmasi</a></li>
                          <li><a href="/Fisioterapi">Fisioterapi</a></li>
                          <li><a href="/K3">Kesehatan Keselamatan Kerja</a></li>
                          <li><a href="/Mikes">Manajemen Informasi Kesehatan</a></li>
                      </ul>
                  </li>
              </ul>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#">Lembaga</a>
              <div class="dropdown-menu">
                  <a href="/LP3M">LP3M</a>
                  <a href="/LP2M">LP2M</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="">Kuisioner</a>
              <div class="dropdown-menu">
                  <a href="https://forms.gle/2ma2QFbjiUWuQc6UA">TENAGA KEPENDIDIKAN</a>
                  <a href="https://forms.gle/8GeYsM12KkxnhugF9">SARANA PRASARANA</a>
                  <a href="https://forms.gle/5cYo6d7cvkFQW4G49">PENGELOLA</a>
                  <a href="https://forms.gle/s212dD2uqgWcysL66">TENAGA PENDIDIK</a>
              </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="https://pmb.unbi.ac.id/">Pendaftaran</a></li>
      </ul>

      </div>
      </div>
  </nav>
   
    <!-- hero start -->
    <section class="hero" id="home ">
    </section>
      
    
    <!--Awal Image Slider-->
    <div class="container-fluid">
    <div class="card text-center">  
  


    <div id="animatedCarousel" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#animatedCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#animatedCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#animatedCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img class="card-image-top" src="{{ asset('Image/image1.jpg') }}" style="width: 100%;" height="580">
          <div class="carousel-caption text-start">
            <h1 class="text-white">Welcome to Our Website</h1>
            <p class="text-white">Selamat datang di website Universitas Bali Internasional</p>
            <a href="#" class="btn-read-more">Baca Selengkapnya</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="width: 100%">
          <img class="card-image-top" src="{{ asset('Image/image2.jpg') }}" style="width: 100%" height="580">
          <div class="carousel-caption text-center">
            <h1 class="text-white">Kuliah Hebat Karir Melesat</h1>
            <p class="text-white">Temukan kuliah yang tepat untuk masa depanmu</p>
            <a href="#" class="btn-read-more">Baca Selengkapnya</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img class="card-image-top" src="{{ asset('Image/image3.jpg') }}" style="width: 100%" height="580">
          <div class="carousel-caption text-end">
            <h1 class="text-white">gabung bersama kami</h1>
            <p class="text-white">Mari Menjadi Bagian Dari Kami Di Universitas Bali Internasional</p>
            <a href="#" class="btn-read-more">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#animatedCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#animatedCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--Akhir Imagae Slider-->

    </div>
  </div>

    <!--Card Halaman Promosi-->
    <div id="custom-container" class="container-fluid">
      <div class="card" >
        <div class="row">
          <div class="col-md-3" data-aos="fade-right" >
            <a a href="#" target="_blank" class="image-container" >
            <img src="Image/promo1.png" class="img-fluid rounded-start" alt="..." /></a>
          </div>
          <div class="col-md-9">
            <div class="card-body" data-aos="fade-left" data-aos-delay="300">
              <h3 class="card-title">TEMUKAN PENDIDIKAN BERKUALITAS DI UNBI</h3>
              <p class="card-text">
                Di Universitas Bali Internasional, kami percaya bahwa pendidikan adalah langkah pertama untuk meraih masa depan yang gemilang. Dengan fasilitas modern, dosen berkompeten, dan kurikulum yang selalu diperbarui, kami
                mempersiapkan mahasiswa untuk menjadi profesional unggul di bidangnya. Kami menawarkan berbagai program studi yang dirancang untuk mengasah keterampilan dan pengetahuan, sesuai dengan kebutuhan industri saat ini.

                <p>Bergabung dengan Universitas Bali Internasional berarti Anda akan merasakan pengalaman belajar yang dinamis dan inovatif. Kami menciptakan lingkungan yang mendukung perkembangan intelektual dan pribadi setiap
                mahasiswa. </p>
                
                <p>Selain itu, kami memiliki berbagai fasilitas seperti laboratorium canggih, ruang seminar modern, dan akses ke teknologi terbaru, yang memungkinkan Anda untuk belajar dan berinovasi dengan bebas. Kami tidak hanya
                fokus pada pendidikan lokal, tetapi juga pada persiapan mahasiswa untuk bersaing di pasar global. Universitas memiliki jaringan internasional yang luas, memungkinkan Anda untuk mendapatkan pengalaman belajar di luar negeri
                dan kesempatan magang di perusahaan global. Dengan pendekatan yang holistik dan peluang internasional, kami memastikan Anda siap menghadapi tantangan dunia kerja dan meraih kesuksesan global.
              </p>
            </p>
              <a href="#" class="btn btn-custom">DAFTAR DISINI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Card Halaman Promosi-->

    <!--Berita Utama-->
    <div class="container my-3">
      <!-- Heading Berita -->
      <h1 class="headline">Berita Terbaru</h1>
    </div>
    <!--Card Berita-->
    <div class="container">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
            <a href="#" target="_blank" class="image-container" >
              <img src="Image/Unggul.jpg" class="card-img-top" alt="...">
                </a>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h3 class="card-title">Unggul</h3>
              <p class="card-text">Universitas Bali Internasional (UNBI) dengan bangga mengumumkan bahwa Program Studi Sarjana Administrasi Rumah Sakit telah berhasil memperoleh akreditasi dengan peringkat “Unggul” dari Lembaga Akreditasi Mandiri Perguruan Tinggi Kesehatan Indonesia (LAM-PTKes). </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a href="#" class="btn btn-custom">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Berita 2-->
    <div class="container my-3">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100">
          <a href="#" target="_blank" class="image-container" >
            <img src="Image/image3.jpg" class="card-img-top" alt="...">
              </a>
          <div class="card-body">
            <h5 class="card-title">Pelantikan Rektor</h5>
            <p class="card-text">Denpasar (Atnews) - Prof. Dr. dr. I Made Bakta Sp.PD-KHOM kembali dilantik dan diambil sumpahnya menjadi Rektor Universitas Bali Internasional (UNBI) masa Bhakti 2023-2027 oleh Ketua Yayasan Anugrah Usadha Bali Dr. Drs. I Nyoman Gede Astina, M.Pd sesuai Surat Keutusan Nomor: 029/YYS ABHI/KEP/XI/2023 di kampus setempat Denpasar, Kamis, (9/12).</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
            <a href="#" target="_blank" class="image-container" >
          <img src="Image/image1.jpg" class="card-img-top" alt="...">
            </a>
          <div class="card-body">
            <h5 class="card-title">Acara Puncak Dies Natalis ke-8 Universitas Bali Internasional</h5>
            <p class="card-text">Universitas Bali Internatasional (UNBI) memasuki usia 8 tahun telah memiliki dua fakultas, yakni Fakultas Ilmu-ilmu Kesehatan (8 Program Studi) serta Fakultas Bisnis, Sosial, Teknologi dan Humaniora (7 Program Studi).</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="#" target="_blank" class="image-container" >
            <img src="Image/PPA.JPG" class="card-img-top" alt="...">
              </a>
          <div class="card-body">
            <h5 class="card-title">Menteri PPPA Bintang Puspayoga Ajak UNBI Dukung Percepatan Program Desa Ramah Perempuan dan Peduli Anak</h5>
            <p class="card-text">Menteri Pemberdayaan Perempuan dan Perlindungan Anak (PPPA) Republik Indonesia, I Gusti Ayu Bintang Darmawati yang akrab dipanggil Bintang Puspayoga mengajak Universitas Bali Internasional (UNBI) mendukung Bali memiliki Desa Ramah Perempuan dan Peduli Anak</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="#" target="_blank" class="image-container" >
            <img src="Image/FBSTH.jpg" class="card-img-top" alt="...">
              </a>
          <div class="card-body">
            <h5 class="card-title">Explora FBTSH Universitas Bali International</h5>
            <p class="card-text">Wakil Walikota Denpasar, Kadek Agus Arya Wibawa membuka secara resmi kegiatan Explora Fakultas Bisnis, Sosial, Teknologi dan Humaniora (FBTSH) Universitas Bali International di Aula Universitas Bali Internasional, Senin (22/4).</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-3">
      <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-custom" type="button">Lihat Berita Lainnya</button>
      </div>
    </div>
  </div>

 
    <!--Akhir Berita-->

    <!--Yuk Menjadi Bagian UNBI-->
    <div id="custom-container-1" class= "container-fluid">
      <h1 class="headline">Profil UNBI</h1>
      <div class="video-container">
        <iframe 
        src="https://www.youtube.com/embed/Nq0kC-KqAw8?si=pizGRjz7muG3YVDw"  
          title="YouTube video player" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>
    </div>
    <!--Akhir Yuk Menjadi Bagian UNBI-->

    <!--Pengumuman dan Agenda-->
    <div class="container my-3">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Pengumuman</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span> Inspirasi Mahasiswa: Seminar Pengembangan Karier di Era Digital,Kamis, 19 Desember 2024
                 Pukul 09.00 - 12.00 WITA, Aula Universitas Bali Internasional.</span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Pengumuman</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span>Workshop Penulisan Proposal PKM (Program Kreativitas Mahasiswa),
                 Sabtu, 14 Desember 2024,Pukul 08.30 - 12.30 WITA,Aula Universitas Bali Internasional</span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Pengumuman</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span>Diskusi Panel: Etika dan Teknologi dalam Era AI,Selasa, 17 Desember 2024,
                 pukul 13.00 - 15.30 WITA,Aula Universitas Bali Internasional</span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
       <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Pengumuman</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span>Lomba Debat Mahasiswa Nasional 2024, Minggu, 22 Desember 2024,
                 pukul 09.00 - selesai,Aula Universitas Bali Internasional</span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Agenda</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span>Workshop Penulisan Proposal PKM, Sabtu, 14 Desember 2024,
                 pukul 08.30 - 12.30 WITA, Membantu mahasiswa menyusun proposal PKM dengan panduan dari dosen pembimbing., Universitas Bali Internasional </span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
            <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Agenda</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span>Diskusi Panel: Etika dan Teknologi dalam Era AI, Selasa, 17 Desember 2024,
                 pukul 13.00 - 15.30 WITA, Membahas tantangan etis dan peluang dari penggunaan teknologi AI., Universitas Bali Internasional </span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
                  <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Agenda</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span>Pelatihan Dasar Desain Grafis dengan Canva, Rabu, 18 Desember 2024,
                 pukul 10.00 - 12.00 WITA, Pelatihan ini bertujuan meningkatkan keterampilan desain grafis mahasiswa., Lab Komputer Universitas Bali Internasional</span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
                        <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title-1">Agenda</h3>
            <a href="#" target="_blank" class="announcement-link"><p class="card-text">
              <span>Seminar Inspirasi Mahasiswa: Pengembangan Karier di Era Digital, Kamis, 19 Desember 2024,
                 pukul 09.00 - 12.00 WITA, Seminar tentang persiapan karier di era digital dengan pembicara profesional, Universitas Bali Internasional </span></p>
            </a></a>
            <a href="#" class="btn btn-custom">Lihat Lainnya</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
    <!--Akhir Pengumuman dan Agenda-->
<!-- Bootstrap Slider -->
<div id="custom-container-1" class= "container-fluid">
  <h1 class="headline">Kerjasama</h1>
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/SA.jpeg" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="Image/sama.jpeg" class="d-block w-100" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="Image/SA.jpeg" class="d-block w-100" alt="Image 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
  

    <!--Footer-->
    <footer class="footer-custom">
      <div class="container">
        <div class="row">
          <!-- Kolom 1 -->
          <div class="col-md-4 col-sm-12">
            <h5>About Us</h5>
            <p>
              Kami adalah institusi yang berdedikasi untuk memberikan pendidikan terbaik dan layanan unggulan kepada masyarakat.
            </p>
          </div>
          <!-- Kolom 2 -->
          <div class="col-md-4 col-sm-12">
            <h5>Contact</h5>
            <ul class="list-unstyled">
              <li>Email: <a href="mailto:info@example.com">unbi.ac.id</a></li>
              <li>Phone:  (0361) 4747770</li>
              <li>Address:  Jl. Seroja, Gang Jeruk, Kelurahan Tonja Denpasar Utara, Bali 80239</li>
            </ul>
          </div>
          <!-- Kolom 3 -->
          <div class="col-md-4 col-sm-12">
            <h5>Follow Us</h5>
            <ul class="list-unstyled">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>
        </div>
        <!-- Garis pembatas -->
        <div class="row footer-line">
          <div class="col text-center">
            <p class="mb-0">&copy; 2020 Universitas Bali Internasional. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
   
    <!--AKhir Footer-->
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
       AOS.init();
      function openPopup() {
    const popup = document.getElementById("customPopup");
    popup.style.display = "flex"; // Munculin dulu sebelum kasih animasi
    requestAnimationFrame(() => {
        popup.classList.remove("hide");
        popup.classList.add("show");
    });
}

function closePopup() {
    const popup = document.getElementById("customPopup");
    popup.classList.remove("show");
    popup.classList.add("hide");

    // Tunggu animasi selesai sebelum hide beneran
    setTimeout(() => {
        popup.style.display = "none";
        popup.classList.remove("hide");
    }, 400); // Sesuai durasi animasi CSS
}

// Popup otomatis muncul saat halaman selesai load
window.onload = function() {
    openPopup();
};

    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fether icon -->
    <script>
      feather.replace();
    </script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Inisialisasi feather icons
  feather.replace();
  
  // Elemen yang diperlukan
  const menuButton = document.getElementById('menu');
  const navMenu = document.getElementById('navMenu');
  const dropdowns = document.querySelectorAll('.dropdown');
  
  // Toggle sidebar
  menuButton.addEventListener('click', function(e) {
    e.preventDefault();
    navMenu.classList.toggle('show');
    document.body.style.overflow = navMenu.classList.contains('show') ? 'hidden' : '';
  });
  
  // Dropdown functionality for mobile
  dropdowns.forEach(function(dropdown) {
    const link = dropdown.querySelector('.nav-link');
    
    link.addEventListener('click', function(e) {
      if (window.innerWidth < 992) {
        e.preventDefault();
        e.stopPropagation();
        
        // Close other dropdowns
        dropdowns.forEach(function(otherDropdown) {
          if (otherDropdown !== dropdown) {
            otherDropdown.classList.remove('show');
          }
        });
        
        // Toggle current dropdown
        dropdown.classList.toggle('show');
      }
    });
  });
  
  // Close menu when clicking outside
  document.addEventListener('click', function(e) {
    if (window.innerWidth < 992) {
      if (!navMenu.contains(e.target) && !menuButton.contains(e.target)) {
        navMenu.classList.remove('show');
        document.body.style.overflow = '';
        
        // Close all dropdowns
        dropdowns.forEach(function(dropdown) {
          dropdown.classList.remove('show');
        });
      }
    }
  });
});
</script>

  </body>
</html>
