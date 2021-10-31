function checkout (){
    var getPrice = parseFloat(document.getElementById('total_price').innerHTML.substring(1));
    console.log(getPrice);
    if (getPrice === 0){
        alert("Your cart is empty! ");
        return false;
    }
    alert("Thank you for your order, enjoy!");
}