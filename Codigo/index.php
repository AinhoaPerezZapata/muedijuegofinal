<?php
session_start();
//print'<pre>';
//print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mundijuegos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- carrusel -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../styles/estilos.css">

</head>
<body>
<div class="container">
<div class="container-fluid">
    <nav class="nav-main1">
      <img src="../img/logoo/logoo.png" class="nav-brand">
          <?php if(!isset($_SESSION["Usuario"])) {?>
            <a href="../login.html">Iniciar Sesión</a>
            <a href="../ingresar_usuario.html">Registrarse</a>
            <form action="buscador.php" method="post">

          <?php } 
          ?>
          <?php if($_SESSION["Rol"]=="usuario") {?>
            <a href="perfil.php">Perfil</a>
            <a href="desloguear_usuario.php">Cerrar Sesion</a>
          <?php }
          ?>
      <!-- Busqueda -->
      <form action="buscador.php" method="post">
	    <input type="text" name="Buscar">
	    <button type="submit" name="submit">Buscar</button>
	    </form>
    </nav>
<hr>
<nav class="nav-main3">
<?php if($_SESSION["Rol"]=="admin") {?>

<a href="panel.php">Usuarios</a>
<a href="adminplataforma.php">Plataformas</a>
<a href="adminnoticias.php">Noticias</a>
<a href="comprobar_comentario.php">Comentarios</a>
<a href="desloguear_usuario.php">Cerrar Sesion</a>
<?php }
?>
</nav>
    <!-- Banner -->
    <header class="banner1">
      <h1>BIENVENIDOS A MUNDIJUEGOS!</h1>
      <br></br>
      <h1>Aquí encontrarás todas las noticias y las últimas novedades en videojuegos.</h1>
      <h1>En Mundijuegos recopilamos cada día y minuto a minuto toda la actualidad del mundo de los videojuegos y sus diferentes plataformas para que siempre estés al corriente de la última actualización o contenido relacionado con tus títulos preferidos.</h1>
    </header>
      <section class="contacto row justify-content-center">
        <div class="col-12 col-md-9 text-center">
          <h2><span>Plataformas en las que encontrarás noticias</span></h2>
        </div>
      </section>
    <nav class="nav-main2">
        <li>
          <a href="noticiasvj.php">PC</a>
        </li>
        <li>
          <a href="noticiasplay.php">Playstation</a>
        </li>
        <li>
          <a href="noticiasxbox.php">Xbox</a>
        </li>
        <li>
          <a href="noticiasnintendo.php">Nintendo</a>
        </li>
      </ul>
    </nav>
    <hr>
    
        <div class="container">
        <section class="contacto row justify-content-center">
        <div class="col-12 col-md-9 text-center">
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <?php
              require "BD/conectorBD.php";
              require "BD/DAOplataforma.php";
              //Creamos la conexión a la BD.
              $conexion = conectar(false);
              
              //Lanzamos la consulta.
              $consulta = consultaPlataforma($conexion);
              $i = 0;
              while($fila = mysqli_fetch_assoc($consulta))
              {
            ?>
          <div class="item <?php echo ($i == 0) ? 'active' : '';?>">
            <img src="<?php echo $fila['Imagen'];?>" alt="Plataforma" style="width:100%; height:80%;">
          </div>
            <?php
              $i++;
              }
            ?>
        </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><!--boton para la izquierda -->
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><!--Boton para la derecha-->
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
    </div>
<hr>
        <section class="contacto row justify-content-center">
          <div class="col-12 col-md-9 text-center">
            <h2><span>↓↓¡Noticias destacadas de la semana!↓↓</span></h2>
            <hr>
          </div>
        </section>
    <!-- Card Banner 1-->
<?php
    require "BD/DAONoticia.php";
    //Creamos la conexión a la BD.
    $conexion = conectar(false);
              
    //Lanzamos la consulta.
     $consulta = actualizarNoticias($conexion);
    $i = 1;
    while($mostrarNoticias = mysqli_fetch_assoc($consulta))
      if ($i<6) {
    {
    ?>
        <section class="cards-banner-one">
              <div class="content">
                <h1><?php echo $mostrarNoticias['Titulo'] ?></h1>
                <a href="detallesnoticia.php?id=<?php echo $mostrarNoticias['idNoticias'] ?>"class="btn">Leer mas <i class="fas fa-angle-double-right"></i></a>
              </div>
        </section>
    <?php
    }
      $i++;
      }
    ?>

    <hr>
        <section class="cards-banner-one">
      <div class="content">
      <section class="contacto row justify-content-center">
                <div class="col-12 col-md-9 text-center">
                    <h2><span>Video Destacado de la semana</span></h2>
                </div>
      </section>
        <!-- lorem 20 -->
        <p>20 PRÓXIMOS JUEGOS PS4/PS5/XBOX ONE/SERIES X/PC PARA 2021<p>
        <div style= text-align:center;><iframe width="850" height="400"  src="https://www.youtube.com/embed/eE0NoRDXpsY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <hr>


  <!-- Footer -->
  <footer class="footer">
  <div class="container-fluid">
    <section class="contacto row justify-content-center">
      <div class="col-12 col-md-9 text-center">
        <img src="../img/logoo/logoo.png" class="nav-brand">
  <hr>
  </div>
    <section class="social">
    <section class="contacto row justify-content-center">
      <div class="col-12 col-md-9 text-center">
        <h1><span>Redes sociales</span></h1>
      <br>
      </div>
                
    </section>

      <div class="links">
        <a href="https://facebook.com">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://linkedin.com">
          <i class="fab fa-linkedin"></i>
        </a>

      </div>
      <br>
      <p>
        <h1>Teléfono: 952678462</h1>
      </p>
      </section>
      <nav class="nav-main4">
        <li>
          <a href="noticiasvj.php">PC</a>
        </li>
        <li>
          <a href="noticiasplay.php">Playstation</a>
        </li>
        <li>
          <a href="noticiasxbox.php">Xbox</a>
        </li>
        <li>
          <a href="noticiasnintendo.php">Nintendo</a>
        </li>
      </ul>
    </nav>


            <iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.649031960611!2d-2.9481130486872074!3d35.28985138019059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77058d3fb51753%3A0x3655270d62269458!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Ies%20Leopoldo%20Queipo!5e0!3m2!1ses!2ses!4v1613159446977!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <div class="w-100 mb-4"></div>
            <p class="border-bottom border-top">
              <h1>Mundijuegos Copyright</h1>
            </p>   
  </div>
  </footer>

  <!-- Scroll Reveal -->
  <script src="../js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>