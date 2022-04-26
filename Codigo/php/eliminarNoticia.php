<?php
//Cargamos los archivos que vamos a usar
require "BD/DAONoticia.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos

$conexion = conectar(false);
//Usamos las variables que vamos a coger

$IdNoticias = $_GET['IdNoticias'];
//Nos conectamos a la consulta y le damos una funcion de la base de datos

$consulta = eliminarNoticia($conexion, $IdNoticias);

header('Location: adminnoticias.php');

?>