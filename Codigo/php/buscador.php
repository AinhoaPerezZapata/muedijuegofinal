<?php
//MOSTRAR ERRORES PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias PC</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/estilos.css">

</head>
<body>
<div class="container">
  <nav class="nav-main1">
    <div align="right"><img src="../img/logo/logo.png"></div>
	    <a href="../php/index.php">Inicio</a>
  </nav>
	<br>
	<div class="row">

		<?php 

	//Cogemos las bases de datos que vamos a utilizar
		require 'BD/conectorBD.php';
		require 'BD/DAONoticia.php';

	//Nos conectamos a la base de datos
		$conexion = conectar(false);
        $articulo = $_POST["Buscar"];
	//Usamos una funcion que nos permite mostrar las funciones de la base de datos que vamos a utilizar
		$consulta = buscador($conexion, $articulo);
    
	//Recorre la consulta y muestra la información

		while ($mostrar=mysqli_fetch_array($consulta)) {
		
		?>
		<?php 
      ?>
	<div class="card" style="width: 20rem;">
		<img class="imagen" src="<?php echo $mostrar['Imagen'] ?>" class="card-img-top">
			<div class="card-body" text-align="center">
      <h5 class="card-title" text-align="center"><b> <?php echo $mostrar['Titulo'] ?> </b></h5>
      <hr>
			<p class="card-text" text-align="center"><b> <?php echo $mostrar['NombreP'] ?> </b></p>
			
			</div>
			<td>
				<ul class="nav justify-content-center">
			  	<li class="nav-item" id="botones">
	            <button type="submit">  <a  href="detallesnoticia.php?id=<?php echo $mostrar['idNoticias']; ?>" value="Detalles" name="Detalles">Ver detalles</a></button></li>
			  	</li>
				</ul>
			</td>
	</div>


		<?php

		}

		?>
	</div>
	<br>
	<div class="container-fluid">
            <section class="contacto row justify-content-center">
                <div class="col-12 col-md-9 text-center">
                    <h2 class="subtitulo"><span>Contactanos</span></h2>
                </div>

				<iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.649031960611!2d-2.9481130486872074!3d35.28985138019059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77058d3fb51753%3A0x3655270d62269458!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Ies%20Leopoldo%20Queipo!5e0!3m2!1ses!2ses!4v1613159446977!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<div class="w-100 mb-4"></div>
            <p class="border-bottom border-top">
            	<h1>Teléfono: 952678462</h1>
            </p>
			</section>
	</div>
      
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
	
	

</body>
</html>
