document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const price = urlParams.get("price");
    const exhibition = urlParams.get("exhibition");

    if (price) {
        document.getElementById("price").value = `$${price}`;
    }

    const form = document.getElementById("ticketForm");
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        alert("Your membership purchase has been successfully submitted!");
        form.reset();
    });
});

/*document.querySelector('.membership-btn').addEventListener('click', () => {
    alert('Thank you for showing interest in our Membership program!');
});

document.querySelector('.price-btn').addEventListener('click', () => {
    alert('Membership Purchased Successfully!');
});*/

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

    slides.forEach((slide) => {
        slide.style.display = "none";
    });

    slides[currentSlideIndex].style.display = "block";
}

setInterval(() => {
    changeSlide(1);
}, 5000);
