<form action="get.php" method="GET">
    Lista: <input type name="text" name="lista">
    Ordernar por:
    <select name="orden">
        <option value="nombre">Nombre</option>
        <option value="ciudad">Ciudad</option>
        <option value="cp">Codigo Postal</option>
    </select>
    Sort order:
    <select name="direccion">
        <option value="asc">Ascendente</option>
        <option value="desc">Descendente</option>
    </select>
    <input type="submit" value="Ver" name="ver"/>
</form>

<?php
    if(isset($_GET['ver'])){
        //Recojo los valores (ASI NO SE HACE)
        /*$lista = $_GET['lista'];
        $orden = $_GET['orden'];
        $direccion = $_GET['direccion'];*/

        //Recojo los valores (ASI SI SE HACE)
        $lista = filter_input(INPUT_GET, 'lista', FILTER_SANITIZE_STRING);
        $orden = filter_input(INPUT_GET, 'order', FILTER_SANITIZE_STRING);
        $direccion = filter_input(INPUT_GET, 'direccion', FILTER_SANITIZE_STRING);

        echo "El valor de lista es $lista<br>";
        echo "El valor de orden es $orden<br>";
        echo "El valor de direccion es $direccion<br>";
    }
    else{
        echo "Haz clic en Ver para te muestre los valores.";
    }






