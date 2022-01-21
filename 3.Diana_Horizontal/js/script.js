//Funcion para cambiar el nivel del juego (el ancho de la diana)
function cambiarNivel(nivel){

    //Accedo al elemento de la diana
    var diana = document.getElementById(elementld: "diana");

    //Establezco el ancho en funcion del nivel
    if (nivel === 1){
        var ancho = "100%";
    }
    else if (nivel === 2){
        var ancho = "50%";
    }
    else{
        var ancho = "10%";
    }

    //Aplico ese ancho a la diana
    diana.style.width = nivel + "%";


}