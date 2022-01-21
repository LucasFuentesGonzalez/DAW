<h1>Cookies</h1>
<?php
//1. Nombre de la cookie
//2. Valor de la cookie
//3. Fecha de caducidad de la cookie (en tiempo)
//1 dia = 24 x 60 x 60 = 86400

setcookie("nombre", "Jairo", time() + 86400); //Almacena la cookie 1 día
//setcookie("temporal", "10 segundos", time() + 10); //Almacena la cookie 10 segundos
setcookie("nombre", "", -1);

if (ISSET($_COOKIE["nombre"])){
    echo "La cookie existe";
}
else{
    echo "La cookie no exite";
}

