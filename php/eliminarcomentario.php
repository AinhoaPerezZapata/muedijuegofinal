<?php
//Cargamos los archivos que vamos a usar

require "BD/DAOcomentarios.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos 

$conexion = conectar(false);
//Usamos las variables que vamos a coger

$idcomentarios = $_GET['idcomentarios'];
//Nos conectamos a la consulta y le damos una funcion de la base de datos
 
$consulta = eliminarComentario($conexion, $idcomentarios);

header('Location: comprobar_comentario.php');

?>