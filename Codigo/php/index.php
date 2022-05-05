<?php
require "BD/conectorBD.php";
require "BD/DAONoticia.php";
session_start();
//print'<pre>';
//print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mundijuegos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- carrusel -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/new_style.css">
  <link rel="icon" href="../img/logoo.png">
  <link rel="stylesheet" type="text/css" href="../js/glider/glider.css">

</head>

<body>
<div class="container1">
<nav class="nav-main1">
        <a href="index.php"><img src="../img/logoo/logoo.png"></a>

          <?php if(!isset($_SESSION["Usuario"])) {?>
            <div class="elemento2">
                <a href="../login.html" class="actionpanel" >Iniciar Sesión</a> 
            </div>
            <div class="elemento3">
                <a href="../ingresar_usuario.php" class="actionpanel" >Registrarse</a>
            </div>
              <?php } ?>
              
              <?php
              
              if(isset($_SESSION["Rol"])) {
                  if($_SESSION["Rol"]=="usuario") {?>
                  <div class="elemento2">
                    <a href="perfil.php" class="actionpanel">Perfil</a>
                  </div>
                  <div class="elemento3">
                    <a href="desloguear_usuario.php" class="actionpanel">Cerrar Sesion</a>
                  </div>
                  
              
              <?php
                  }
                }
              ?>
              <?php
              
              if(isset($_SESSION["Rol"])) {
                  if($_SESSION["Rol"]=="admin") {?>
                  <div class="elemento2">
                    <a href="desloguear_usuario.php" class="actionpanel">Cerrar Sesion</a>
                  </div>
              
              <?php
                  }
                }
              ?>
            <div class="elemento4">
            <form action="buscador.php" method="post">
                <input type="text" placeholder="Buscar" name="Buscar" id="Buscar">
                
                <button type="submit" name="submit">Buscar</button>
                <div id="display" class="display"></div>
              </form>
              </div>
              </div>   
</nav>
     <?php
        if(isset($_SESSION["Rol"])) {
          if($_SESSION["Rol"]=="admin") {?>
          
          <div class="adminpanel">
            <section class="titulo">
            <hr>
              <div><h2><span>↓ Panel de administración ↓</span></h2></div>
            </section>
              <a href="panel.php" class="actionadmin">Usuarios</a>
              <a href="adminplataforma.php" class="actionadmin">Plataformas</a>
              <a href="adminnoticias.php" class="actionadmin">Noticias</a>
              <a href="comprobar_comentario.php" class="actionadmin">Comentarios</a>
          </div>
          <hr>

      <?php }} ?>
    <br>
    <!-- Banner -->
    <header class="banner1">
    <br>
      <h1>¡BIENVENIDOS A MUNDIJUEGOS!</h1>
      <br>
      <h1>¡TU PAGINA DE NOTICIAS!</h1>
      <br>
      <h1>Aquí encontrarás todas las noticias y las últimas novedades en videojuegos.</h1>
      <h1>En Mundijuegos recopilamos cada día y minuto a minuto toda la actualidad del mundo de los videojuegos y sus diferentes plataformas para que siempre estés al corriente de la última actualización o contenido relacionado con tus títulos preferidos.</h1>
      <br>
    </header>
      <section class="titulo">
        <div>
          <h2><span>↓ Plataformas en las que encontrarás noticias ↓</span></h2>
        </div>
      </section>
      <br>
    <nav class="nav-main2">
        <li class="categoria">
          <a href="noticiasvj.php">PC</a>
        </li>
        <li  class="categoria">
          <a href="noticiasplay.php">Playstation</a>
        </li>
        <li  class="categoria">
          <a href="noticiasxbox.php">Xbox</a>
        </li>
        <li  class="categoria">
          <a href="noticiasnintendo.php">Nintendo</a>
        </li>
      </ul>
    </nav>
    <br>

            <?php 
             if($_SESSION['Rol']){
            ?>
          <section class="titulo">
            <div>
              <h2><span>↓ ¡Noticias con más comentarios! ↓</span></h2>
            </div>
          </section>
              <div class="glider-contain">
                <div class="glider">
                  <?php
                    $conexion = conectar(false);
                    $consulta = mostrarNoticiasPorComentarios($conexion);
                    while ($noticiasPorComentarios = mysqli_fetch_assoc($consulta)){
                  ?>
                    <div class="card" style="width: 18rem;">
                    <?php
                         $consultaTituloNoticia = mostrarTituloNoticia($conexion,$noticiasPorComentarios['idNoticias']);
                         while ($tituloNoticia = mysqli_fetch_assoc($consultaTituloNoticia)){
                    ?>
                        <img src="<?= $tituloNoticia['Imagen'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        
                        <h5 class="card-title"><?= $tituloNoticia['Titulo'];?></h5>
                        <?php }?>
                        <a href="detallesnoticia.php?id=<?php echo $noticiasPorComentarios['idNoticias'] ?>" class="btn btn-primary">>Leer mas <i class="fas fa-angle-double-right"></i></a>
                      </div>
                </div>
                
                <?php }?>
                </div>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
                
              </div>
              
            <?php 
             }else{
             ?>

              <div class="container">
                <section class="contacto row justify-content-center">
                <div class="col-12 col-md-9 text-center"></div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                      
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
<?php
  }
  ?>
        
