<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlataformasAdmin</title>
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</head>
    <body>
        <nav class="nav-main1">
        <div align="right"><img src="../img/logoo/logoo.png"></div>
            <a href="../php/index.php">Inicio</a>
        </nav>  
        <table border="1" class="table table-dark">
            <tr>
                <th>idPlataforma</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <td> <a href="../insertar.html"><button>Insertar</button></a> </td>
            </tr>

        <?php

        //Cargamos los archivos que vamos a usar

        require "BD/conectorBD.php";
        require "BD/DAOplataforma.php";
        //Nos conectamos a la base de datos y a la consulta

        $conexion = conectar(false);
        $consulta = mostrarconsola($conexion);
        //Recorremos la consulta

        while($mostrar=mysqli_fetch_array($consulta)){

        ?>
            
            <tr>
                <td><?php echo $mostrar['idPlataforma']  ?></td>
                <td><?php echo $mostrar['Nombre']  ?></td>
                <td ><b> <img src="<?php echo $mostrar['Imagen']?>" width="120"> </b></td>
                <td> <button ><a href="modificar.php?IdPlataforma= <?php  echo $mostrar['idPlataforma'];?>" value="modificar" name="modificar">Modificar</button></td>
                <td> <button ><a href="eliminar.php?Idconsola= <?php  echo $mostrar['idPlataforma'];?>" value="eliminar" name="eliminar">Eliminar</button></td>
            </tr>
                <?php
            }
                ?>
        </table>
    </body>
</html>