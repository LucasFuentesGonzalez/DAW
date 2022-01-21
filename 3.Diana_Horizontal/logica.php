<?php

$diana = $_GET ['diana'] ?? null;
if ($diana){
    $texto = "Has hecho en "."<strong>".$diana."</strong><br>";
    if ($diana == 50){
        $texto = "¡Enhorabuena Acertaste!";
        $clase = "rojo";
    }
    else if($diana >= 40 && $diana <= 60){
        $texto = "Ha estado cerca, prueba otra vez";
        $clase = "naranja";
    }
    else{
        $texto = "Not even close baby";
        $clase = "verde";
    }
}
?>

