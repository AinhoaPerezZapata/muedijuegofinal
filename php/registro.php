<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php 

//Cargamos los archivos que vamos a usar
require 'BD/conectorBD.php';
require 'BD/DAOUsuarios.php';

//Usamos las variables que vamos a coger
$Usuario = $_POST['usuario'];
$Nombre = $_POST['nombre'];
$Password = $_POST['contrasena'];
$Apellido1 = $_POST['apellidos'];
$Apellido2 = $_POST['apellido2'];
$Email = $_POST['email'];
$DNi = $_POST['dni'];
$Telefono = $_POST['telefono'];
$CP = $_POST['codigopostal'];
$Provincia = $_POST['provincia'];
$municipio = $_POST['municipio'];
$Direccion = $_POST['direccion'];
$FechaNacimiento = $_POST['fechanacimiento'];

//Nos conectamos a la base de datos y a la consulta
$conexion = conectar(false);
$consulta = insertarUsuarios($conexion,$Usuario,$Password,$Email,$DNi,$Apellido1,$Apellido2,$municipio,$Nombre,$Telefono,$CP, $Direccion, $Provincia, $FechaNacimiento);

//Recorremos la consulta
if($consulta){


   header('Location: ../login.html');

    } else {
      var_dump($_POST);
    //header('Location: ../ingresar_usuario.html');

 }

 ?>
