<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembaga Penelitian dan Pengabdian Masyarakat</title>
    <link rel="stylesheet" href="LPM.css">
    <link rel="icon" type="image/png" href="Image/Unbi.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-brand">Universitas Bali Internasional</div>
            <ul class="navbar-menu">
                <li><a href="/">Beranda</a></li>
                <li><a href="">Penelitian</a>
                    <ul class="submenu">
                        <li><a href=" https://forms.gle/3gns7THp6SF17cjD9">proposal penelitian</a></li>
                        <li><a href="https://forms.gle/6jvYFRPByu5cUcQ88">kemajuan penelitian</a></li>
                        <li><a href=" https://forms.gle/bi1ABZrHWRa6VRou9">laporan akhir penelitian</a></li>
                        <li><a href="https://forms.gle/KERxzLuh7q8QGBA59">revew penelitian</a></li>
                        <li><a href="https://forms.gle/KERxzLuh7q8QGBA59"></a></li>
                    </ul>
                </li>
                <li><a href="">Pengabdian</a>
                    <ul class="submenu">
                        <li><a href="https://forms.gle/m3SYspcNaiK67gdN7">pengajuan proposal</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfQbzlTLwR5AKMoK6QExlwbLcdVXTPtSK2Q2N_FB9R30Gc3yA/viewform?usp=dialog">laporan akhir</a></li>
                        <li><a href="Pengumuman/Panduan Penelitian UNBI.pdf" target="_blank">panduan penelitian</a></li>
                        <li><a href="Pengumuman/Panduan Penelitian Internasional UNBI.pdf" target="_blank">panduan penelitian internasional</a></li>
                    </ul>
                </li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>
    </nav>


    <!-- Header Section -->
    <header class="header">
        <div class="header-content">
            <h1>Lembaga Penelitian dan Pengabdian Masyarakat</h1>
            <p>Meningkatkan mutu pendidikan dengan komitmen dan inovasi terbaik.</p>
            <a href="#card-section" class="cta-btn">Jelajahi Sekarang</a>
        </div>
    </header>

    <!-- Slider Section -->
    <section class="slider">
        <div class="slider-container">
            <div class="slide active">
                <img src="Image/pp.jpg" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="Image/far.jpg" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="Image/Aula.jpg" alt="Slide 3">
            </div>
            <!-- Navigation Arrows -->
            <div class="slider-nav prev" onclick="changeSlide(-1)">&#10094;</div>
            <div class="slider-nav next" onclick="changeSlide(1)">&#10095;</div>
        </div>
    </section>

    <!-- Card Panel Section -->
    <section id="card-section" class="card-panel">
        <div class="card">
            <img src="Image/eva.jpg" alt="Berita">
            <h2>Pengumuman</h2>
            <p>Ikuti kabar terbaru dari Universitas Bali Internasional.</p>
            <a href="/pengumuman" class="btn">Selengkapnya</a>
        </div>
        <div class="card">
            <img src="Image/2D.png" alt="Pengumuman">
            <h2>Berita Kegiatan</h2>
            <p>Informasi Kegiatan Pengabdian Universitas Bali Internasional</p>
            <a href="/BeritaLP2M" class="btn">Selengkapnya</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Universitas Bali Internasional. Dibangun dengan dedikasi tinggi.</p>
    </footer>

    <script src="slider.js"></script>
</body>
</html>
