<?php
require_once("../config/conexion.php");
$conexion = conectar_PostgreSQL();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fechanacimiento = $_POST["fechanacimiento"];

$sql1 = "INSERT INTO tbl_personas (id,nombre,apellido,fechanacimiento) VALUES (default,'$nombre','$apellido','$fechanacimiento')";

$post = pg_query($conexion, $sql1);

echo("El registro fue insertado exitosamente a la base de datos");
    
?>