const links = document.querySelectorAll('.menu ul li a');

links.forEach(link => {
    link.addEventListener('click', function() {
        links.forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    });
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

document.querySelectorAll('.buy-btn').forEach(button => {
    button.addEventListener('click', () => {
        const product = button.dataset.product;
        const price = button.dataset.price;

        const confirmationPage = `
            <h1>Confirm Purchase</h1>
            <p>Product: ${product}</p>
            <p>Price: $${price}</p>
            <form>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" value="1" min="1"><br>
                <label for="payment-method">Payment Method:</label>
                <select id="payment-method">
                    <option>Credit Card</option>
                    <option>PayPal</option>
                </select><br>
                <label for="address">Address:</label>
                <textarea id="address"></textarea><br>
                <button type="button" id="confirm-btn">Confirm Purchase</button>
            </form>
        `;
        document.body.innerHTML = confirmationPage;

        document.getElementById('confirm-btn').addEventListener('click', () => {
            document.body.innerHTML = `
                <h1>Waiting for Your Payment</h1>
                <p>Time Left: 10:00</p>
                <p>Virtual Account Number: 1234567890</p>
                <button id="check-status-btn">Check Payment Status</button>
            `;

            document.getElementById('check-status-btn').addEventListener('click', () => {
                document.body.innerHTML = `<h1>Payment Successful</h1>`;
            });
        });
    });
});