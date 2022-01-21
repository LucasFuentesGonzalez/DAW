<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios</title>
    </head>
    <body>
    <h1>Formulario</h1>
        <form action="index.php" method="get">
            Empresa: <input type="text" name="empresa" placeholder="Empresa"><br><br>
            Email: <input type="text" name="email" placeholder="Email"><br><br>
            Password: <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit" name="enviar" value="Enviar"><br><br>
        </form>
    </body>
</html>


<?php

//Compruebo que he enviado el formulario
if(isset($_GET['enviar'])){

    //Recojo los valores
    $empresa = filter_input(INPUT_GET, 'empresa', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING);

    //Muestro los valores
    echo "El valor de lista es $empresa<br>";
    echo "El valor de orden es $email<br>";
    echo "El valor de direccion es $password<br>";
}
else{
    echo "Haz clic en Enviar para ver los valores.";


}
?>

