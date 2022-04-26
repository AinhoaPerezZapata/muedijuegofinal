<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias Nintendo</title>
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    
</head>
<body>
<div class="container">
  <nav class="nav-main1">
    <div align="right"><img src="../img/logoo/logoo.png"></div>
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

	//Usamos una funcion que nos permite mostrar las funciones de la base de datos que vamos a utilizar
		$consulta = mostrarNoticias($conexion);

	//Recorre la consulta y muestra la información

		while ($mostrar=mysqli_fetch_array($consulta)) {
		
		?>
		<?php 
      if($mostrar['Plataforma']=="7"){
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


		<?php

		}

		?>
	</div>

</body>
</html>
