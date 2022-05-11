
<?php
//Cargamos los archivos que vamos a usar

require 'BD/DAOUsuarios.php';
require 'BD/conectorBD.php';
//Nos conectamos a la base de datos

$conexion = conectar(false);

//Usamos las variables que vamos a coger

$usuario= $_POST['Usuario'];
$password = $_POST['Password'];
$nombre = $_POST['Nombre'];
$Apellido1 = $_POST['Apellido1'];
$Apellido2 = $_POST['Apellido2'];
$Telefono = $_POST['Telefono'];
$email = $_POST['Email'];
$CodigoPostal = $_POST['CP'];
$Provincia = $_POST['provincia'];
$ComunidadAutonoma = $_POST['municipio'];
$FechaNacimiento = $_POST['FechaNacimiento'];
$Direccion = $_POST['Direccion'];
$Dni = $_POST['DNI'];
$idUsuario = $_POST['idUsuario'];


//Nos conectamos a la consulta con la variable y los datos que necesitamos

$consulta = modificarPerfil($conexion, $usuario, $password, $nombre, $Apellido1, $Apellido2, $Telefono, $email, $CodigoPostal, $Provincia, $ComunidadAutonoma, $FechaNacimiento, $Direccion, $Dni, $idUsuario);     
var_dump($consulta);
if($consulta){


     header('Location: perfil.php');
 
     } else {
     
     header('Location: modificarPerfil.php');
 
  }
?>
que