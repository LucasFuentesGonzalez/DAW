<?php

//Ordenamos los nombre de forma ascendente
if (isset($_GET['enviar']) == "Asc"){
    foreach ($_SESSION['productos'] as $key => $row){
        $nombres[$key] = $row['nombre'];
    }
    array_multisort($nombres, SORT_ASC, $_SESSION['productos']);
}

//Ordenamos los nombre de forma descendente
if (isset($_GET['enviar']) == "Desc"){
    foreach ($_SESSION['productos'] as $key => $row){
        $nombres[$key] = $row['nombre'];
    }
    array_multisort($nombres, SORT_DESC, $_SESSION['productos']);
}

//Ordenamos los precios de forma ascendente
if (isset($_GET['enviar']) == "Mayor"){
    foreach ($_SESSION['productos'] as $key => $row){
        $precio[$key] = $row['precio'];
    }
    array_multisort($precio, SORT_ASC, $_SESSION['productos']);
}

//Ordenamos los precios de forma descendente
if (isset($_GET['enviar']) == "Menor"){
    foreach ($_SESSION['productos'] as $key => $row){
        $precio[$key] = $row['precio'];
    }
    array_multisort($precio, SORT_DESC, $_SESSION['productos']);
}


$_SESSION['productos'] = [
    [
        'nombre' => "Set de raqueta de tenis",
        'precio' => "49,95€",
        'stock' => "27",
        'imagen' => "img/tenis.png",
    ],
    [
        'nombre' => "Set de pesas",
        'precio' => "59,95€",
        'stock' => "14",
        'imagen' => "img/pesas.png",
    ],
    [
        'nombre' => "Set de bate de béisbol + pelota",
        'precio' => "29,95€",
        'stock' => "12",
        'imagen' => "img/beisbol.png",
    ],
    [
        'nombre' => "Set de bolos",
        'precio' => "129,95€",
        'stock' => "8",
        'imagen' => "img/bolos.png",
    ],
    [
        'nombre' => "Diana",
        'precio' => "89,95€",
        'stock' => "16",
        'imagen' => "img/diana.png",
    ],
    [
        'nombre' => "Bicicleta",
        'precio' => "249,95€",
        'stock' => "3",
        'imagen' => "img/bicicleta.png",
    ],
    [
        'nombre' => "Monopatín",
        'precio' => "69,95€",
        'stock' => "1",
        'imagen' => "img/monopatin.png",
    ],
    [
        'nombre' => "Balón de fútbol",
        'precio' => "19,95€",
        'stock' => "28",
        'imagen' => "img/futbol.png",
    ],
    [
        'nombre' => "Balón de baloncesto",
        'precio' => "19,95€",
        'stock' => "26",
        'imagen' => "img/baloncesto.png",
    ],
    [
        'nombre' => "Balón de rugby",
        'precio' => "25,95€",
        'stock' => "4",
        'imagen' => "img/rugby.png",
    ],
];


if (isset($_GET['enviar']) && $_GET['enviar']){
    foreach ($_SESSION['productos'] as $key => $row){
        $precio[$key] = $row['precio'];
    }
    array_multisort($precio, SORT_DESC, $_SESSION['productos']);
}


/*Enviamos la busqueda*/
if (isset($_GET['enviar'])) {
    $enviar = filter_input(INPUT_GET, 'enviar', FILTER_SANITIZE_STRING);
    $regex = "/(?=.*?[A-Z]).{3,}/";
    $res = preg_match($regex, $enviar);
    setcookie("Orden Listado", $enviar, time() + 86400);//Almacena la cookie 1 día
}

/*Borramos la busqueda*/
if (isset($_GET['borrar'])){
    $enviar = "";
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ControlPHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body1">

    <h1>Tienda</h1>

    <ul class="cabecera">
        <li>Imagen</li>
        <li>Nombre</li>
        <li>Precio</li>
    </ul>

    <?php foreach ($_SESSION['productos'] as $key => $row){?>
    <ul>
        <!-- Imprimimos por pantalla la imagen con los datos -->
        <li>
            <img class="img" src="<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre'] ?>">
        </li>
        <li><?php echo $row['nombre'] ?></li>
        <li><?php echo $row['precio'] ?></li>
    </ul>
    <?php } ?>

    <form action="index.php">
        <!-- Creamos las opciones del select -->
        <select class="input" name="Opciones">
            <option href="index.php?action=Asc" name="Asc" value="Asc">Nombre ascendente</option>
            <option href="index.php?action=Desc" name="Desc" value="Desc">Nombre descendente</option>
            <option href="index.php?action=Mayor" name="Mayor" value="Mayor">Precio mayor</option>
            <option href="index.php?action=Menor" name="Menor" value="Menor">Precio menor</option>
        </select>
        <!-- Enviamos el formulario -->
        <input type="submit" name="action" value="Confirmar">
    </form>

    <form action="index.php">
        <input type="text" name="busqueda" placeholder="Buscar">
        <!-- Enviamos la busqueda -->
        <input type="submit" name="enviar" value="Enviar">
        <!-- Borramos la busqueda-->
        <input type="submit" name="borrar" value="Borrar">
    </form>
    <?php
        if($res == 0){ //Error por si no introducen solo letras
            echo "Parametro no valido";
        }
    ?>
</body>
</html>

