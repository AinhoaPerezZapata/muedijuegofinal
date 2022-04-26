
<?php

require "BD/DAOUsuarios.php";
require "BD/conectorBD.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
</head>
<body>
<div class="container">
   <nav class="nav-main1">
    <div align="right"><img src="../img/logo/logo.png"></div>
    <a href="../php/index.php">Inicio</a> 
    <a href="index.php">Atras</a>
    </nav>
    </div

        <div class="contenedor ">
    <table border="1" class="table table-dark">
        <tr>
            <th>Usuario</th>
            <th>Password</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>CP</th>
            <th>Provincia</th>
            <th>ComunidadAutonoma</th>
            <th>Direccion</th>
            <th>Rol</th>
            <th>DNI</th>
            <th>FechaNacimiento</th>
         
        </tr>
        <!-- Recoge los datos de la base de datos -->
        <tr>
            <td> <?php echo $_SESSION['Usuario'] ?></td>
            <td> <?php echo $_SESSION['Password'] ?></td>
            <td> <?php echo $_SESSION['Nombre'] ?></td>
            <td> <?php echo $_SESSION['Apellido1'] ?></td>
            <td> <?php echo $_SESSION['Apellido2'] ?></td>
            <td> <?php echo $_SESSION['Telefono'] ?></td>
            <td> <?php echo $_SESSION['Email'] ?></td>
            <td> <?php echo $_SESSION['CodigoPostal'] ?></td>
            <td> <?php echo $_SESSION['Provincia'] ?></td>
            <td> <?php echo $_SESSION['ComunidadAutonoma'] ?></td>
            <td> <?php echo $_SESSION['Direccion'] ?></td>
            <td> <?php echo $_SESSION['Rol'] ?></td>
            <td> <?php echo $_SESSION['Dni'] ?></td>
            <td> <?php echo $_SESSION['FechaNacimiento'] ?></td>
            <td> <button ><a href="eliminarperfil.php?idUsuario=<?php  echo $_SESSION['idUsuario'];?>" value="eliminar" name="eliminar">Eliminar usuario</button></td>
            <td> <button ><a href="modificarPerfil.php?id=<?php  echo $_SESSION['idUsuario'];?>" value="modificar" name="modificar">Modificar</button></td>
        <tr> 
            </tr>               
    </table>

    </div>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</body>
</html>
