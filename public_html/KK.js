const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const prevButton = document.querySelector(".slider-btn.prev");
const nextButton = document.querySelector(".slider-btn.next");

let currentIndex = 0;
const slideIntervalTime = 1500; // 1,5 detik
let slideInterval;

function updateSliderPosition() {
    const slideWidth = slides[0].clientWidth;
    slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

function showPrevSlide() {
    currentIndex = currentIndex > 0 ? currentIndex - 1 : slides.length - 1;
    updateSliderPosition();
}

function showNextSlide() {
    currentIndex = currentIndex < slides.length - 1 ? currentIndex + 1 : 0;
    updateSliderPosition();
}

// Set interval for automatic sliding
function startAutoSlide() {
    slideInterval = setInterval(() => {
        showNextSlide();
    }, slideIntervalTime);
}

function stopAutoSlide() {
    clearInterval(slideInterval);
}

// Add event listeners to buttons
prevButton.addEventListener("click", () => {
    stopAutoSlide();
    showPrevSlide();
    startAutoSlide();
});

nextButton.addEventListener("click", () => {
    stopAutoSlide();
    showNextSlide();
    startAutoSlide();
});

// Update slider position on window resize
window.addEventListener("resize", updateSliderPosition);

// Start the slider on page load
startAutoSlide();
