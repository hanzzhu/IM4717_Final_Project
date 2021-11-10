function validateName(){
    var name = document.getElementById('name').value;
    if (name.length <= 0){
        alert("Name should not be empty!")
        return false
    }
    if (!name.replace(/\s/g, '').length) {
        alert("Name should not only contain spaces!")
        return false
    }
    if (checkName(name)) {
        console.log("name is correct");
        return true
    } else {
        alert("The name should only contain alphabet characters and spaces!");
        return false
    }
}

function checkName(input){
    var alphabets = /^[a-zA-Z\s]*$/;
    return input.match(alphabets);
}

function validateEmail(){
    var email = document.getElementById('email').value;

    // check @
    if (email.indexOf('@') != -1){
        var username = email.split('@')[0];
        var domain = email.split('@')[1];
        console.log(username, domain);


        //check email domian name
        if(domain.indexOf('.') != -1){
            var domainArray = domain.split('.');

            // check email address extension
            if(domainArray.length < 2 || domainArray.length > 4){
                alert('Email domain should contain 2 to 4 address extensions');
                return false
            }

            // check last extension
            if(domainArray[domainArray.length - 1].length < 2 || domainArray[domainArray.length - 1].length > 3){
                alert('Email last extension should contain 2 to 3 characters.');
                return false
            }
        } else {
            alert('Wrong email domain extension!');
            return false
        }
    } else {
        alert('Please include @ in email!');
        return false
    }
    return true
}

function validateForm(){
    if (!validateName() || !validateEmail() ){
        alert("Please check your input again ");
        return false
    }else{
        return true
    }

}
