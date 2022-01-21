<?php
    //Inicializo el valor de mensaje
    $mensaje="";

    //Si se ha enviado el form
    if(isset($_GET['enviar'])) {

        //Si tengo que borrar la cookie
        if ($_GET['enviar'] == "Aceptar") {

            //Seteo la cookie (si el valor no esta vacio)
            $galleta = filter_input(INPUT_GET, 'galleta', FILTER_SANITIZE_STRING);
            if ($galleta){
                //Almacena la cookie 1 día
                setcookie("galleta", $galleta, time() + 86400);
                //Recargo la pagina
                header("Location:tienda.php");
            }
            else {
                $mensaje = "No has introducido un valor para la cookie";
            }
        }

        //Si tengo que borrar la cookie
        else if ($_GET['enviar'] == "Reiniciar") {
            //Borra la cookie
            setcookie("galleta", "", -1);
            //Recargo la pagina
            header("Location:cookies2.php");
        }
    }

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>
    <p>Introduce el valor de la cookie y haz clic en Aceptar (o haz clic en Reiniciar para borrarla)</p>
    <p style="color:red"><?php echo $mensaje ?></p>

    <form>
        <label>Cookie: </label>
        <?php if (isset($_COOKIE['galleta']) && $_COOKIE['galleta']){ ?>
            <?php echo $_COOKIE['galleta']?><br><br>
        <input type="submit" name="enviar" value="Reiniciar">
        <?php } else { ?>
        <input type="text" name="galleta"><br><br>
        <input type="submit" name="enviar" value="Aceptar">
        <?php } ?>
    </form>


</body>
</html>

