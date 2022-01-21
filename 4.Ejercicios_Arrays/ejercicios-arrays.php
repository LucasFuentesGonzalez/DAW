<h1>Ejercicio 1</h1>
<p>
    Desarrolla un array multidimensional que incluya todos los días del año de
    modo que se pueda acceder a cada elemento en la forma $array[6][15] y un
    echo devuelva "15 de Junio".
</p>

<?php

    //Mostrar un array
    function mostrarArray($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

//Array de meses
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

    //Array con los dias que tiene cada mes
    //Si el año fuera bisiesto, febrero tendria 29
    $dias = [1 => 31, 28, 31, 30, 31, 30, 31, 30, 31, 30, 31, 30];

    //Construyo el array de tod.o el año
    $anyo = [];
    //Recorro los meses
    foreach ($meses as $num_mes => $nombre_mes){
        //Recorro desde 1 hasta el numero de dias de cada mes
        for ($dia = 1; $dia <= $dias[$num_mes]; $dia++){
            $anyo[$num_mes][$dia] = $dia." de ".$nombre_mes;
        }
    }
    //Compruebo que funciona
    echo $anyo[6][15];

?>




<br><br><br>
<h1>Ejercicio 2</h1>
<p>
    Crea una función que muestre en pantalla una tabla con el contenido del
    array superglobal de PHP $_SERVER, incluyendo el significado de cada índice.
</p>

<?php
    $comentarios = [];
    $comentarios['HYYP_HOST'] = "Indica la direccion IP del equipo servidor";
    //Habria que hacerlo para todos los demas casos
?>
<style>
    table{
        border: 1px solid black;
    }
    table tr th{
        text-align: left;
        background-color: #CCC;
    }
    table tr td{
        border: 1px solid black;
    }
</style>


<table>
    <tr>
        <th>Indice</th>
        <th>Valores</th>
        <th>Comentarios</th>
    </tr>
    <?php foreach ($_SERVER as $indice => $valor){ ?>

    <tr>
        <th><?php echo $indice ?></th>
        <th><?php echo $valor ?></th>
        <th>Aqui va el comentario</th>
    </tr>
    <?php } ?>
</table>




<br><br><br>
<h1>Ejercicio 3</h1>
<p>
    Crea una función que, dado un array de enteros de 0 a 100, extraiga 3
    elementos al azar y devuelva la media de ellos en formato "La media de
    num1, num2 y num3 es resultado".
</p>

<?php
    $enteros = [];
    for ($i = 0; $i <= 100; $i++){
        //Añado el valor del $i al array
        array_push($enteros, $i);
    }
    $numeros = []; //Para almacenar los 3 numeros
    $suma = 0; //Para ir sumando los numeros
    $texto = "La media de "; //Para ir creando el texto de la salida
    for ($i = 0; $i < 3; $i++){
        //Obtengo un indice aleatorio
        $numero = array_rand($enteros);
        //Incremento esa cantidad a la suma
        $suma += $numero;
        //Lo añado al texto de salida
        $texto .= $numero.", ";
        //Añado 3 enteros aleatorios al array de numeros
        array_push($numeros, $numero);
    }
    //Media
    $media = $suma / 3;
    //Muestro el resultado final (quitando los dos ultimos caracteres)
    echo substr($texto, 0, -2)." es ".$media;
?>




<br><br><br>
<h1>Ejercicio 4</h1>
<p>
    Crea un array asociativo con los nombres y números de los meses del año e
    imprímelo. A continuación, ordénalo de forma ascendente respetando los
    índices según el tamaño del texto.
</p>

<?php
    //El array es el de los meses ($meses)
    function comparar2($izquierda,$derecha){
        //Ordena en función de la longitud del valor
        $diferencia = strlen($izquierda) - strlen($derecha);
        if (!$diferencia) { //si tienen la misma longitud
            return strcmp ($izquierda, $derecha); //Devuelvo la comparación de los dos strings a nivel binario
            }
            return $diferencia; //Devuelvo la diferencia en caracteres de los dos strings
        }
        uasort($meses, 'comparar2');
        mostrarArray($meses);
?>




<br><br><br>
<h1>Ejercicio 5</h1>
<p>
    Modifica el ejemplo anterior para que el orden sea descendente.
</p>

<?php
//El array es el de los meses ($meses)
function comparar($izquierda,$derecha){
    //Ordena en función de la longitud del valor
    $diferencia = strlen($izquierda) - strlen($derecha);
    if (!$diferencia) { //si tienen la misma longitud
        return strcmp ($izquierda, $derecha); //Devuelvo la comparación de los dos strings a nivel binario
    }
    return $diferencia; //Devuelvo la diferencia en caracteres de los dos strings
}
uasort($meses, 'comparar');
mostrarArray($meses);
?>




<br><br><br>
<h1>Ejercicio 6</h1>
<p>
    Crea un array asociativo de al menos 10 productos con nombre, precio y
    tipo de iva (1, 2, 3 ó 4). Crea un array de ivas con los tipos de iva
    como índices y el porcentaje de iva como valores (0, 0.04, 0.1 y 0.21).
    Recorre el array de productos y muestra en pantalla el listado de
    productos, su precio sin iva, el tipo de iva y su precio con iva.
</p>

<?php

$ivas = array(1 => 0, 0.04, 0.1, 0.21);

$productos = [
        [
            'nombre' => 'Manzanas',
            'precio' => 2.53,
            'tipo' => 2
        ],
        [
            'nombre' => 'Coca-cola',
            'precio' => 4,
            'tipo' => 2
        ],
        [
            'nombre' => 'Carne',
            'precio' => 4,
            'tipo' => 9.67
        ],
        [
            'nombre' => 'Leche',
            'precio' => 2,
            'tipo' => 1,54
        ],
        [
            'nombre' => 'Aceite',
            'precio' => 1,
            'tipo' => 3,12
        ],
        [
            'nombre' => 'Macarrones',
            'precio' => 3,
            'tipo' => 2,78
        ],
        [
            'nombre' => 'Sal',
            'precio' => 4,
            'tipo' => 3
        ],
        [
            'nombre' => 'Arroz',
            'precio' => 3,
            'tipo' => 2.54
        ],
        [
            'nombre' => 'Magdalenas',
            'precio' => 1,
            'tipo' => 4.67
        ],
        [
            'nombre' => 'Cervezas',
            'precio' => 3,
            'tipo' => 8.45
        ],
];

    //Recorro el array de productos, calculo el precio con IVA
    //y añado ese indice al producto

    foreach ($productos as $i => $producto){
        //Tipo de iva del producto
        $iva = $ivas[$producto['tipo']];
        //Precio con iva del producto
        $precio_iva = $producto['precio'] * (1 + $iva);
        //Añado el indice del precio con iva al array de personas
        $productos[$i]['precio_iva'] = $precio_iva;
    }
?>
<table>
    <tr>
        <th>Nombre</th>
        <th>Precio sin IVA</th>
        <th>Tipo de IVA</th>
        <th>Precio con IVA</th>
    </tr>
    <?php foreach ($productos as $producto){ ?>

    <tr>
        <td><?php echo $producto['nombre'] ?></td>
        <td><?php echo $producto['precio'] ?></td>
        <td><?php echo $producto['tipo'] ?></td>
        <td><?php echo $producto['precio_iva'] ?></td>
    </tr>
    <?php } ?>
</table>




<br><br><br>
<h1>Ejercicio 7</h1>
<p>
    Modifica el ejercicio anterior para que muestre los productos ordenados
    por nombre.
</p>
<?php
    //ordeno el array de productos por nombre ascendente
    foreach ($productos as $key => $row){
        $nombre[$key] = $row['precio_iva'];//Obtengo array de nombres con los
    }
    array_multisort($nombres,SORT_ASC,$productos);
?>
<table>
    <tr>
        <th>Nombre</th>
        <th>Precio sin IVA</th>
        <th>Tipo de IVA</th>
        <th>Precio con IVA</th>
    </tr>
    <?php foreach ($productos as $producto){ ?>

        <tr>
            <td><?php echo $producto['nombre'] ?></td>
            <td><?php echo $producto['precio'] ?></td>
            <td><?php echo $producto['tipo'] ?></td>
            <td><?php echo $producto['precio_iva'] ?></td>
        </tr>
    <?php } ?>
</table>




<br><br><br>
<h1>Ejercicio 8</h1>
<p>
    Modifica el ejercicio anterior para que muestre los productos ordenados
    por su precio con iva.
</p>
