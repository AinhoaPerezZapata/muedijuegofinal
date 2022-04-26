

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Cargamos los archivos que vamos a usar

require "BD/DAOplataforma.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos

$conexion = conectar(false);
//Usamos las variables que vamos a coger
$Nombre = $_POST["Plataforma"];
$ImagenesN=$_FILES['Imagen']['name'];
$imagenA=$_FILES['Imagen']['tmp_name'];
$rutaImg="../img/".$ImagenesN;
$idPlataforma = $_POST['Idplataforma'];

move_uploaded_file($imagenA,$rutaImg);
if(empty($_FILES['Imagen']['name'])){
        $rutaImg=$_POST['Imagen_tmp'];
    }
//Nos conectamos a la consulta con la variable y los datos que necesitamos

$consulta = modificarConsola($conexion, $Nombre, $rutaImg, $idPlataforma);

if($consulta){


    header('Location: adminplataforma.php');
 
     } else {
     
     header('Location: modificar.php');
 
  }

?>
