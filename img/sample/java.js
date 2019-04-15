function validate(){
    //okay = null;
    alert("hello");
    checkName();
    return okay;
}
function checkName(){
    pattern = /^([a-zA-Z]);
    str = document.Register.firstname.value;
    if(pattern.test(str)){
        alert("correct");
        okay = true;
    } else {
        alert("false");
        okay = false;
    }
}