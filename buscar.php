<?php
    require 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="formu">
        <a class="volver" href="index.php">Regresar</a>
    <form action="select.php" class="formulario" method="GET">
        <div class="casilla"><label for="">Departamento</label>
        <input type="text" name="dato" id="departamento" placeholder="Ingrese el departamento:">
        </div>
    <div class="boton">
        <input type="submit" value="Enviar">
    </div>
    </form>
    </div>
</body>
</html>