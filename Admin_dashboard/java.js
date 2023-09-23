// script.js
const slides = document.querySelectorAll('.slide');
const indicators = document.querySelectorAll('.indicator');
let currentIndex = 0;

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');

    indicators.forEach(indicator => indicator.classList.remove('active'));
    indicators[index].classList.add('active');
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

// Start the slider
showSlide(currentIndex);
setInterval(nextSlide, 2000); // Change slide every 2 seconds


