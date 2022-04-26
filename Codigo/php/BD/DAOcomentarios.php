
<?php 
function insertarComentario($conexion,$idNoticias,$idUsuario,$comentarios){
            $consulta = "INSERT INTO comentarios ( `idNoticias`, `idUsuario`, `contenido`) VALUES ('$idNoticias', '$idUsuario', '$comentarios')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
function aceptarComentario($conexion, $comentario, $idcomentarios){
            $consulta = "UPDATE `comentarios` SET `estado` = 'Aceptado' WHERE (`idcomentarios` = '$idcomentarios')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
function eliminarComentario($conexion, $idcomentarios){
            $consulta = "DELETE FROM `comentarios` WHERE (`idcomentarios` = '$idcomentarios')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

function mostrarComentariosAprobados($conexion){
            $consulta = "SELECT * FROM comentarios";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
?>