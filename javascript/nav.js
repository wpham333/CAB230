function expandNav(){
    var x = document.getElementById("container");
    if (x.className === "navL") {
        x.className += " responsive";
    } else {
        x.className = "navL";
    }
}


