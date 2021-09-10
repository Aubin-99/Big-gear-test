var modal2 = document.getElementById('id02');

/* lorsqu'on clicque n'importe ou dur le modal ça le ferme
window.onclick = function(event) {
    if (event.target == modal2) {
        closeModal2();
    }
}*/
function openModal2() {
    document.getElementById("id02").style.height = "100%";
    document.getElementById("id02").style.paddingTop = "50px";
}

function closeModal2() {
    document.getElementById("id02").style.height = "0%";
    document.getElementById("id02").style.paddingTop = "0px";
}