<?php

function conectar_PostgreSQL()
    {
        $host ="localhost";
        $dbname ="Universidad";
        $user ="postgres";
        $password ="3772826qQ"; 
        $con = null;

        try
        {
            $con = pg_connect( "host=$host dbname=$dbname user=$user password=$password "
                           ) or die( "Error al conectar: ".pg_last_error() );
           if(!$con)
                 throw new Exception( "Error PostgreSQL ".pg_last_error() );
        }
        catch( Exception $e )
        {
             throw $e;
        }
        return $con;
    }          
    
?>