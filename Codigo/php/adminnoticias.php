<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoticiasAdmin</title>
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
    
</head>
    <body>
        <nav class="nav-main1">
        <div align="right"><img src="../img/logoo/logoo.png"></div>
            <a href="../php/index.php">Inicio</a>
        </nav>  
        <table border="1" class="table table-dark">
            <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Plataforma</th>
                <td> <a href="../insertarNoticia.html"><button>Insertar</button></a> </td>
            </tr>

            <?php
            //Cargamos los archivos que vamos a usar

            require "BD/conectorBD.php";
            require "BD/DAONoticia.php";
            //Nos conectamos a la base de datos y a la consulta

            $conexion = conectar(false);
            $consulta =  mostrarNoticias($conexion);
            //Recorremos la consulta

            while($mostrar=mysqli_fetch_array($consulta)){

            ?>
        
             <tr>
                <td><?php echo $mostrar['Titulo']  ?></td>
                <td><?php echo $mostrar['Descripcion']  ?></td>
                <td><img   src="<?php echo $mostrar['Imagen']  ?>" width="120"></td>
                <td><?php echo $mostrar['NombreP']  ?></td>
                <td> <button ><a href="modificarNoticia.php?IdNoticias= <?php  echo $mostrar['idNoticias'];?>" value="modificar" name="modificar">Modificar</button></td>
                <td> <button ><a href="eliminarNoticia.php?IdNoticias= <?php  echo $mostrar['idNoticias'];?>" value="eliminar" name="eliminar">Eliminar</button></td>
            </tr>
                <?php
            }
         
                ?>
            </table>
            </div>
    </body>
</html>