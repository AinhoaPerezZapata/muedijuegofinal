
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos/estilos.css">
</head>
  <body>
    <img src="../img/logo.png" class="logo">
    <ul class="nav justify-content-end">
    <li class="nav-item">
      <a id="link" class="nav-link active" aria-current="page" href="indexS.html">Inicio</a>
    </li>
    </ul>
  <div class="row m-0 justify-content-center align-items-center vh-100">
  <div class="card bg-blue " style="width: 18rem; margin: 0 auto;">
    <center>
      <div class="card-header bg-primary"> Login</div>
      <div class="card-body">  
      <form id="Login" name="Login" action="desloguear_usuario.php" method="POST" class="needs-validation" novalidate>
        <?php
          session_start();
          if($_SESSION['Rol'] == usuario){
            header('Location: usuario.php');
          } elseif ($_SESSION['Rol'] == admin) {
              header('Location: admin1.php');
          }
        ?>
      <button>Desloguearse</button>
    </center>
      </form>
    </div>
    </div>
  </body>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="js/validarBootstrap.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</html>