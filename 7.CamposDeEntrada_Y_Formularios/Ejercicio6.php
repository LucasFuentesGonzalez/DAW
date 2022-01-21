<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Subida de ficheros</title>
    </head>

    <body>
        <form enctype="multipart/form-data" action="index.php" method="post">
            <input type="file" name="archivo"/>
            <input type="submit" name="Enviar" value="Enviar">
        </form>



    </body>
</html>


<?php


if (isset($_POST['Enviar'])){
    //Guardo el archivo en la variable $archivo_recibido
    $archivo_recibido = $_FILES['archivo'];
    print_r($archivo_recibido);

    //Defino el directorio de subida
    $directorio_subida = 'C:\xampp\htdocs\Ejercicios\formularios\img';

    //Le encadeno el nombre del fichero
    $archivo_subido = $directorio_subida . basename($archivo_recibido['name']."-001");

    //Subo el fichero
    //is_upload_file comprueba que se ha subido al directorio temporal
    //move_uploaded_file comprueba que lo ha podido guardar en la ruta definitiva
    if (is_uploaded_file($archivo_recibido['tmp_name']) AND
        move_uploaded_file($archivo_recibido['tmp_name'], $archivo_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "Se ha producido un error al subir el archivo.\n";
    }
}


?>