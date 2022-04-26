<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoconsolas</title>
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</head>
<body>
	<nav class="menu">
    <div align="right"><img src="../img/logo/logo.png"></div>
    <a href="../php/index.php">Inicio</a>
    <a href="videojuegos.php">Videojuegos</a>
    <a id="link" class="nav-link active" aria-current="page" href="../login.html">Login</a>
    <a id="link" class="nav-link" href="../ingresar_usuario.html">Registro</a>
    <a href="../mapasitio.html">Mapa del sitio</a>
	</nav>  
<div class="row">
<?php 

//Cogemos las bases de datos que vamos a utilizar
	require 'BD/conectorBD.php';
	require 'BD/DAOplataforma.php';


//Nos conectamos a la base de datos
	$conexion = conectar(false);
//Usamos las variables que vamos a coger
	$idPlataforma = $_POST['idPlataforma'];
//Mostramos la consulta
	$consulta =mostrarconsola($conexion);
//Recorre la consulta y muestra la información

	while ($mostrar=mysqli_fetch_array($consulta)) {

	?>

	<div class="card"  style="width: 20rem;">
		<img class="imagen" src="<?php echo $mostrar['Imagen'] ?>" class="card-img-top">
			<div class="card-body">
			    <h5 class="card-title" align="center"><b> <?php echo $mostrar['Nombre'] ?> </b></h5><br>
					<p class="card-text">Lanzamiento: <b> <?php echo $mostrar['Lanzamiento'] ?> </b></p>
					<p class="card-text">Precio: <b> <?php echo $mostrar['Precio'] ?> </b></p>
		 	 		<p class="card-text">Stock: <b> <?php echo $mostrar['Stock'] ?> </b></p>
		 	</div>

		 	<td>
				<ul class="nav justify-content-center">
		  			<li class="nav-item" id="botones">
		    		<button type="submit">  <a  href="detallesC.php?idPlataforma=<?php echo $mostrar['idPlataforma']; ?>" value="Detalles" name="Detalles">Ver detalles</a></button></li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>

</body>
</html>