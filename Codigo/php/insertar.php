<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
//Cargamos los archivos que vamos a usar

require "BD/DAOplataforma.php";
require "BD/conectorBD.php";
//Usamos las variables que vamos a coger
$Nombre = $_POST['Nombre'];
echo $Nombre;
$ImagenesN=$_FILES['Imagen']['name'];
$imagenA=$_FILES['Imagen']['tmp_name'];
$rutaImg="../img/".$ImagenesN;
move_uploaded_file($imagenA,$rutaImg);
//Nos conectamos a la base de datos y a la consulta
$conexion = conectar(false);
$consulta = insertarProductos($conexion, $Nombre, $rutaImg);
//Mostramos la localizacion donde queremos que vayan dirigidos los datos.
if($consulta){


    header('Location: adminplataforma.php');
 
     } else {
     
     header('Location: ../insertar.html');
 
  }
 
?>
