document.addEventListener("DOMContentLoaded", () => {
    const quantityInput = document.getElementById("quantity");
    const totalAmount = document.getElementById("total-amount");
    const minusButton = document.querySelector(".minus");
    const plusButton = document.querySelector(".plus");
    const pricePerItem = parseFloat(totalAmount.dataset.price);
    const form = document.getElementById("ticketForm");

    const updateTotal = () => {
        const quantity = parseInt(quantityInput.value, 10);
        const total = (quantity * pricePerItem).toFixed(2);
        totalAmount.textContent = `$${total}`;
    };

    minusButton.addEventListener("click", () => {
        let quantity = parseInt(quantityInput.value, 10);
        if (quantity > 1) {
            quantityInput.value = quantity - 1;
            updateTotal();
        }
    });

    plusButton.addEventListener("click", () => {
        let quantity = parseInt(quantityInput.value, 10);
        if (quantity < 10) {
            quantityInput.value = quantity + 1;
            updateTotal();
        }
    });

    quantityInput.addEventListener("input", () => {
        let quantity = parseInt(quantityInput.value, 10);
        if (isNaN(quantity) || quantity < 1) {
            quantity = 1;
        } else if (quantity > 10) {
            quantity = 10;
        }
        quantityInput.value = quantity;
        updateTotal();
    });

    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const address = document.getElementById("address").value.trim();
        const paymentMethod = document.getElementById("method").value;

        if (!name || !email || !phone || !address || !paymentMethod) {
            alert("Please fill in all the required fields.");
            return;
        }

        alert(
            `Thank you for your purchase, ${name}! Your order is being processed.`
        );
        form.reset();
        quantityInput.value = 1;
        updateTotal();
    });

    updateTotal();
});
