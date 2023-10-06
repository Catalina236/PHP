<?php
$conexion=mysqli_connect("localhost","root","","registro_departamentos");
if (!$conexion){
    echo 'Ocurrió un error al conectar la base de datos';
}
else{
    //echo 'Conexión exitosa.';
    return $conexion;
}
?>