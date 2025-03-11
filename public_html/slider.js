let currentSlide = 0;
const slides = document.querySelectorAll(".slide");
const slideInterval = 3000; // Waktu antar slide (ms)

// Fungsi untuk mengganti slide
function changeSlide(direction) {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");
}

// Fungsi untuk menjalankan slider otomatis
function autoSlide() {
    changeSlide(1); // Pindah ke slide berikutnya
}

// Mulai slider otomatis
let autoSlideInterval = setInterval(autoSlide, slideInterval);

// Menambahkan interaksi manual (menghentikan sementara slider saat navigasi digunakan)
document.querySelector(".slider-nav.prev").addEventListener("click", () => {
    clearInterval(autoSlideInterval); // Hentikan slider otomatis
    changeSlide(-1); // Slide ke sebelumnya
    autoSlideInterval = setInterval(autoSlide, slideInterval); // Mulai ulang otomatis
});

document.querySelector(".slider-nav.next").addEventListener("click", () => {
    clearInterval(autoSlideInterval); // Hentikan slider otomatis
    changeSlide(1); // Slide ke berikutnya
    autoSlideInterval = setInterval(autoSlide, slideInterval); // Mulai ulang otomatis
});
