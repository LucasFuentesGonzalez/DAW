<?php

    //Array de entrada
    $personajes = [];

    //String de salida
    $string = "Nombre;Apellido;Nacionalidad\n";

    //Recorro el array y lo añado al string de salida (cada personaje en linea, con cada valor separado ;)
    foreach ($personajes as $fila){
        $string = $fila['nombre'].";".$fila['apellidos'].";".$fila['nacionalidad']."\n";
    }

    //Escribo en el fichero
    //Permisos de escritura para www-data: sudo chown -R www-data:www-data files
    $fichero = "files/personajes.csv";
    if (file_put_contents($fichero,$string) !== false){
        echo "He escrito los valores en el fichero";
    }
    else{
        echo "Se ha producido un error al intentar escribir en el fichero";
    }