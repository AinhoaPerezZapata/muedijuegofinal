<?php
//Cargamos los archivos que vamos a usar
require "BD/DAOUsuarios.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos
$conexion = conectar(false);
//Obtenemos el apartado que queremos utilizar.
$idUsuario = $_GET['idUsuario'];
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
        <title>Modificar Usuario</title>
    </head>
<body>
    <nav class="nav-main1">
    <div align="right"><img src="../img/logoo/logoo.png"></div>
        <a href="../php/index.php">Inicio</a>
    </nav>  
    <br>
    <form action="actualizarusuario.php" method="POST" enctype="multipart/form-data">
    <p>Rol:<select name="Rol"></p>
        <option value="usuario">Usuario</option>
        <option value="admin">Admin</option>
        </select><br>
        <br>
       <input type="submit" value="Actualizar" name="btnregistrar">
       <input type="hidden"  name="idUsuario" value="<?php echo $idUsuario ?>">
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</body>
</html>
