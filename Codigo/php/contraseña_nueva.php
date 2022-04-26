<?php
//MOSTRAR ERRORES PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php 
//Cargamos los archivos que vamos a usar

require 'BD/conectorBD.php';
require 'BD/DAOUsuarios.php';

session_start();


//Nos conectamos a la base de datos 
$conexion = conectar(false);
//Usamos las variables que vamos a coger

$correo = $_SESSION['Email'];
$contraseñaN = $_POST['contrasena_nueva'];
//Elegimos la consulta y los datos que vamos a utilizar.

modificarUsuarios($conexion, $contraseñaN, $correo);
header('Location: ../login.html');

 ?>
