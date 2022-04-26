<?php
//Cargamos los archivos que vamos a usar

require "BD/DAOUsuarios.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos
  
$conexion = conectar(false);
//Usamos las variables que vamos a coger

$rol = $_POST['Rol'];
$idUsuario = $_POST['idUsuario'];
//Nos conectamos a la consulta con la variable y los datos que necesitamos

$consulta = modificarusuario($conexion, $rol, $idUsuario);

header('Location: panel.php');


?>
