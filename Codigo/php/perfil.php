
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
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
</head>
<body>
   <nav class="nav-main1">
    <div align="right"><img src="../img/logoo/logoo.png"></div>
    <a href="../php/index.php">Inicio</a> 
    <a href="index.php">Atras</a>
    </nav> 

    <table border="1" class="table table-dark">
        <tr>
            <th>Usuario</th>
            <th>Password</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>CP</th>
            <th>Provincia</th>
            <th>ComunidadAutonoma</th>
            <th>Rol</th>
         
        </tr>
        <!-- Recoge los datos de la base de datos -->
        <tr>
            <td> <?php echo $_SESSION['Usuario'] ?></td>
            <td> <?php echo $_SESSION['Password'] ?></td>
            <td> <?php echo $_SESSION['Nombre'] ?></td>
            <td> <?php echo $_SESSION['Apellido1'] ?></td>
            <td> <?php echo $_SESSION['Apellido2'] ?></td>
            <td> <?php echo $_SESSION['Telefono'] ?></td>
            <td> <?php echo $_SESSION['Email'] ?></td>
            <td> <?php echo $_SESSION['CP'] ?></td>
            <td> <?php echo $_SESSION['Provincia'] ?></td>
            <td> <?php echo $_SESSION['ComunidadAutonoma'] ?></td>
            <td> <?php echo $_SESSION['Rol'] ?></td>
            <td> <button ><a href="eliminarperfil.php?idUsuario=<?php  echo $_SESSION['idUsuario'];?>" value="eliminar" name="eliminar">Eliminar usuario</button></td>
            <td> <button ><a href="modificarPerfil.php?idUsuario=<?php  echo $_SESSION['idUsuario'];?>" value="modificar" name="modificar">Modificar</button></td>
        <tr> 
            </tr>               
    </table>

    </div>

</body>
</html>