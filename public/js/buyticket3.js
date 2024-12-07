const unitPrice = 22;

const priceElement = document.getElementById('total-amount');
const quantityInput = document.getElementById('ticket-quantity');
const incrementButton = document.getElementById('plus');
const decrementButton = document.getElementById('minus');

function updateTotalPrice() {
    const quantity = parseInt(quantityInput.value, 10); 
    const totalPrice = unitPrice * quantity; 
    priceElement.textContent = `$${totalPrice.toFixed(2)}`;
}

incrementButton.addEventListener('click', () => {
    let currentQuantity = parseInt(quantityInput.value, 10); 
    quantityInput.value = currentQuantity + 1; 
    updateTotalPrice(); 
});

decrementButton.addEventListener('click', () => {
    let currentQuantity = parseInt(quantityInput.value, 10); 
    if (currentQuantity > 1) { 
        quantityInput.value = currentQuantity - 1;
        updateTotalPrice(); 
    }
});

updateTotalPrice();
