<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
//Cargamos los archivos que vamos a usar

require "BD/DAONoticia.php";
require "BD/conectorBD.php";
//Usamos las variables que vamos a coger
$Plataforma = $_POST["Plataforma"];
$ImagenesN=$_FILES['Imagen']['name'];
$imagenA=$_FILES['Imagen']['tmp_name'];
$rutaImg="../img/".$ImagenesN;
$Descripcion = $_POST["Descripcion"];
$Titulo = $_POST["Titulo"];
$NombreP = $_POST["NombreP"];
move_uploaded_file($imagenA,$rutaImg);


//Nos conectamos a la base de datos y a la consulta
$conexion = conectar(false);
$consulta = insertarNoticia($conexion, $Plataforma, $rutaImg, $Descripcion, $Titulo, $NombreP);
//Mostramos la localizacion donde queremos que vayan dirigidos los datos.
if($consulta){


    header('Location: adminnoticias.php');
 
     } else {
     
     header('Location: ../insertarNoticia.html');
 
  }
 
?>

