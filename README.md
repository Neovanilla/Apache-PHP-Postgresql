# Apache-PHP-Postgresql

Necesita la aplicacion XAMPP version 8.1.10 para funcionar. https://www.apachefriends.org/download.html

Utiliza postgresql version 14 Windows https://www.postgresql.org/download/windows/
Utilizar el script (config/database.txt) para crear la base de datos y luego crear la tabla.

Levantar el servidor apache utilizando XAMPP (Module XAMPP, Action start)
En el modulo apache modificar la configuracion PHP haciendo click en config y luego en PHP.ini
buscar dentro del archivo PHP.ini las siguientes lineas y descomentarlas (Eliminar el ; inicial):
        extension=pdo_pgsql
        extension=pdo_sqlite
        extension=pgsql
        
Una vez descargada la carpeta del codigo en este github, ubircarla dentro del directorio XAMPP\htdocs

Luego desde el navegador, en la barra de direccion copiar la siguiente URL: http://localhost/universidad/index.php



