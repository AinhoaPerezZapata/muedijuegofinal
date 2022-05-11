
<?php

require "BD/DAOUsuarios.php";
require "BD/conectorBD.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles/style2.css">
    <link rel="icon" href="../img/logoo.png">
</head>
<body>
    
<div class="container1">
    <nav class="nav-main1">
	    <a href="index.php"><img src="../img/logoo/logoo.png"></a>
	    <a href="../php/index.php" class="actionpanel">Atrás</a>
    </nav> 
    </div>
    <br>
    <div class="table-responsive">
    <table border="1" class="table table-dark">
        <tr>
            <th>Usuario</th>
            <th>Password</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Telefono</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>CP</th>
            <th>Provincia</th>
            <th>Municipio</th>
            <th>Fecha de Nacimiento</th>
         
        </tr>
        <!-- Recoge los datos de la base de datos -->
        <?php
        $conexion = conectar(false);
         $consultaUsuario = mostrarDatosdeUsuario($conexion,$_SESSION['idUsuario']);
         while ($usuario = mysqli_fetch_assoc($consultaUsuario)){
        ?>
            <tr>
            <td> <?php echo $usuario['Usuario'] ?></td>
            <td> <?php echo $usuario['Password'] ?></td>
            <td> <?php echo $usuario['Nombre'] ?></td>
            <td> <?php echo $usuario['Apellido1'] ?></td>
            <td> <?php echo $usuario['Apellido2'] ?></td>
            <td> <?php echo $usuario['Telefono'] ?></td>
            <td> <?php echo $usuario['DNi'] ?></td>
            <td> <?php echo $usuario['Email'] ?></td>
            <td> <?php echo $usuario['Direccion'] ?></td>
            <td> <?php echo $usuario['CP'] ?></td>
            <td> <?php echo $usuario['Provincia'] ?></td>
            <td> <?php echo $usuario['ComunidadAutonoma'] ?></td>
            <td> <?php echo $usuario['FechaNacimiento'] ?></td>
            <td> <button ><a href="eliminarperfil.php?idUsuario=<?php  echo $usuario['idUsuario'];?>" value="eliminar" name="eliminar">Eliminar usuario</button></td>
            <td> <button ><a href="modificarPerfil.php?idUsuario=<?php  echo $usuario['idUsuario'];?>" value="modificar" name="modificar">Modificar</button></td>
         
            </tr>
            <?php } ?>
              
    </table>

    </div>

</body>
</html>