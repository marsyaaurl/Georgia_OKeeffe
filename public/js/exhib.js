document.querySelectorAll('.tab').forEach(tab => {
    tab.addEventListener('click', function(event) {
    event.preventDefault();

    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));

    this.classList.add('active');

    document.querySelectorAll('.exhibition-section').forEach(section => section.style.display = 'none');

    const target = this.getAttribute('data-target');

    if (target === 'current') {
        document.getElementById('current').style.display = 'block';
        document.getElementById('current2').style.display = 'block';  
    }else if (target === 'past') {
        document.getElementById('past').style.display = 'block';
        document.getElementById('past2').style.display = 'block';
        
    } else {
        document.getElementById(target).style.display = 'block';
    }
});
});

function purchaseTicket(url) {
window.location.href = url;
}

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
