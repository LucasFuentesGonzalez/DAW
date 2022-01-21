<?php
    //Formato de numeros
    $variable = 10000/3;
    echo $variable."<br>";
    echo number_format($variable)."<br>";
    echo number_format($variable,2)."<br>";
    echo number_format($variable,2,",",".")."€<br>";

    //Crea una funcion que devuelva un numero en formato EURO.
    //Ademas, que sea de color rojo si el numero es menor que 0
    function euro($numero){
        $clase = ($numero < 0) ? "rojo" : "";
        return "<span class='".$clase."'>".number_format($numero,2,",",".")."€</span>";
    }
    echo euro(12324.32)."<br>";
    echo euro(-327.2)."<br>";

    //FORMATO DE STRINGS (sprintf)

    //Intercambio de argumentos
    $num = 5;
    $ubicacion = 'árbol';

    $formato = 'Hay %d monos en el %s';
    echo sprintf($formato, $num, $ubicacion); //Devuelve "Hay 5 monos en el árbol"
        echo "<br>";

    $formato = 'El %s contiene %d monos';
    echo sprintf($formato, $num, $ubicacion); //Devuelve "El contiene 0 monos"
        echo "<br>";

    $formato = 'El %2$s contiene %1$d monos'; //Devuelve "El árbol contiene 5 monos"
    echo sprintf($formato, $num, $ubicacion);
        echo "<br>";

    $formato = 'El %2$s contiene %1$d monos. Es un bonito %2$s con %1$d monos.';
    echo sprintf($formato, $num, $ubicacion); //Devuelve "El árbol contiene 5 monos. Es un bonito árbol con 5 monos."
        echo "<br>";

    //Especificar un carácter de relleno
    echo sprintf("%'.9d\n", 123); //Devuelve "......123"
    echo sprintf("%'09d\n", 123); //Devuelve "000000123"
?>