
<form action="index.php" method="POST">
    <input type="hidden" name="login" value="1"/>
    Usuario: <input type="text" name="usuario"/><br>
    Clave: <input type="password" name="clave"/>
    <input type="submit" value="Acceder" name="acceder"/>
</form>

<form action="index.php" method="POST">
    <p>Escoge los lenguajes de programación que dominas o pretendes dominar en los próximos 12 meses</p>
    <p>
        <label><input type="checkbox" name="lenguajes[]" value="PHP"/>PHP</label>
        <label><input type="checkbox" name="lenguajes[]" value="JavaScript"/>JavaScript</label>
        <label><input type="checkbox" name="lenguajes[]" value="Java"/>Java</label>
        <input type="submit" value="Enviar" name="encuesta"/>
    </p>
</form>

<?php
    //Compruebo que se ha enviado el formulario
    if(isset($_POST['acceder'])){

        //Recojo los datos
        $login = $_POST['login'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $lenguajes = $_POST['lenguajes'];

        //Convierto los lenguajes en un string separados por comas
        $texto = implode(", ",$lenguajes);

        //Muestro los datos
        echo "El valor de login es $login<br>";
        echo "El valor de usuario es $usuario<br>";
        echo "El valor de clave es $clave<br>";
        echo "El valor de lenguajes es $lenguajes<br>";
    }

