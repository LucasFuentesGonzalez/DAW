<h1>Ejercicio 1</h1>
<p style="color:red">
    Muestra por pantalla el texto: El comando c:\*.* no es correcto y en mi reloj son la 12 "o'clock"
</p>
<?php
    echo "El comando c:\*.* no es correcto y en mi reloj son la 12 \"o'clock\"<br>";
    echo 'El comando c:\*.* no es correcto y en mi reloj son la 12 "o\'clock"<br>';
?>

<h1>Ejercicio 2</h1>
<p style="color:red">
    Escribe tu nombre completo y dos apellidos en una línea. En la siguiente, sustituye las vocales e,i,o por los
    números 3,1,0, respectivamente. Si hay alguna 's', sustitúyela por el número '5'
</p>
<?php
    $nombre = "Jairo García Rincóns";
    $numeros = [
        'e' => '3',
        'i' => '1',
        'o' => '0',
        'é' => '3',
        'í' => '1',
        'ó' => '0',
        's' => '5'
    ];
    echo strtr($nombre, $numeros)."<br>";
?>

<h1>Ejercicio 3</h1>
<p style="color:red">
    Escribe tu nombre completo y dos apellidos en una línea. En la siguiente, sustituye todas tildes y diéresis
    (si las hay) por su correspondiente vocal sin tilde ni diéresis. Si alguna 'ñ', sustitúyela por una 'n'
</p>
<?php
    $sin_tildes = [
        'á' => 'a',
        'é' => 'e',
        'í' => 'i',
        'ó' => 'o',
        'ú' => 'u',
        'ü' => 'u',
        'ñ' => 'n',
    ];
    echo strtr("cigüeña marrón",$sin_tildes)."<br>";
?>

<h1>Ejercicio 4</h1>
<p style="color:red">
    Escribe una función que transforme una frase a mayúsculas
</p>
<?php
    function mayusculas($string){
        //return strtoupper($string);
        return mb_strtoupper($string,"utf-8");
    }
    echo mayusculas("Jairo García Rincón")."<br>";
?>

<h1>Ejercicio 5</h1>
<p style="color:red">
    Escribe una función que transforme una frase a minúsculas
</p>
<?php
    function minusculas($string){
        //return strtolower($string);
        return mb_strtolower($string,"utf-8");
    }
    echo minusculas("JAIRO GARCÍA RINCÓN")."<br>";
?>

<h1>Ejercicio 6</h1>
<p style="color:red">
    a) Escribe una función que transforme la primera letra de una frase a mayúsculas
</p>
<?php
    function primeraMayusculas($string){
        return ucfirst($string);
    }
    echo primeraMayusculas("jairo garcía rincón")."<br>";
?>
<p style="color:red">
    b) Modifica la anterior para que transforme la primera letra de la frase a minúsculas
</p>
<?php
    function primeraMinusculas($string){
        return lcfirst($string);
    }
    echo primeraMinusculas("Jairo García Rincón")."<br>";
?>

<h1>Ejercicio 7</h1>
<p style="color:red">
    Escribe una función que transforme la primera letra de cada palabra de una frase a mayúsculas
</p>
<?php
    function primeraDeCadaMayusculas($string){
        return ucwords($string);
    }
    echo primeraDeCadaMayusculas("jairo garcía rincón")."<br>";
?>

<h1>Ejercicio 8</h1>
<p style="color:red">
    Escribe una función que convierta el string 15061974 en 15/06/1974
</p>
<?php
    function formatoFecha($string){
        $dia = substr($string,0,2);
        $mes = substr($string,2,2);
        $anyo = substr($string,4);
        return "$dia/$mes/$anyo";
    }
    echo formatoFecha("15061974")."<br>";
?>

<h1>Ejercicio 9</h1>
<p style="color:red">
    Escribe una función que extraiga el nombre del fichero de una ruta
    (Ejemplo, 'https://www.jairogarciarincon.com/carpeta1/index.php' debe devolver 'index.php'
</p>
<?php
    function nombreFichero($string){
        $posicion = strrpos($string,"/");
        return substr($string,$posicion+1);
    }
    echo nombreFichero('https://www.jairogarciarincon.com/carpeta1/tienda.php')."<br>";
?>

<h1>Ejercicio 10</h1>
<p style="color:red">
    Escribe una función que extraiga el nombre de usuario de una dirección de email
    (Ejemplo jairo@garciarincon.com debe devolver jairo)
</p>
<?php
    function nombreUsuario($string){
        $posicion = strpos($string,"@");
        return substr_replace($string,"",$posicion);
    }
    echo nombreUsuario("jairo@garciarincon.com")."<br>";
?>

<h1>Ejercicio 11</h1>
<p style="color:red">
    Escribe una función que devuelva la letra o número siguiente al introducido (Ejemplo, si la muestra es 'a',
    debe devolver 'b'. Si la muestra es '4', debe devolver '5')
</p>
<?php
    //TODO LUNES 15/10
?>

<h1>Ejercicio 12</h1>
<p style="color:red">
    Escribe una función que devuelva la primera palabra de una frase
</p>
<?php
    function primeraPalabra($string){
        $posicion = strpos($string," ");
        return substr_replace($string,"",$posicion);
    }
    echo primeraPalabra("Jairo García Rincón")."<br>";
?>
