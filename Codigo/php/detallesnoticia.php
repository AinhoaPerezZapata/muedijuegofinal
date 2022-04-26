<?php

	session_start();
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
            <div align="left"><img src="../img/logo/logo.png"></div>
            <a href="index.php">Inicio</a>
        </nav> 
        <div class="container">
        <div class="row m-0 justify-content-center align-items-center vh-100">
        <div class="card">

	<?php 
	require 'BD/conectorBD.php';
	require 'BD/DAONoticia.php';
	$conexion = conectar(false);
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

    <hr>

    <div class="">

    <?php if($_SESSION["Rol"]=="usuario" ||$_SESSION["Rol"]=="admin" ) {
        
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
    <nav class="nav-main1">
          <?php if(!isset($_SESSION["Usuario"])) {?>

          <?php } 
          ?>
          <?php if($_SESSION["Rol"]=="usuario") {?>
            <a href="perfil.php">Perfil</a>
            <a href="desloguear_usuario.php">Cerrar Sesion</a>
          <?php }
          ?>
          <?php if($_SESSION["Rol"]=="admin") {?>
            <a href="perfil.php">Perfil</a>
            <a href="desloguear_usuario.php">Cerrar Sesion</a>
          <?php }
          ?>
    </p>
        </div>
    <br>
    <div class="container-fluid">
            <section class="contacto row justify-content-center">
                <div class="col-12 col-md-9 text-center">
                    <h2 class="subtitulo"><span>Contactanos</span></h2>
                </div>

                <iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.649031960611!2d-2.9481130486872074!3d35.28985138019059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77058d3fb51753%3A0x3655270d62269458!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Ies%20Leopoldo%20Queipo!5e0!3m2!1ses!2ses!4v1613159446977!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <div class="w-100 mb-4"></div>
                <div>
                    <p class="border-bottom border-top">
                        <img src="../img/icons/icon-cellphone.png" alt="">Teléfono: 952678462
                    </p>
                </div>
            </section>

            <footer class="row justify-content-center redes-sociales">
                <div class="col-auto">
                    <a href="https://www.facebook.com"><img src="../img/icons/facebook.png" alt=""></a>
                    <a href="https://twitter.com/?lang=es"><img src="../img/icons/twitter.png" alt=""></a>
                    <a href="https://www.instagram.com"><img src="../img/icons/instagram-new.png" alt=""></a>
                </div>
            </footer>
    </div>
    </body>
</html>
