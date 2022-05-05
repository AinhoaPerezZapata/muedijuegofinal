
<!DOCTYPE html>
<html lang="es-ES">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="../estilos/estiloss.css">
    </head>

    <body>

      <nav class="menu">
        <div align="right"><img src="../img/logo/logo.png"></div>
        <a href="../php/index.php">Inicio</a>
        <a id="link" class="nav-link active" aria-current="page" href="../login.html">Login</a>
        <a id="link" class="nav-link" href="../ingresar_usuario.html">Registro</a>
        <a href="../mapasitio.html">Mapa del sitio</a>
      </nav> 
                <?php
                //Cargamos los archivos que vamos a usar
                    require "BD/conectorBD.php";
                    require "BD/DAOplataforma.php";
                    require "BD/DAOvideojuegos.php";
                    require "BD/DAOproductos.php";
                    //Creamos la conexión a la BD.
                    $conexion = conectar(false);
                    $id = $_GET["id"];
                    $consulta = filtrarP($conexion, $id);
                    while($mostrar = mysqli_fetch_array($consulta))
                    {
                ?>
                        <div class="card"  style="width: 60rem;">
                        <img  src="<?php echo $mostrar['Logo']  ?>"  br>
    				    <img  src="<?php echo $mostrar['Imagen'] ?>" style="width:40%;">
    		  			<div class="card-body" text-align="center">
    			    	<center><h5 class="card-title" text-align="center" ><b> <?php echo $mostrar['Titulo'] ?> </b></h5></center>
    				    <p class="card-text" text-align="center"  ><b> <?php echo $mostrar['Compañia'] ?> </b></p>
    					<p class="card-text" text-align="center"  ><b> <?php echo $mostrar['Publicacion'] ?> </b></p>
    					<p class="card-text" text-align="center" ><b> <?php echo $mostrar['Descripcion'] ?> </b></p>
                        <center><a href="videojuegos.php">Atras</a> </button></center>
                        <center><a href="detalles.php?idVideojuego=<?php echo $mostrar['idVideojuego']; ?>" value="Comprar" name="Comprar">Comprar</a></button></li></center>

                        </div>
                <?php
                    }
                   
                ?>
        </div>
            <div class="col-md-12">
                <center><a href="plataforma.php">Volver atras</a></center>
            <div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
        
    </body>
</html>