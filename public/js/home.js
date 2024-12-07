const links = document.querySelectorAll('.menu ul li a');

links.forEach(link => {
    link.addEventListener('click', function() {
        links.forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    });
});


const famousPainting = document.querySelector('.painting-container');

function checkVisibilityPainting() {
    const rect = famousPainting.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (rect.top <= windowHeight && rect.bottom >= 0) {
        famousPainting.classList.add('visible');
    } else {
        famousPainting.classList.remove('visible');
    }
}

window.addEventListener('scroll', checkVisibilityPainting);
window.addEventListener('DOMContentLoaded', checkVisibilityPainting);

const aboutSection = document.querySelector('.about-section');

function checkVisibilityAbout() {
    const rect = aboutSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (rect.top <= windowHeight && rect.bottom >= 0) {
        aboutSection.classList.add('visible');
    }
    else {
        aboutSection.classList.remove('visible');
    }
}

window.addEventListener('scroll', checkVisibilityAbout);
window.addEventListener('DOMContentLoaded', checkVisibilityAbout);

const nextButton = document.getElementById('next-but');
const prevButton = document.getElementById('prev-but');

const slide1 = document.querySelectorAll('.famous-painting1');
const slide2 = document.querySelectorAll('.famous-painting2');

let isSlide1Visible = true;

nextButton.addEventListener('click', () => {
    if (isSlide1Visible) {
        slide1.forEach(img => img.classList.add('hidden'));
        slide2.forEach(img => img.classList.remove('hidden'));
    }
    isSlide1Visible = false;
});

prevButton.addEventListener('click', () => {
    if (!isSlide1Visible) {
        slide2.forEach(img => img.classList.add('hidden'));
        slide1.forEach(img => img.classList.remove('hidden'));
    }
    isSlide1Visible = true;
});


const dropdown = document.querySelector('.dropdown');

dropdown.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent closing other menus
    const content = dropdown.querySelector('.dropdown-content');
    content.classList.toggle('show');
});

// Close dropdown when clicking outside
document.addEventListener('click', () => {
    const content = dropdown.querySelector('.dropdown-content');
    if (content.classList.contains('show')) {
        content.classList.remove('show');
    }
});