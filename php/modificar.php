<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Cargamos los archivos que vamos a usar
require "BD/DAOplataforma.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos
$conexion = conectar(false);
//Obtenemos el apartado que queremos utilizar.
$IdPlataforma = $_GET['IdPlataforma'];
$consulta=mostrarId($conexion,$IdPlataforma);
$mostrar=mysqli_fetch_assoc($consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Consola</title> 
    <link rel="stylesheet" type="text/css" href="../styles/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/logoo.png">
    
           
</head>
<body>
<div class="container1">
    <nav class="nav-main1">
      <a href="index.php"><img src="../img/logoo/logoo.png"></a>
      <a href="adminplataforma.php" class="actionpanel">Atrás</a>
    </nav> 
</div>
<br>
    <div class="row m-0 justify-content-center align-items-center">
    <div class="card">
        <form action="actualizar.php" method="POST" enctype="multipart/form-data">
            <label>Nombre Plataforma</label><br>
            <input type="text" class="" name="Plataforma"require><br>
            <label>Imagen</label><br>
            <input type="file" name="Imagen"><br>
            <input type="hidden" name="Imagen_tmp" value="<?php echo $mostrar['Imagen'] ?>"><br>

            <button type="submit" class="btn btn-primary">Modificar</button><br>
            
            <input type="hidden" name="Idplataforma" value="<?php echo $IdPlataforma ?>">
        </form>
    </div>
    </div>

</body>
</html>