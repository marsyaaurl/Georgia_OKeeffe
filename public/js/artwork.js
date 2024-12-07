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