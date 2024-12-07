const priceElement = document.getElementById("total-amount");
const quantityInput = document.getElementById("quantity");
const incrementButton = document.getElementById("plus");
const decrementButton = document.getElementById("minus");

function updateTotalPrice() {
    const quantity = parseInt(quantityInput.value, 10);
    const unitPrice = parseInt(priceElement.value, 10);
    const totalPrice = unitPrice * quantity;
    priceElement.value = totalPrice;
}

incrementButton.addEventListener("click", () => {
    let currentQuantity = parseInt(quantityInput.value, 10);
    quantityInput.value = currentQuantity + 1;
    updateTotalPrice();
});

decrementButton.addEventListener("click", () => {
    let currentQuantity = parseInt(quantityInput.value, 10);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
        updateTotalPrice();
    }
});

updateTotalPrice();
