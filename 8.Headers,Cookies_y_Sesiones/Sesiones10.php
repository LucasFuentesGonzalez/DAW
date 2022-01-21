<?php
//10. Genera un formulario sencillo que recoja tu nombre,
// lo almacene en sesión y, al abrir otro archivo php
// mediante un enlace, muestre tu nombre recuperando dicha variable.

//Inicio la sesión
session_start();
?>
<form>
    <input type="text" name="nombre" placeholder="Introduce tu nombre"><br>
    <input type="submit" name="enviar" value="Enviar">
    <input type="submit" name="borrar" value="Borrar sesión">
</form>

<?php
    if (isset($_GET["enviar"])){
        //Recojo el valor de nombre
        $nombre = filter_input(INPUT_GET,"nombre",FILTER_SANITIZE_STRING);
        //Lo guardo en la sesión
        $_SESSION['nombre'] = $nombre;
        echo "He guardado el nombre en sesión. Pincha <a href='ejercicio10-2.php'>AQUÍ</a> para comprobarlo";
    }

    if (isset($_GET["borrar"])){
        //Borro la sesión
        session_destroy();
        //La inicio de nuevo
        session_start();
        echo "He reseteado la sesión. Pincha <a href='ejercicio10-2.php'>AQUÍ</a> para comprobarlo";
    }
