<?php
require_once("../config/conexion.php");
$conexion = conectar_PostgreSQL();

$id = $_GET["id"];

$sql = "SELECT * FROM tbl_personas WHERE id= '$id'";
        $ok = true;
        // Ejecutar la consulta:
         $rs = pg_query( $conexion, $sql );
        if( $rs )
        {
            // Obtener el número de filas:
             if( pg_num_rows($rs) > 0 )
            {
                echo "<p/>LISTADO DE PERSONAS<br/>";
                echo "===================<p />";
                // Recorrer el resource y mostrar los datos:
                 while( $obj = pg_fetch_object($rs) )
                     echo $obj->id." - ".
                     $obj->nombre. " ".
                     $obj->apellido." - ".
                     $obj->fechanacimiento.
                     "<br />";
            }
            else
                echo "<p>No se encontraron personas</p>";
        }
        else
            $ok = false;
        return $ok;
        
        ?>