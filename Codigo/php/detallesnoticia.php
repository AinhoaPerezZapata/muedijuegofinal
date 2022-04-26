<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

	session_start();

    include "BD/DAOcomentarios.php";
    include 'BD/conectorBD.php';
    include 'BD/DAOUsuarios.php';
	require 'BD/DAONoticia.php';
	$conexion = conectar(false);

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
        <title>Detalles videojuego</title>
        <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    </head>
    <body >
        <nav class="nav-main1">
            <div align="left"><img src="../img/logoo/logoo.png"></div>
            <a href="index.php">Inicio</a>
            <a href="noticiasvj.php">Atras</a>
        </nav> 
        <div class="container">
        <div class="row m-0 justify-content-center align-items-center vh-100">
        <div class="card">

	<?php 
	$idNoticias = $_GET['id'];
	$consulta =  mostrarNoticiaId($conexion, $idNoticias);
    ?>

    <p>
<b>
    <?php
    $fila = mysqli_fetch_assoc($consulta);
    echo $fila["Titulo"];
    ?>
</b>


  
    <div class="">

    <?php if(isset($_SESSION['Rol'])) {
        
    echo $fila['Descripcion'];
        
        }else{

            $cadena = $fila['Descripcion'];
            $subcadena = substr ( $cadena, 0, 450);
            echo $subcadena;
            ?>
            <a href="../login.html"><h3>Inicia sesión para poder ver la noticia al completo!</h3>
            </a>
            <?php
        }
        
    ?>
        <tr><td>
            
    </div> 


    <img src="<?php
    echo $fila['Imagen'];
    ?>">

<br>
    <nav class="">
          <?php if(isset($_SESSION["Usuario"])) {?>
            <form method="POST">
            <label>Escribe un comentario sobre la noticia: </label>
                <input type="text"  id="comentario" name="comentario">
                <br>
                <input name="comentar" value="Enviar comentario" type="submit" class="btn btn-success form-control" style="border: black 2px solid">
            </form>
          <?php 
          } 
          ?>
<br>
<?php
//Si alguien le da al botón de comentar
if(isset($_POST['comentar'])){
    //REcogemos variables del formulario
    $comentario = $_POST['comentario'];
    $idNoticias = $_GET['id'];
    $usuario = $_SESSION['idUsuario'];

    //Nos conectamos a la base de datos y a la consulta
    $consulta = "INSERT INTO `comentarios` (`idNoticias`, `idUsuario`, `contenido`, `estado`) VALUES ('$idNoticias', '$usuario', '$comentario', 'Revision')";
    $resultado = mysqli_query($conexion, $consulta);

    //Recorremos la consulta
    if($resultado){
    echo "<script>alert('Tu comentario se ha mandado correctamente.')</script>";

        } else {
        echo('no funciona');

        }
    }
?>

<div class="card">
<p class="bg-info fs-4 text-center text-uppercase" style="border: 2.5px solid black">Comentarios</p>
                <div style="border: 2.5px solid black">
                    <?php

                        $consulta = mostrarComentariosAprobados($conexion, $idNoticias);

                        while($row_comentarios = mysqli_fetch_array($consulta)){

                            $fecha = $row_comentarios['fecha'];

                            $comentario = $row_comentarios['contenido'];

                            $idUsuario = $row_comentarios['idUsuario'];

                            $get_usuarios = mostrarPerfil($conexion, $idUsuario);

                            $row_usuarios = mysqli_fetch_assoc($get_usuarios);

                            $Usuario = $row_usuarios['Usuario'];


                    ?>
    <br>
    
<div align="center">
    <header>
        <strong><?php echo $Usuario ?></strong> - <span><?php echo $fecha; ?></span>
    </header>
</div>

    <p class="text-center">
        <?php echo $comentario; ?>
    </p>
    
    <?php
        }
    ?>
</div>
</div>
    <br>
</body>
</html>
