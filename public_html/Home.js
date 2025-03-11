document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".carousel-slide");
    const dots = document.querySelectorAll(".dot");
    let currentIndex = 0;

    // Function to show the current slide
    const showSlide = (index) => {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
            dots[i].classList.toggle("active", i === index);
        });
    };

    // Auto-slide every 5 seconds
    const autoSlide = () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    };

    setInterval(autoSlide, 5000); // Adjust timing as needed

    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });
});

// slider kerja sama
let currentIndex = 0;
const slides = document.querySelectorAll(".custom-carousel-slide");
const totalSlides = slides.length;

const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");

function showSlide(index) {
    if (index >= totalSlides) {
        currentIndex = 0; // Jika melebihi, kembali ke slide pertama
    } else if (index < 0) {
        currentIndex = totalSlides - 1; // Jika lebih kecil dari 0, kembali ke slide terakhir
    }

    const carouselContainer = document.querySelector(
        ".custom-carousel-container"
    );
    carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`; // Pindahkan container sesuai dengan slide yang aktif
}

nextBtn.addEventListener("click", function () {
    currentIndex++;
    showSlide(currentIndex);
});

prevBtn.addEventListener("click", function () {
    currentIndex--;
    showSlide(currentIndex);
});

// Auto slide (Opsional)
setInterval(function () {
    currentIndex++;
    showSlide(currentIndex);
}, 5000); // Ganti gambar setiap 5 detik
