<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Cargamos los archivos que vamos a usar
require "BD/DAOcomentarios.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos
$conexion = conectar(false);
//Obtenemos el apartado que queremos utilizar.
$IdComentarios = $_GET['IdComentarios'];
$consulta=mostrarId($conexion,$IdComentarios);
$mostrar=mysqli_fetch_assoc($consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar C</title> 
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
           
</head>
<body>
    <nav class="nav-main1">
    <div align="right"><img src="../img/logo/logo.png"></div>
        <a href="../php/index.php">Inicio</a>
        <a href="../mapasitio.html">Mapa del sitio</a>
    </nav>  
    <br>
    <div class="contenedor">
    <div class="card" id="cartas" style="width: 18rem;">
    <div class="card-body">
        <form action="actualizar.php" method="POST" enctype="multipart/form-data">
            <label>Nombre Plataforma</label><br>
            <input type="text" class="" name="Plataforma"require><br>
            <label>Imagen</label><br>
            <input type="file" name="Imagen">
            <input type="hidden" name="Imagen_tmp" value="<?php echo $mostrar['Imagen'] ?>">
            <input type="submit" value="Modificar" >
            <input type="hidden" name="Idplataforma" value="<?php echo $IdPlataforma ?>">
        </form>
    </div>
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</body>
</html>