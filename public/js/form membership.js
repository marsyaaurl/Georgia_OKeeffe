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
        alert("Your purchase has been successfully submitted!");
        form.reset();
    });
});
