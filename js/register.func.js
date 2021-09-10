var modal = document.getElementById('id01');

// lorsqu'on clicque n'importe ou dur le modal ça le ferme
window.onclick = function(event) {
    if (event.target == modal) {
        closeModal();
    }
}
//ouverture fermeture du modal
function openModal() {
    document.getElementById("id01").style.height = "100%";
    document.getElementById("id01").style.paddingTop = "0px";
}

function closeModal() {
    document.getElementById("id01").style.height = "0%";
    document.getElementById("id01").style.paddingTop = "0px";
}

//Montrer les mots de passe
function showPassword() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function showPasswordBis() {
    var x = document.getElementById("psw-repeat");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
//Fonction à faire : lorsque je clique sur l'oeil je veux que le eye.icon:before contient le style "background-color = black"