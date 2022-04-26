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
  <link rel="icon" type="image/png" href="../img/logo/logo.png">
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
    <nav class="nav-main1">
      <img src="../img/logo/logo.png">
          <?php if(!isset($_SESSION["Usuario"])) {?>
            <a href="../login.html">Iniciar Sesión</a>
            <a href="../ingresar_usuario.html">Registrarse</a>
	    <form action="buscador.php" method="post">
	<input type="text" placeholder="Buscar" name="Buscar">
	<button type="submit" name="submit">Buscar</button>
	</form>

          <?php } 
          ?>
          <?php if($_SESSION["Rol"]=="usuario") {?>
            <a href="perfil.php">Perfil</a>
            <a href="desloguear_usuario.php">Cerrar Sesion</a>
          <?php }
          ?>
            <?php if($_SESSION["Rol"]=="admin") {?>
            <a href="panel.php">Panel de usuarios</a>
            <a href="adminplataforma.php">Plataformas</a>
            <a href="adminnoticias.php">Noticias</a>
            <a href="desloguear_usuario.php">Cerrar Sesion</a>

          <?php }
          ?>
      <!-- Busqueda -->

	</nav>
    <hr>
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
    <!-- Banner -->
    <header class="banner1">
      <h2>Bienvenid@ a MUNDIJUEGOS!</h2>
      <p></p>
      <h1>Aquí encontraras todas las noticias actuales sobre los videjuegos que estan arrasando!</h1>
    </header>
    <hr>
    
        <div class="container">
      <h2 class="titulo" >Consolas</h2>
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
    <section class="intro">
      <p>Plataformas disponibles</p>
    </section>

    <!-- NEWS CARDS -->
    <div class="news-cards">
      <div>
        <img src="../img/pc.png" alt="" />
        <h2>PC</h2>
      </div>
      <div>
        <img src="../img/pslogo.png" alt="" />
        <h2>PLAYSTATION</h2>
      </div>
      <div>
        <img src="../img/xbox-one-logo.png" alt="" />
        <h2>XBOX</h2>
      </div>
      <div>
        <img src="../img/nintendo.jpg" alt="" />
        <h2>NINTENDO</h2>
      </div>
    </div>
    <hr>

  

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
                <!-- lorem 20 -->
                <a href="detallesnoticia.php?id=<?php echo $mostrarNoticias['idNoticias'] ?>"class="btn">Leer mas <i class="fas fa-angle-double-right"></i></a>
                <h1></h1>
              </div>
        </section>
    <?php
    }
      $i++;
      }
    ?>

    <hr>

    <!-- Follow -->
    <section class="social">
      <p>Siguenos en nuestras redes sociales!</p>
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
    </section>

    <hr></hr>
    <div class="container-fluid">
            <section class="contacto row justify-content-center">
                <div class="col-12 col-md-9 text-center">
                    <h2 class="subtitulo"><span>Video Destacado</span></h2>
                </div>
        <!-- lorem 20 -->
        <h2>20 PRÓXIMOS JUEGOS PS4/PS5/XBOX ONE/SERIES X/PC PARA 2021</h2>
        <div style= text-align:center;><iframe class= "video" src="https://www.youtube.com/embed/eE0NoRDXpsY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		    </div>
		    </div>
    </section>

    <div class="container-fluid">
            <section class="contacto row justify-content-center">
                <div class="col-12 col-md-9 text-center">
                    <h2 class="subtitulo"><span>Contactanos</span></h2>
                </div>

            <iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.649031960611!2d-2.9481130486872074!3d35.28985138019059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77058d3fb51753%3A0x3655270d62269458!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Ies%20Leopoldo%20Queipo!5e0!3m2!1ses!2ses!4v1613159446977!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <div class="w-100 mb-4"></div>
            <div>
            <p class="border-bottom border-top">
                <h1>Teléfono: 952678462</h1>
            </p>
        </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <h3>Mundijuegos Copyright</h3>
  </footer>

  <!-- Scroll Reveal -->
  <script src="../js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
