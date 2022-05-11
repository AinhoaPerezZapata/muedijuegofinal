<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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
    <title>Modificar Perfil</title>
    <link rel="stylesheet" type="text/css" href="../styles/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <link rel="icon" href="../img/logoo.png">

</head>
    <body>
    <div class="container1">
    <nav class="nav-main1">
	    <a href="index.php"><img src="../img/logoo/logoo.png"></a>
	    <a href="../php/perfil.php" class="actionpanel" >Atrás</a>
    </nav> 
    </div>
    <br>
            <div class="row m-0 justify-content-center align-items-center">
            <div class="card">
                <form action="actualizarperfil.php" method="POST" enctype="multipart/form-data">
                    <label>Usuario</label><br>
                    <input type="text" class="" name="Usuario"require><br>
                    <label>Password</label><br>
                    <input type="password" class="" name="Password"require><br>
                    <label>Nombre</label><br>
                    <input type="text" class="" name="Nombre"require><br>
                    <label>Primer Apellido</label><br>
                    <input type="text" class="" name="Apellido1"require><br>
                    <label>Segundo Apellido</label><br>
                    <input type="text" class="" name="Apellido2"require><br>
                    <label>Telefono</label><br>
                    <input type="number" class="" name="Telefono"require><br>
                    <label>Email</label><br>
                    <input type="email" class="" name="DNi"require><br>
                    <label>DNI</label><br>
                    <input type="text" class="" name="Email"require><br>
                    <label>Direccion</label><br>
                    <input type="text" class="" name="Direccion"require><br>
                    <label>CP</label><br>
                    <input type="number" class="" name="CP"require><br>
                    <label>Provincia</label><br>
                    <input type="text" class="" name="Provincia"require><br>
                    <label>Comunidad Autonoma</label><br>
                    <input type="text" class="" name="ComunidadAutonoma"require><br>
                    <label>Fecha de Nacimiento</label><br>
                    <input type="date" id="start" name="FechaNacimiento" value="2018-07-22" min="2018-01-01" max="2018-12-31"><br><br>

                    <button type="submit" class="btn btn-primary">Modificar</button><br>
                    <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>">
                </form>
                </div>
                </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
    </body>
</html>