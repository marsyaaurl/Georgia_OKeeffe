document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.menu ul li a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetHref = this.getAttribute('href');
        
            if (targetHref.startsWith('#')) {
               
                e.preventDefault();
                const targetSection = document.querySelector(targetHref);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

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


    const earlyLifeSection = document.querySelector('.early-life-section');
    const artisticStyleSection = document.querySelector('.artistic-style-section');
    
    document.querySelector('.left-bio-title h2').addEventListener('click', () => {
        earlyLifeSection.classList.toggle('hidden');
    });

    document.querySelector('.right-bio-title h2').addEventListener('click', () => {
        artisticStyleSection.classList.toggle('hidden');
    });

    const images = document.querySelectorAll('.bio-photo');
    images.forEach(image => {
        image.addEventListener('mouseover', () => {
            image.style.transform = "scale(1.1)";
            image.style.transition = "transform 0.3s ease-in-out";
        });

        image.addEventListener('mouseout', () => {
            image.style.transform = "scale(1)";
        });
    });
});

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
