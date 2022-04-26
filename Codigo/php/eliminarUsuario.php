<?php
//Cargamos los archivos que vamos a usar

require "BD/DAOUsuarios.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos 

$conexion = conectar(false);
//Usamos las variables que vamos a coger

$idUsuario = $_GET['idUsuario'];

//Nos conectamos a la consulta y le damos una funcion de la base de datos
$consulta = eliminarPerfil($conexion, $idUsuario);

header('Location: panel.php');

?>