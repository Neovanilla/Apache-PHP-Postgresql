<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>

<!--Metodo get-->
<div> 
<form class="" action="app/get.php" method= "get">
  <h2>Listar todos los registro</h2>
  <input type="submit" value="Enviar">
    </form>
</div>
 
<!--Metodo get por id-->
<div>
  <h2>Mostar registro por id</h2>
<form class="" action="app/get-id.php" method= "get">
  ID:
    <input type="text" name="id">
      <br><br>
      <input type="submit" value="Enviar">
    </form>
</div>
   
<!--Metodo post-->
<div>
  <h2>Insertar un registro</h2>
<form action="app/post.php" method="post">
      Nombre:
      <br>
      <input type="text" name="nombre">
      <br>
      Apellido:
      <br>
      <input type="text" name="apellido">
      <br><br>
      Fecha de nacimiento:
      <br>
      <input type="date" name="fechanacimiento">
      <br><br>
      <input type="submit" value="Enviar">
    </form>
</div>

<!--Metodo delete-->
<div>
  <h2>Borrar un registro por id</h2>
  <form class="" action="app/delete.php" method= "delete">
    ID:
  <input type="text" name="id">
    <br><br>
    <input type="submit" value="Enviar">
  </form>
</div>

<!--Metodo put-->
  <div>
    <h2>Modificar un registro por id</h2>
  <form action="app/put.php" method="put">
      Nombre:
      <br>
      <input type="text" name="nombre">
      <br>
      Apellido:
      <br>
      <input type="text" name="apellido">
      <br><br>
      Fecha de nacimiento:
      <br>
      <input type="date" name="fechanacimiento">
      <br><br>
      ID:
      <br>
      <input type="text" name="id">
      <br><br>
      <input type="submit" value="Enviar">
    </form>
    <br/>    
  </div>

</body>
</html>