<br>
    <section class="cards-banner-one">
    <div class="content">
    <section class="titulo">
    <div>
      <h2><span>↓ Video destacado de la semana ↓</span></h2>
    </div>
    </section>
    <p class="textcenter">20 PRÓXIMOS JUEGOS PS4/PS5/XBOXONE/SERIESX/PC PARA 2021<p>
      <div style= text-align:center;><iframe width="500" height="400"  src="https://www.youtube.com/embed/eE0NoRDXpsY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>
    </section>
    <br>
    <br>
  <!-- Footer -->
  <footer class="footer">
  <div class="container-fluid">
  <section class="titulo">
  <div>
    <img src="../img/logoo/logoo.png" class="nav-brand">
  <hr>
  </div>
    <section class="social">
    <section class="contacto">
      <div>
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
      </section>
      <nav class="nav-main3">
        <li>
          <a href="noticiasvj.php">Noticias de PC</a>
        </li>
        <li>
          <a href="noticiasplay.php">Noticias de Playstation</a>
        </li>
        <li>
          <a href="noticiasxbox.php">Noticias de Xbox</a>
        </li>
        <li>
          <a href="noticiasnintendo.php">Noticias de Nintendo</a>
        </li>
      </ul>
    </nav>
    <br>
    <div class="tlf">
      <p>Teléfono: 952678462</p>
    </div>
    <br>
    <div class="tlf">
      <p>Nos encontramos aquí</p>
    </div>
    <iframe class="col-12 col-md-9 mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.649031960611!2d-2.9481130486872074!3d35.28985138019059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77058d3fb51753%3A0x3655270d62269458!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Ies%20Leopoldo%20Queipo!5e0!3m2!1ses!2ses!4v1613159446977!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <br><br><br>

  </footer>
  <br>
  <script src="../js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/glider/glider.js"></script>


				
  <script>
  function fill(Value) {
   
   $('#buscar').val(Value);
   
   
   $('#display').hide();
}
$(document).ready(function() {
   
  
   $("#Buscar").keyup(function() {
       
    
       var name = $('#Buscar').val();
       
       
       if (name == "") {
           
           $("#display").html("");
       }
       
       else {
           
           $.ajax({
               
               type: "POST",
               
               url: "busqueda.php",
              
               data: {
                  
                   Buscar: name
               },
               
               success: function(html) {
                
                   $("#display").html(html).show();
               }
           });
       }
   });
});
</script>
<script>
  window.addEventListener('load', function(){
    new Glider(document.querySelector('.glider'), {
        // Mobile-first defaults
        slidesToShow: 1.5,
        slidesToScroll: 1,
        scrollLock: true,
        itemWidth: 400,
        dots: '#resp-dots',
        arrows: {
          prev: '.glider-prev',
          next: '.glider-next'
        },
        responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 775,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 'auto',
              slidesToScroll: 'auto',
              itemWidth: 150,
              duration: 0.25
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25
            }
          }
        ]
      });
})
  </script>
</body>
</html>