
<h1>Ejercicio 9</h1>
<p>
    Desarrolla un juego web que, a partir de una baraja española de mus
    (esto es, sin 8, 9 y 10) permita:
</p>
<ol>
    <li>
        Mostrar una carta de un palo determinado al azar
    </li>
    <li>
        Mostrar una mano de mus de dos jugadores (4 cartas del as al rey para
        cada uno al azar sin que se repitan)
    </li>
    <li>
        Mostrar una mano de las anteriores y comprobar quién se llevaría el
        “juego” (si lo llevan).
    </li>
</ol>
    PLUS: Mostrar una mano de las anteriores y comprobar quién se llevaría los “pares” (si lo llevan).

    PLUS: Mostrar una mano de las anteriores y comprobar quién lleva más “a la grande”.

    PLUS: Mostrar una mano de las anteriores y comprobar quién lleva más “a la chica”.
<br><br>

<?php
    $palos = ['oros', 'copas', 'espadas','bastos'];
    $cartas = [
        [
            'nombre' => "As",
            'valor' => 1
        ],
        [
            'nombre' => "Dos",
            'valor' => 1
        ],
        [
            'nombre' => "Tres",
            'valor' => 10
        ],
        [
            'nombre' => "Cuatro",
            'valor' => 4
        ],
        [
            'nombre' => "Cinco",
            'valor' => 5
        ],
        [
            'nombre' => "Seis",
            'valor' => 6
        ],
        [
            'nombre' => "Siete",
            'valor' => 7
        ],
        [
            'nombre' => "Sota",
            'valor' => 10
        ],
        [
            'nombre' => "Caballo",
            'valor' => 10
        ],
        [
            'nombre' => "Rey",
            'valor' => 10
        ],
    ];

    $baraja = [];
    foreach ($palos as $palo){
        foreach($cartas as $carta){
            //añado un nuevo elemento al array $baraja
            $baraja[] = [
                'nombre' => $carta['nombre'],
                'valor' => $carta['valor'],
                'palo' => $palo
            ];
        }
    }
    //1. Mostrar una carta al azar
    $indice_aleatorio = array_rand($baraja);
    echo $baraja[$indice_aleatorio]['nombre']." de ".$baraja[$indice_aleatorio]['palo']."<br>";


    //2. Mostrar dos manos de mus (4 cartas aleatorias sin repetir)
    //Barajeo las cartas
    shuffle($baraja);
    //Reparto las dos manos
    $mano1 = [];
    $mano2 = [];
    for ($i = 0; $i < 4; $i++){
        $mano1[] = array_shift($baraja);
        $mano2[] = array_shift($baraja);
    }
    //Muestro las manos
    echo "<br><strong>Mano 1</strong><br>";
    foreach ($mano1 as $carta){
        echo $carta['nombre']." de ".$carta['palo']."<br>";
    }
    echo "<br><strong>Mano 2</strong><br>";
    foreach ($mano2 as $carta){
        echo $carta['nombre']." de ".$carta['palo']."<br>";
    }
    //Compruebo cuantas cartas quedan
    echo "<br>Quedan ".count($baraja)." cartas.<br>";


    //3. Calcular quien se llevaria el juego
    //El juego se consigue si la suma de los 4 valores es mayor de 31
    //El orden de mejor a peor juego es: 31, 32, 40, 36, 35, 34, 33
    $juego1 = 0;
    $juego2 = 0;
    //Recorro los arrays (con for para recorrerlos los dos a la vez)
    for ($i = 0; $i < 4; $i++){
        //Voy acumulando en juego1 el valor de cada carta
        $juego1 += $mano1[$i]['valor'];
        $juego2 += $mano1[$i]['valor'];
    }
    //Muestro el juego de cada mano
    echo "<br>La mano 1 tiene ".$juego1." de juego.";
    echo "<br>La mano 2 tiene ".$juego2." de juego.";

    //Compruebo si llevan juego
    if ($juego1 > 30 && $juego2 > 30){
        //El orden de mejor a peor juego es: 31, 32, 40, 36, 35, 34, 33
        $juegos = [31, 32, 40, 36, 35, 34, 33];
        //array_search me devuelve el indice que corresponde a ese valor
        $indice1 = array_search($juego1, $juegos);
        $indice2 = array_search($juego2, $juegos);
        //Compruebo quien gana
        if ($indice1 < $indice2){
            echo "<br>Gana el juego el jugador 1.";
        }
        else if ($indice1 > $indice2){
            echo "<br>Gana el juego el jugador 2.";
        }
        else{
            echo "<br>Empate al juego";
        }
    }
    else if ($juego1 > 30){
        echo "<br>Gana el jugador 1 porque jugador 2 no lleva juego";
    }
    else if ($juego2 > 30){
        echo "<br>Gana el jugador 2 porque jugador 1 no lleva juego";
    }
    else{
        echo "<br>Ninguno lleva juego.";
    }


?>






