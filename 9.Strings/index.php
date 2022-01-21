<?php
$quien = "Jairo";

echo "Mi nombre es ".$quien."<br>";
echo "Mi nombre es $quien<br>";
echo 'Mi nombre es $quien<br>';
echo "Hola \$jairo<br>";
echo "\x2a<br>"; //muestra un asterisco utilizando notación hexadecimal

echo strlen("Jairo")."<br>"; //devuelve 5
echo strlen("Jairo García")."<br>"; //devuelve 13 (porque las letras con tilde, diéresis o ñ cuentan como 2)
echo strlen("Cigüeña")."<br>"; //devuelve 9
echo strlen("Ñú")."<br>"; //devuelve 4

echo strtr('Jairo', 'i', '1')."<br>"; //devuelve Ja1ro
$numeros = ['i' => '1', 'o' => '0'];
echo strtr("Jairo", $numeros)."<br>"; //devuelve Ja1r0

echo $quien[1]."<br>"; //devuelve a

$string = '123abc';
echo ($string == 123)."<br>"; //devuelve true porque convierte el string a número y se queda solo con 123
echo ($string === 123)."<br>"; //devuelve false porque primero compara el tipo y como no son iguales, devuelve false

$string = 'Hola Jairo';
echo strcmp($string, 'Hola jairo')."<br>"; //devuelve -32, implica que no son iguales
echo strcasecmp($string, 'Hola jairo')."<br>"; //devuelve 0, implica que son iguales porque es insensible a mayúsculas y minúsculas
echo strncmp($string, 'Hola Luís', 5)."<br>"; //devuelve 0, implica que son iguales porque solo comparo los 5 primeros caracteres

$haystack = 'Hola Jairo'; //pajar
$needle = 'a'; //aguja

//Hay que usar el idéntico porque PHP interpreta las cadenas vacías, los 0 y los false como iguales
//y si encuentra la aguja en la posición 0, lo interpretaría como false

if (strpos($haystack, $needle) !== false){
    echo "Texto encontrado en la posición ".strpos($haystack, $needle)."<br>";
}
else{
    echo "Texto no encontrado<br>";
}

echo strpos($haystack, $needle)."<br>"; //devuelve 3, que es donde empieza el texto 'a'
echo strpos($haystack, $needle, 4)."<br>"; //devuelve 6 porque después de la primera 'a', la siguiente está en la posición 6
echo strpos($haystack, $needle, 7)."<br>"; //devuelve false (nada en pantalla) porque después de la segunda 'a' ya no hay más ocurrencias

$haystack = 'Hola Jairo'; //pajar
$needle = 'la'; //aguja

echo strstr($haystack, $needle)."<br>"; //devuelve 'a Jairo'

echo stripos('Hola Jairo', 'hola')."<br>"; //devuelve 0, que es donde empieza la aguja
echo stristr('Hola Jairo', 'j')."<br>"; //devuelve 'Jairo', que es donde empieza la aguja
echo strrpos('Hola Jairo', 'a')."<br>"; //devuelve 6, que es la posición de la primera ocurrencia empezando desde el final

$subject = 'Hola Mundo'; //cadena completa
$search = 'Mundo'; //cadena de búsqueda
$replace = 'Jairo'; //cadena de reemplazo
echo str_replace($search, $replace, $subject)."<br>"; //devuelve 'Hola Jairo'

$subject = 'Hola Mundo'; //cadena completa
$search = ['Hola', 'Mundo']; //array de búsqueda
$replace = ['Hello', 'World']; //array de reemplazo
echo str_replace($search, $replace, $subject)."<br>"; //devuelve 'Hello World'

$reemplazos = 0;
str_replace($search, $replace, $subject, $reemplazos);
echo $reemplazos."<br>"; //devuelve 2, que es el número de reemplazos afectuados

echo substr_replace("Hola Mundo", "Jairo", 5)."<br>"; //Devuelve 'Hola Jairo'

$email = 'jairo@garciarincon.com';
$nombre = substr_replace($email, "", strpos($email, '@'));
echo "Hola $nombre<br>";

$x = '1234567';

echo substr($x, 0, 3)."<br>"; //devuelve '123'
echo substr($x, 1, 1)."<br>"; //devuelve '2'
echo substr($x, -2)."<br>"; //devuelve '67'
echo substr($x, 1)."<br>"; //devuelve '234567'
echo substr($x, -2, 1)."<br>"; //devuelve '6'


