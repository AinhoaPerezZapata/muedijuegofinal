<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    function insertarProductos($conexion, $Nombre, $rutaImg){
        $consulta = "INSERT INTO plataforma ( `Nombre`, `Imagen`) VALUES ('$Nombre', '$rutaImg')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function modificarConsola($conexion, $Nombre, $rutaImg ,$idPlataforma){
        $consulta="UPDATE `plataforma` SET `Nombre` = '$Nombre', `Imagen` = '$rutaImg' WHERE (`idPlataforma` = '$idPlataforma')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarConsola($conexion, $Idplataforma){
        $consulta = "DELETE FROM `plataforma` WHERE (`idPlataforma` = '$Idplataforma') ";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;

    }
    
    function mostrarconsola($conexion){
        $consulta = "SELECT * FROM `plataforma`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function consultaPlataforma($conexion)
    {
        $consulta = "SELECT idPlataforma, Imagen FROM `plataforma` ORDER BY rand() LIMIT 3";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarId($conexion,$idPlataforma){
        $consulta = "SELECT * FROM plataforma WHERE (idPlataforma = '$idPlataforma')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>