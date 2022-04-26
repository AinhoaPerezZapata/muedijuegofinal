<?php
//Cargamos los archivos que vamos a usar
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
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <title>Panel de Usuarios</title>
</head>
    <body>
        <header>
        <nav class="nav-main1">
        <div align="right"><img src="../img/logoo/logoo.png"></div>
            <a href="../php/index.php">Inicio</a>
            <a href="../insertarusuario.html?idUsuario=<?php echo $fila['idUsuario']; ?>" value="insertar" name="insertar">Insertar Usuario</a>
        </header>  
        <table class="table table-dark">
            <tr>
                <th>idUsuario</th>
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
                <th>Direccion</th>
                <th>Rol</th>
                <th>DNI</th>
                <th>FechaNacimiento</th>
            </tr>

            <?php
                //Nos conectamos a la base de datos y mostramos en este caso los usuarios

                $conexion = conectar(false);
                $result = mostrarUsuario($conexion);

                    while($fila=mysqli_fetch_assoc($result)){?>

                <tr>
                        <?php 
                        
                            foreach($fila as $key => $value){?>
                                <td> <?= $value ?> </td>
                                <?php
                                    }
                                ?>

                <td><button ><a href="modificarusuario.php?idUsuario= <?php echo $fila['idUsuario'];?>" value="modificar" name="modificar">Modificar</button></td>
                <td><button ><a href="eliminarUsuario.php?idUsuario= <?php echo $fila['idUsuario'];?>" value="eliminar" name="eliminar">Eliminar</button></td>
                    
                </tr>                
                        <?php  
                                }
                        ?>
        </table>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
    </body>
</html>
