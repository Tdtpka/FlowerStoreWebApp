function getQuantity(quantity) {
    document.getElementById('quantity').value = quantity;
}
function getCheckoutInfo() {
    let prices = document.querySelectorAll(".new-price");
    let quantities = document.querySelectorAll(".label_quantity");
    let subtotal = 0, subfee = 0;
    for (let index = 0; index < prices.length; index++) {
        subtotal += parseInt(prices[index].innerHTML) * parseInt(quantities[index].value);
        subfee += 20000 * parseInt(quantities[index].value);
    }
    let vat = subtotal * 10 / 100;
    document.getElementById("sub-total").innerText = subtotal;
    document.getElementById("sub-fee").innerText = subfee;
    document.getElementById("vat").innerText = vat;
    document.getElementById("total").innerText = subtotal + subfee + vat;
}
function changeQuantity(item, amount) {
    let label_quantity = item.parentElement.querySelector(".label_quantity");
    let new_quantity = parseInt(label_quantity.value) + amount;
    if (new_quantity > 0) {
        label_quantity.value = new_quantity;
        getQuantity(new_quantity);
    }
}
function changeAndSaveQuantity(item, amount) {
    let label_quantity = item.closest(".change-quantity").querySelector(".label_quantity");
    let new_quantity = parseInt(label_quantity.value) + amount;
    if (new_quantity > 0) {
        label_quantity.value = new_quantity;
        getCheckoutInfo();
    }
}