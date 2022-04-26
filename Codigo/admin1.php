<?php
session_start();
//print'<pre>';
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</head>
<body>
    <div class="container">
    <nav class="nav-main1">
      <div align="right"><img src="../img/logo/logo.png"></div>
      <a href="../php/index.php">Inicio</a>
    </nav>     
      <header>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a href="panel.php"><button type="submit">Panel de Usuarios</a>
          </li>
          <li class="nav-item">
            <a href="adminplataforma.php"><button type="submit">Plataforma</a>
          </li>
          <li class="nav-item">
            <a href="adminnoticias.php"><button type="submit">Noticias</a>
          </li>
        </ul>
        <hr>
          <a href="desloguear_usuario.php"><button type="submit">Desloguear</a>
      </header>  
    </div>
</body>
</html>