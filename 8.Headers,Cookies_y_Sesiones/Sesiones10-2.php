<?php
//Inicio la sesión
session_start();

if (isset($_SESSION['nombre'])){
    //Muestro el valor del nombre
    echo "El nombre es ".$_SESSION['nombre'];
}
else{
    echo "Todavía no has completado el formulario.";
}


