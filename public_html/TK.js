// Function to check if element is in the viewport
function checkIfInView() {
    const elements = document.querySelectorAll(".berita");
    elements.forEach((el) => {
        const rect = el.getBoundingClientRect();
        if (rect.top <= window.innerHeight && rect.bottom >= 0) {
            el.classList.add("show"); // Menambahkan class 'show' ketika elemen terlihat
        }
    });
}

// Scroll event untuk menyembunyikan navbar
let lastScrollTop = 0;
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", function () {
    let currentScroll =
        window.pageYOffset || document.documentElement.scrollTop;
    if (currentScroll > lastScrollTop) {
        // Scroll ke bawah, sembunyikan navbar
        navbar.classList.add("hidden");
    } else {
        // Scroll ke atas, tampilkan navbar
        navbar.classList.remove("hidden");
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;

    // Memeriksa elemen yang ada di viewport untuk animasi
    checkIfInView();
});
