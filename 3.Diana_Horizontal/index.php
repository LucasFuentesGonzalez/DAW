
<!--Incluye el documento logica-->
<?php include "logica.php"?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Diana horizontal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"
</head>

<body>
<h1>Juego de la diana horizontal</h1>
<?php if ($diana){ ?>
    <p class="<?php echo $clase ?>">
        <?php echo $texto ?>
    </p>
    <p>
        <a href="index.php">Volver a jugar </a>
    </p>
<?php } else { ?>
<p>
    Selecciona el nivel y pulsa en el centro de la diana para jugar.
</p>
<div>
    <input type="button" id="Cambiar nivel 1" value="Nivel 1: 100%">
    <input type="button" id="Cambiar nivel 2" value="Nivel 2: 50%">
    <input type="button" id="Cambiar nivel 3" value="Nivel 3: 10%">
</div>

<form>
    <input type="range" min="0" max="100" name="diana" value="0" id="diana"
           onchange="this.form.submit()">

</form>
</body>
</html>