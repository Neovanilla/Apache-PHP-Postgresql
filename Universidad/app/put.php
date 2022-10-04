<?php

require_once("../config/conexion.php");
$conexion = conectar_PostgreSQL();

$id = $_GET["id"];
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$fechanacimiento = $_GET["fechanacimiento"];


$sql1 = "UPDATE tbl_personas 
         SET (nombre,apellido,fechanacimiento) = ('$nombre','$apellido','$fechanacimiento')  
         WHERE id='$id'";

$post = pg_query($conexion, $sql1);

echo("El registro fue modificado exitosamente");
    
?>