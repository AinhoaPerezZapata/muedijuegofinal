<?php
//Cargamos los archivos que vamos a usar

require "BD/DAONoticia.php";
require "BD/conectorBD.php";
//Nos conectamos a la base de datos

$conexion = conectar(false);
//Usamos las variables que vamos a coger
$IdNoticias = $_POST["IdNoticias"];
$Plataforma = $_POST["Plataforma"];
$ImagenesN=$_FILES['Imagen']['name'];
$imagenA=$_FILES['Imagen']['tmp_name'];
$rutaImg="../img/".$ImagenesN;
$Descripcion = $_POST["Descripcion"];
$Titulo = $_POST["Titulo"];
$NombreP = $_POST["NombreP"];

move_uploaded_file($imagenA,$rutaImg);
if(empty($_FILES['Imagen']['name'])){
        $rutaImg=$_POST['Imagen_tmp'];
    }
//Nos conectamos a la consulta con la variable y los datos que necesitamos
$consulta = modificarNoticia($conexion, $Plataforma, $rutaImg, $Descripcion, $Titulo, $NombreP, $IdNoticias);

if($consulta){
	header('Location: adminnoticias.php');
 
     } else {
     
     header('Location: modificarNoticia.php');
 
  }


?>