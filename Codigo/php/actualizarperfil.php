<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
//Cargamos los archivos que vamos a usar

require 'BD/DAOUsuarios.php';
require 'BD/conectorBD.php';
//Nos conectamos a la base de datos

$conexion = conectar(false);
        
//Usamos las variables que vamos a coger

$usuario= $_POST['usuario'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$Apellido1 = $_POST['apellido1'];
$Apellido2 = $_POST['apellido2'];
$Telefono = $_POST['telefono'];
$email = $_POST['email'];
$CodigoPostal = $_POST['codigopostal'];
$Provincia = $_POST['provincia'];
$ComunidadAutonoma = $_POST['comunidadautonoma'];
$FechaNacimiento = $_POST['fechanacimiento'];
$Direccion = $_POST['direccion'];
$Dni = $_POST['dni'];
$idUsuario = $_POST['idUsuario'];

//Nos conectamos a la consulta con la variable y los datos que necesitamos

$consulta = modificarPerfil($conexion, $usuario, $password, $nombre, $Apellido1, $Apellido2, $Telefono, $email, $CodigoPostal, $Provincia, $ComunidadAutonoma, $FechaNacimiento, $Direccion, $Dni, $idUsuario);      
if($consulta){
        $consulta2=consultaUsuarios($conexion, $usuario);
        $usuario=mysqli_fetch_assoc($consulta2);
        crearSesion($usuario);
    header('Location: perfil.php');
 
     } else {
     
     header('Location: modificarPerfil.php');
 
  }
?>
