<?php
//Cargamos los archivos que vamos a usar

require "BD/DAOplataforma.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos 

$conexion = conectar(false);
//Usamos las variables que vamos a coger

$Idconsola = $_GET['Idconsola'];
//Nos conectamos a la consulta y le damos una funcion de la base de datos

$consulta = eliminarConsola($conexion, $Idconsola);

header('Location: adminplataforma.php');

?>