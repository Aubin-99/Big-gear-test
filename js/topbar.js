function topBarRespo(){
    var x = document.getElementById("topBar");
    if (x.className === "topbar") {
        x.className += " responsive";
    } else {
        x.className = "topbar";
    }
}