/*function flou(){
    var intro = onmouseover(document.getElementById('intro'));
    if (intro == true){
        document.getElementById('imageTrain').style.filter = "blur(4px)";
    }else{
        document.getElementById('imageTrain').style.filter = "blur(0px)";
    }
null germain null
}*/
const intro = document.getElementById('intro');
const imageTrain = document.getElementById('imageTrain');
intro.onmouseover = logMouseOver;
intro.onmouseout = logMouseOut;

function logMouseOver(){
    imageTrain.style.filter = "blur(3px)";
}
function logMouseOut(){
    imageTrain.style.filter = "blur(0px)";
}
