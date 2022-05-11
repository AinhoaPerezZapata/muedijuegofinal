<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComprobarComentario</title>
    <link rel="stylesheet" type="text/css" href="../styles/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
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
                <th>idComentarios</th>
                <th>idNoticias</th>
                <th>idUsuario</th>
                <th>Contenido</th>
                <th>Estado</th>
            </tr>

        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        //Cargamos los archivos que vamos a usar

        require "BD/conectorBD.php";
        require "BD/DAOcomentarios.php";
    
        //Nos conectamos a la base de datos y a la consulta

        $conexion = conectar(false);
        $consulta = mostrarComentariosAprobados($conexion);
        
        //Recorremos la consulta

        while($mostrar=mysqli_fetch_array($consulta)){

        ?>
            
            <tr>
                <td><?php echo $mostrar['idcomentarios']  ?></td>
                <td><?php echo $mostrar['idNoticias']  ?></td>
                <td><?php echo $mostrar['idUsuario']  ?></td>
                <td><?php echo $mostrar['contenido']  ?></td>
                <td><?php echo $mostrar['estado']  ?></td>
                <td> <button ><a href="aceptarcomentario.php?idcomentarios= <?php  echo $mostrar['idcomentarios'];?>" value="aceptar" name="aceptar">Aceptar</button></td>
                <td> <button ><a href="eliminarcomentario.php?idcomentarios= <?php  echo $mostrar['idcomentarios'];?>" value="eliminar" name="eliminar">Eliminar</button></td>
            </tr>
                <?php
            }
                ?>
        </table>
        </div>
        
    </body>
</html>