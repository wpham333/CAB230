var password;
var confirmpassword;
var firstname;
var lastname;

function validate(){
    var FirstName = checkFirstName();
    var Gender = checkGender();
    var Email = checkEmail();
    var Password = checkPassword();
    var ConfirmPassword = confirmPassword();
    var BothPassword = checkBothPass();
    var ZipCode = zipCode();
    var Date = checkDate();
    if(FirstName && Gender && 
       Email && Password && ConfirmPassword && 
       BothPassword && ZipCode && Date == true){
        okay = true;
    } else {
        document.getElementById("submitMissing").style.visibility = "visible";
        okay = false;
    }
    return okay;
}
function checkFirstName(){
    var pattern = /^([a-zA-Z])+/;
    var numb = /^([0-9])/;
    firstname = document.Register.firstname.value;
    lastname = document.Register.lastname.value;
    if(pattern.test(firstname) && pattern.test(lastname)){
        document.getElementById("firstlastMissing").style.visibility = "hidden";
        return true;
    } else if (numb.test(firstname) || numb.test(lastname)){
        var docnumb = document.getElementById("firstlastMissing")
        docnumb.innerHTML= "First name and last name invalid (Letters please)";
        docnumb.style.visibility = "visible";
        return false;
    } else {
        var empty = document.getElementById("firstlastMissing");
        empty.innerHTML = "First name and last name invalid";
        empty.style.visibility = "visible";
        return false;
    }
}

function checkGender(){
    if ((document.Register.gender[0].checked == false) && (document.Register.gender[1].checked == false)) {
        document.getElementById("genderMissing").style.visibility = "visible";
        return false; 
    }else{
        document.getElementById("genderMissing").style.visibility = "hidden";
        return true;
    }
}

function checkEmail(){
    var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    email = document.Register.email.value;
    if(pattern.test(email)){
        document.getElementById("emailMissing").style.visibility = "hidden";
        return true;
    } else {
        document.getElementById("emailMissing").style.visibility = "visible";
        return false;
    }
}

function checkPassword(){
    password = document.Register.pass.value;
    var passy = document.getElementById("passwordMissing");
    if(password == ""){
        passy.style.visibility = "visible";
        return false;
    } else {
        passy.style.visibility = "hidden";
        return true;
    }
}

function confirmPassword(){
    confirmpassword = document.Register.cpass.value;
    var confirm = document.getElementById("passwordMissing");
    var notempty = document.getElementById("passwordMissing");
    if ((password && confirmpassword) == ""){
        notempty.innerHTML= "Both can't be empty";
        notempty.style.visibility = "visible";
        return false;
    } else {
        confirm.style.visibility = "hidden";
        return true;
    }
}

function checkBothPass(){
    if(password != confirmpassword){
        var both = document.getElementById("passwordMissing");
        both.innerHTML = "Both password are not the same";
        both.style.visibility = "visible";
        return false;
    } else if ((password && confirmpassword) == ""){
        return false;
    } else {
        return true;
    }
}

function zipCode(){
    var pattern = /^([0-9]{4}$)/;
    var alpha = /^([a-zA-Z])+/;
    code = document.Register.code.value;
    if(pattern.test(code)){
        document.getElementById("codeMissing").style.visibility = "hidden";
        return true;
    } else if (code == ""){
        var emptycode = document.getElementById("codeMissing");
        emptycode.innerHTML = "Zip code is empty";
        emptycode.style.visibility = "visible";
        return false;
    } else if(alpha.test(code)){
        var notnumber = document.getElementById("codeMissing");
        notnumber.innerHTML = "Zip code is invalid (Number Please)"
        notnumber.style.visibility = "visible";
        return false;
    } else {
        var notsame = document.getElementById("codeMissing");
        notsame.innerHTML = "Zip code is invalid (4 digits)"
        notsame.style.visibility = "visible";
        return false;
    }
}
function checkDate(){
    var docform = document.Register;
    if(docform.day.selectedIndex == 0){
        document.getElementById("dateMissing").style.visibility = "visible";
        return false;
    } else if(docform.month.selectedIndex == 0){
        document.getElementById("dateMissing").style.visibility = "visible";
        return false;
    } else if (docform.year.selectedIndex == 0){
        document.getElementById("dateMissing").style.visibility = "visible";
        return false;
    } else {
        document.getElementById("dateMissing").style.visibility = "hidden";
        return true;
    }
}