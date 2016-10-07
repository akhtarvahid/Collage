// Toggle grid padding
function myFunction() {
    var x = document.getElementById("myGrid");
    if (x.className.indexOf("w3-row-padding") == -1) {
        x.className += " w3-row-padding";
    } else {
        x.className = x.className.replace(" w3-row-padding", "");
    }
}

// Open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("mySidenav").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
