// function getCheckoutInfo(){
//     let prices = document.querySelectorAll(".new-price");
//     let subtotal = 0;
//     prices.forEach(p =>{
//         subfee += parseInt(p.innerText);
//     });
//     document.getElementById("subfee").innerText = subtotal;
// }

function updateQuantity(item, productid, quantity, amount){
    item.addEventListener("click", async function () {
        quantity += amount;
        let data = {
            productid: productid,
            quantity: quantity,
        };
        let response = await fetch("/cart/add", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
        });
        let result = await response.json();
        document.getElementById("response").innerText = result.message;
    })
}

function plusQuantity(event){
    event.preventDefault();
    alert('plus');
}
function minusQuantity(event){
    event.preventDefault();
    alert('minus');
}
$(function(){
    $(document).on('click', '.plus', plusQuantity);
})
