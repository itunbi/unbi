<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembaga Penjaminan Mutu</title>
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
                <li><a href="">Tentang Lembaga</a>
                    <ul class="submenu">
                        <li><a href="/GBK">Garis Besar Kebijakan</a></li>
                        <li><a href="/SPMI">Manajemen SPMI</a></li>
                        <li><a href="http://lp3m.unbi.ac.id/uploads/media/images/Screenshot%202023-05-04%20at%2010.40.48.png">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSN4VIGXwiiIBYGHNZTw7U-Or6KHigqzp1Fy1IHeazllIJlKtzkkhy8Guy0blYZGheiohGEMnK2LORS/pubhtml?gid=995579710&amp;single=true&amp;widget=true&amp;headers=false">Akreditasi</a></li>
                <li><a href="">Jaminan Mutu</a>
                    <ul class="submenu">
                        <li><a href="https://drive.google.com/embeddedfolderview?id=1JCAmcOk7iEm34uG7MfA7ehFaC9esBNJe#grid">Buku SPMI</a></li>
                        <li><a href="https://docs.google.com/spreadsheets/u/3/d/e/2PACX-1vQumQOrw61dlla84TFPAhfXtyi-tIy6VTMbwPvhoebN8QlKTbD04xdvy1KGwTzv1G9YLSbWF8TdEb5C/pubhtml">SOP</a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRg0P9a-qn_rQdjz6W8CS_Hdt-tjNkkXtel4a7UQ7hKXQrAdmzOaR_jYwtXr_ukP16EzGwtj17RTrxJ/pubhtml">Formulir</a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSE9rF6J7zJf3UQc5yUzbUtSwFwOEXcxeL2YXXAWdVo9pQMbQIEZM-yiDb7Z3X6Kt1fck4_rnTMjNhR/pubhtml?gid=903361518&amp;single=true">Audit Mutu Internal</a></li>
                    </ul>
                </li>
                <li><a href="">Survei Kepuasan</a>
                    <ul class="submenu">
                        <li><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSMCMzXJTa5rWvlYJEOElXqbC8-qi5mjAocdOB14KihqYrCK0FLvYQnNXZVeiGSNZLTQUr8lvJYLBTW/pubhtml?gid=995579710&amp;single=true&amp;widget=true&amp;headers=false">Pedoman Survei</a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSKGUSo-D5Yi5TFi25JhGoh-ktOQ9MEeKKAxIT3lfz48Mn0pirctND5-oS9-h4L6DKoP0UELd85y34I/pubhtml?gid=995579710&amp;single=true&amp;widget=true&amp;headers=false">Laporan Survei</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="header">
        <div class="header-content">
            <h1>Lembaga Penjaminan Mutu</h1>
            <p>Meningkatkan mutu pendidikan dengan komitmen dan inovasi terbaik.</p>
            <a href="#card-section" class="cta-btn">Jelajahi Sekarang</a>
        </div>
    </header>

    <!-- Slider Section -->
    <section class="slider">
        <div class="slider-container">
            <div class="slide active">
                <img src="Image/LP3M.jpg" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="Image/LP3M2.jpg" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="Image/LP3M3.jpg" alt="Slide 3">
            </div>
            <!-- Navigation Arrows -->
            <div class="slider-nav prev" onclick="changeSlide(-1)">&#10094;</div>
            <div class="slider-nav next" onclick="changeSlide(1)">&#10095;</div>
        </div>
    </section>

    <!-- Card Panel Section -->
    <section id="card-section" class="card-panel">
        <div class="card">
            <img src="Image/eva.jpg" alt="Pengumuman">
            <h2>Pengumuman</h2>
            <p>Pengumuman terkait LP3M</p>
            <a href="/Pengumuman" class="btn">Selengkapnya</a>
        </div>
        <div class="card">
            <img src="Image/2D.png" alt="Berita">
            <h2>Berita</h2>
            <p>Ikuti kabar terbaru dari LP3M</p>
            <a href="/Berita" class="btn">Selengkapnya</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Universitas Bali Internasional. Dibangun dengan dedikasi tinggi.</p>
    </footer>

    <script src="slider.js"></script>
</body>
</html>
