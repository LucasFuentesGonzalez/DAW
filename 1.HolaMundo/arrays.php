<?php
    //Constructor array
    $numeros = array(1,2,3,4,5);

    //Mostrar un array (opcion 1)
    //print_r($numeros);

    //Mostrar un array (opcion 2)
    //var_dump($numeros);

    //Mostrar un array (opcion 3, la mejor)
    function mostrarArray($array){
        echo "<pre>";
        print_r($array);
        echo "<pre>";
    }
    //mostrarArray($numeros);

    $meses = [
            1 => 'enero',
            'febrero',
            'marzo',
            'abril',
            'mayo',
            'junio',
            'julio',
            'agosto',
            'septiembre',
            'octubre',
            'noviembre',
            'diciembre'
    ];
    //$meses[13] = "diciembre";
    mostrarArray($meses);

    //Arrays asociativos
    $persona = [
        'nombre' => "Lucas",
        'apellidos' => "Fuentes González"
    ];
    mostrarArray($persona);

    //Array de arrays
    $personas = [
        [
            'nombre' => "Lucas",
            'apellidos' => "Fuentes González"
        ],
        [
            'nombre' => "Lucas",
            'apellidos' => "Fuentes González"
        ]
    ];
    mostrarArray($persona);
    echo $personas[0]['nombre'];

    //Tamaño de un array
    echo count($meses);

    //Comprobar si existe un valor del array
    if (array_key_exists( 13, $meses)){
        echo $meses[13];
    }
    else{
        echo "El indice no existe en el array";
    }

    //Comprobar si existe un valor del array
    if (in_array('septiembre', $meses)){
        echo "Existe";
    }
    else{
        echo "No existe";
    }

    //Eliminar un elemento del array por su valor
    //unset($meses[12]);
    mostrarArray($meses);
    echo "<br><br>";


    //Iteraciones con arrays (solo valor)
    foreach ($meses as $valor){
        echo $valor."-";
    }
    echo "<br><br>";

    //Iteraciones con arrays (indice y valor)
    foreach ($meses as $indice => $valor){
        echo $indice.": ".$valor."-";
    }
    echo "<br><br>";


    //Iteraciones con arrays con un for (no recomendado)
    for ($i = 1; $i <= count($meses); $i++){
        echo $meses[$i].";";
    }
    echo "<br><br>";


    //Ordenacion ascendente con sort (por valores sin respetar indices)
    //rsort seria en orden descendente
    //sort($meses);
    //mostrarArray($meses);

    //Ordenacion ascendente con asort (por valores respetando indices)
    //asort($meses);
    //mostrarArray($meses);
    //asort seria en orden descendente
    //arsort($meses);
    //mostrarArray($meses);

    $array = ['siete', 12, 'paco', 3];
    mostrarArray($array);

    /*asort(&:$array, flags:SORT_REGULAR); //por defecton no convierte el tipo
    mostrarArray($array);

    asort(&:$array, flags:SORT_NUMERIC); //primero convierte a numero
    mostrarArray($array);

    asort(&:$array, flags:SORT_STRING); //primero convierte a string
    mostrarArray($array);*/

    //Desordenar un array (sin respetar indices originales)
    mostrarArray($array);
    //shuffle($meses);
    //mostrarArray($array);


    //Desordenar un array (respetando los indices originales)



    //Extraer un elemento aleatorio de un array
    $indice = array_rand($meses);
    //Muestro el elemento  que corresponde a ese indice aleatorio
    echo $meses[$indice];


    //Array asociativo de Personas
     $personas = [
      [
          'nombre' => 'Jairo',
          'apellido' => 'García',
          'edad' => 47
      ],
      [
          'nombre' => 'Juan',
          'apellido' => 'Palomo',
          'edad' => 22
      ],
      [
          'nombre' => 'Luís',
          'apellido' => 'Andrade',
          'edad' => 54
      ],
      [
          'nombre' => 'Alberto',
          'apellido' => 'Pérez',
          'edad' => 18
      ],
      [
          'nombre' => 'Miguel',
          'apellido' => 'Yuste',
          'edad' => 36
      ]
  ];

    //Ordena array de personas por nombre ascendente
    foreach ($personas as $key => $row){
        $nombres[$key] = $row['nombre']; //Obtengo array de nombres con los índices originales
    }
    array_multisort($nombres, SORT_ASC, $personas);
    mostrarArray($personas);

    //ordeno el array de personas por edad descendente
    foreach ($personas as $key => $row){
        $edades[$key] = $row['edad']; //Obtengo array de edades con los indices originales
    }
    array_multisort($edades,SORT_DESC,$personas);
    mostrarArray($personas);

    $array = ['peras','manzanas','uvas'];

    //añadir un elemento al final de un array
    array_push($array,...'platanos');
    mostrarArray($array);

    //Extrae el ultimo elemento de un array
    echo array_pop($array);
    mostrarArray($array);

    //Extrae el primer elemento de un array
    echo array_shift($array);
    mostrarArray($array);

    //Añade un elemento al principio de un array
    array_unshift($array,...'ciruelas');
    mostrarArray($array);


?>