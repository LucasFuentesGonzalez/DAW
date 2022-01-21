<?php
    $nombre = "lucas";
    $edad = 47;
    $bool = false;

    echo $nombre;
    echo "<br>soy " . $nombre . ", papu<br>";



    //Estructuras Condicionales

    $numero1 = 17;
    $numero2 = 18;

    if ($numero1 < $numero2){
        echo "El numero 1 es menor que el numero 2<br>";
    }
    elseif ($numero1 > $numero2) {
        echo "El numero 2 es menor que el numero 1<br>";
    }
    else{
        echo "Los dos numeros son iguales<br>";
    }



    //Estructuras Condicionales ¡PRO!

    $numero3 = 19;
    $numero4 = 20;

    echo ($numero3 > $numero4) ? "Numero 3 es mayor que numero 4<br>" :
                                 "Numero 4 es mayor que numero 3<br>";



    //Operador Elvis

    $variable = null;
    $variable2 = $variable ?: 24;
    echo $variable2."<br>";



    //Operadcor Nulo

    $variable3 = $variable ?: 36;
    echo $variable3."<br>";



    //Estructura switch

    $dia = 4;
    switch ($dia){
        case 0: echo "Lunes"; break;
        case 1: echo "Martes"; break;
        case 2: echo "Miercoles"; break;
        case 3: echo "Jueves"; break;
        case 4: echo "Viernes"; break;
        case 5: echo "Sabado"; break;
        case 6: echo "Domingo"; break;
        default: echo "No es un dia valido";
    }



    //Bucles de control

    $i = 0;
    while($i < 5){
        echo"fornite<br>";
        $i++;
    }

   //do while
    $i = 10;
    do{
        echo "lulaso ".$i."<br>";
        $i++;
    } while ($i < 10);
    echo "<br>";


    //For

    for ($j = 0; $j < 10; $j++){
        echo "calvo".$j."<br>";
    }
    echo "<br>";


    //Foreach

    $frutas = array('peras', 'manzanas' , 'uvas');
    foreach ($frutas as $indice => $fruta){
        echo $indice." ".$fruta."<br>";
    }
    echo "<br>";



    $i = 0;
    //bucle for que imprime 01236789
    for ($i=0; $i < 10; $i++){
       if (($i > 3) AND ($i < 6)){
       continue;
       }
        echo $i;
    }

    //bucle while que imprime 0123456
    while ($i < 10){
        if ($i > 6){
            break;
        }
        echo $i;
        $i++;
    }



    //Funciones

    //1. Declararlas
    function dihola(){
        echo "<br><br>hola";
    }
    function diAlgo($texto){
        echo "<br><br>.$texto.<br><br>";
    }
    function suma($valor1, $valor2){
        $suma = $valor1 + $valor2;
        return $suma;
    }

    //2.Usarlas

    diHola();
    diAlgo( "¿Como estas?");
    $valor = suma(2 , 5 );

    //Ambito
    $v1 = 18;
    $v2 = 6;
    echo $v2 = $v1;














?>

