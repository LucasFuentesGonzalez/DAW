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

        Sexo:<br>
        <input type="radio" id="sexo" name="M" > M   <br>
        <input type="radio" id="sexo" name="H" > H <br>
        <input type="radio" id="sexo" name="Otro" > Otro <br>

    <br>
        Idiomas:<br>
        <label><input type="checkbox" name="idiomas" value="Español"/>Español</label>
        <label><input type="checkbox" name="idiomas" value="Ingles"/>Ingles</label>
        <label><input type="checkbox" name="idiomas" value="Frances"/>Frances</label>
        <label><input type="checkbox" name="idiomas" value="Aleman"/>Aleman</label>
        <label><input type="checkbox" name="idiomas" value="Mandarin"/>Mandarin</label>
        Otros: <input type="text" name="otros" placeholder="Otros idiomas"/>

        <br><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>


<?php

//Compruebo que he enviado el formulario
if(isset($_POST['enviar'])){

    //Recojo los valores
    $empresa = filter_input(INPUT_GET, 'empresa', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_GET, 'sexo', FILTER_SANITIZE_STRING);
    $idiomas = $_POST['idiomas'];
    $otros = filter_input(INPUT_GET, 'idiomas', FILTER_SANITIZE_STRING);


    //Convierto los idiomas en un string separados por comas
    $texto_idiomas = implode(", ",$idiomas);
    //Le añado otros idiomas (si hay)
    $texto_idiomas = ",".$otros;

    //Texto con todos los valores
    // \n es un salto de linea en el fichero
    $texto_salida = "";
    $texto_salida = "El valor de empresa es $empresa\n";
    $texto_salida = "El valor de email es $email";
    $texto_salida = "El valor de password es $password";
    $texto_salida = "El valor de sexo es $sexo";
    $texto_salida = "El valor de idiomas $texto_idiomas";

    //Guardo en un fichero
    $ruta = "../formularios/img/datos.txt";
    //w para escribir al principio, + para crearlo si no existe
    $fichero = fopen($ruta, "w+");
    fwrite($fichero, $texto_salida);
    fclose($fichero);


    //Muestro el texto de salida en pantalla
    //nl2br convierte \n a br en html
    echo nl2br($texto_salida);

}
else{
    echo "Haz clic en Enviar para ver los valores.";
}
?>

