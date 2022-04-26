<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php 

include "BD/conectorBD.php";
include "BD/DAOcomentarios.php";
include "BD/DAONoticia.php";

session_start();

//REcogemos variables del formulario
$usuario = $_SESSION["Usuario"];
$comentario = $_POST["comentario"];
$idNoticias = $_GET["id"];

//Nos conectamos a la base de datos y a la consulta
$conexion = conectar(false);
$consulta = insertarComentario($conexion,$idNoticias,$usuario,$comentario);

//Recorremos la consulta
if($consulta){
   echo('Funciona');
   header('Location: ../login.html');

    } else {
    echo('no funciona');
    //header('Location: ../ingresar_usuario.html');

 }
?>
