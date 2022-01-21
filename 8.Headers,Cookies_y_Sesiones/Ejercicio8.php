<?php
//8. Genera un script con una cookie llamada micookie y con el
// texto Hola, soy tu cookie amiga por 1 día que dure exactamente
// 1 día, de modo que al arrancar el script se cree y te diga que
// recargues la página y que al recargar o si cierras el navegador
// y lo vuelves a abrir te diga que ya existe.

//Compruebo que aún no existe
if (!isset($_COOKIE['micookie'])){

    //Set cookie por 1 día
    setcookie("micookie","Hola, soy tu amigo cookie por 1 día", time() + 86400);

    echo "La cookie se ha creado.<br><a href='ejercicio8.php'>Recarga la página</a>";
}
else{
    echo "La cookie tiene el valor ".$_COOKIE['micookie'];
}











//Añade un formulario sencillo que permita borrar la cookie y recargar la página.
//Genera un formulario sencillo que recoja tu nombre, lo almacene en sesión y, al abrir otro archivo php mediante un enlace, muestre tu nombre recuperando dicha variable.