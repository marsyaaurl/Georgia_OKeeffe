document.querySelectorAll('.radio-option input[type="radio"]').forEach((radio) => {
    radio.addEventListener('change', function() {
        document.querySelectorAll('.option').forEach((option) => {
            option.classList.remove('selected');
        });
        if (this.checked) {
            this.parentElement.classList.add('selected');
        }
    });
});