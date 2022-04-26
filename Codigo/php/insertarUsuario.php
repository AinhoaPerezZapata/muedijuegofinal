<?php 
//Cargamos los archivos que vamos a usar
require 'BD/conectorBD.php';
require 'BD/DAOUsuarios.php';

//Usamos las variables que vamos a coger
$Usuario = $_POST['usuario'];
$Password = $_POST['contrasena'];
$Email = $_POST['email'];
$DNi = $_POST['dni'];
$Apellido1 = $_POST['apellidos'];
$Apellido2 = $_POST['apellido2'];
$ComunidadAutonoma = $_POST['comunidadautonoma'];
$Nombre = $_POST['nombre'];
$Telefono = $_POST['telefono'];
$CP = $_POST['codigopostal'];
$Provincia = $_POST['provincia'];
$Direccion = $_POST['direccion'];
$Rol = $_POST['rol'];
$FechaNacimiento = $_POST['fechanacimiento'];
//Nos conectamos a la base de datos y a la consulta
 $conexion = conectar(false);
 $consulta = insertarUsuario($conexion,$Usuario,$Password,$Email,$DNi,$Apellido1,$Apellido2,$ComunidadAutonoma,$Nombre,$Telefono,$CP, $Direccion, $Provincia, $FechaNacimiento,$Rol);

  if($consulta){
   header('Location: panel.php');
  }else echo "no funciona";

?>
