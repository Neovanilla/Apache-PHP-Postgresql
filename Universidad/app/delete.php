<?php

require_once("../config/conexion.php");
$conexion = conectar_PostgreSQL();

$id = $_GET["id"];


$sql1 = "DELETE FROM tbl_personas where id='$id'";

$post = pg_query($conexion, $sql1);

echo("El registro fue borrado exitosamente de la base de datos");
    
?>