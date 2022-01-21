<?php
//9. Añade un formulario sencillo que permita borrar la cookie
// y recargar la página.

//Compruebo que aún no existe
if (!isset($_COOKIE['micookie'])){

    //Set cookie por 1 día
    setcookie("micookie","Hola, soy tu amigo cookie por 1 día", time() + 86400);

    echo "La cookie se ha creado.<br><a href='ejercicio9.php'>Recarga la página</a>";
}
else{
    echo "La cookie tiene el valor ".$_COOKIE['micookie'];
?>
    <form>
        <input type="submit" name="borrar"
               style="background-color: red"
               value="Borrar cookie">
    </form>

<?php
    if (isset($_GET['borrar'])){
        //Borro la cookie
        setcookie("micookie","",-1);
        //Recargo la página
        header("Location:ejercicio9.php");
    }
}

?>

