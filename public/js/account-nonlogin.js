const dropdown = document.querySelector('.dropdown');

dropdown.addEventListener('click', (event) => {
    event.stopPropagation(); 
    const content = dropdown.querySelector('.dropdown-content');
    content.classList.toggle('show');
});

document.addEventListener('click', () => {
    const content = dropdown.querySelector('.dropdown-content');
    if (content.classList.contains('show')) {
        content.classList.remove('show');
    }
});

/*--------------------------------------------*/

let currentSlideIndex = 0;
showSlide(currentSlideIndex);

function changeSlide(step) {
    currentSlideIndex += step;
    showSlide(currentSlideIndex);
}

function showSlide(index) {
    const slides = document.querySelectorAll(".slide");
 
    if (index >= slides.length) {
        currentSlideIndex = 0;
    }
    if (index < 0) {
        currentSlideIndex = slides.length - 1;
    }
    
    slides.forEach(slide => {
        slide.style.display = "none";
    });
    
    slides[currentSlideIndex].style.display = "block";
}

setInterval(() => {
    changeSlide(1);
}, 5000);