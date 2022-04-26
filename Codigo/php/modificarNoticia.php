<?php
//Cargamos los archivos que vamos a usar
require "BD/DAONoticia.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos
$conexion = conectar(false);
//Obtenemos el apartado que queremos utilizar.
$IdNoticias = $_GET['IdNoticias'];
$consulta=mostrarNoticiaId($conexion, $IdNoticias);
$mostrar=mysqli_fetch_assoc($consulta);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Noticia</title>
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
    
</head>
<body>
<header>

   <nav class="nav-main1">
    <div align="right"><img src="../img/logoo/logoo.png"></div>
    <a href="../php/index.php">Inicio</a>
    </nav>

    <div class="contenedor">
    <div class="card" id="cartas" style="width: 30rem;">
    <div class="card-body">
      <form action="actualizarNoticia.php" method="POST" enctype="multipart/form-data"require>
        <a>Titulo</a><br>
      <input type="text" class="" id ="Titulo" name="Titulo" require><br>
        <a>Descripcion</a><br>
      <input type="text" class="" id="Descripcion" name="Descripcion"require><br>
        <a>Imagen</a><br>
      <input type="file" class="" id="Imagen" name="Imagen"><br>
      <input type="hidden" name="Imagen_tmp" value="<?php echo $mostrar['Imagen'] ?>">
        <a>Plataforma</a><br>
      <input type="text" class="" id="Plataforma" name="Plataforma"require><br>
        <a>Nombre Plataforma</a><br>
      <input type="text" class="" id="NombreP"name="NombreP"require><br>
    <input type="submit" value="Modificar" require>
    <input type="hidden" name="IdNoticias" value="<?php echo $IdNoticias ?>">

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</body>
</html>