function checkout (){
    var getPrice = parseFloat(document.getElementById('total_price').innerHTML.substring(1));
    console.log(getPrice);
    if (getPrice === 0){
        alert("Your cart is empty! ");
        return false;
    }
    alert("Thank you for your order, a confirmation call will be made to you shortly, enjoy!");
}
function checkphone(){
    var getPhone = parseInt(document.getElementById('phone').value);
    if(getPhone<60000000 || getPhone === 0 || getPhone>99999999|| 80000000>getPhone>=70000000){
        alert("Please key in 8 digit phone number, starts with 6 for telephone, 8 or 9 for mobile phone!")
        return false;
    }
    if(getPhone >= 70000000 && getPhone < 80000000){
        alert("Please key in 8 digit phone number, starts with 6 for telephone, 8 or 9 for mobile phone!")
        return false;
    }
}