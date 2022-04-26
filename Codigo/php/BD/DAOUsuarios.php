<?php 
    function consultaUsuarios($conexion, $usuario){
		$consulta = "SELECT * FROM usuario WHERE Usuario = '$usuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
	}

	function consultaLogin($conexion, $usuario, $password){
        $consulta = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Password = '$password'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    } 
        function crearSesion($usuario){
            //pongo el id de session con el dni
            session_id($usuario['idUsuarios']);
            //Creo la sesion
            session_start();
            //almacenamos todos los datos de sesion
            $_SESSION['idUsuario']=$usuario['idUsuario'];
            $_SESSION['Usuario']=$usuario['Usuario'];
            $_SESSION['Password']=$usuario['Password'];
            $_SESSION['Nombre']=$usuario['Nombre'];
            $_SESSION['Email']=$usuario['Email'];
            $_SESSION['Telefono']=$usuario['Telefono'];
            $_SESSION['Apellido1']=$usuario['Apellido1'];
            $_SESSION['Apellido2']=$usuario['Apellido2'];
            $_SESSION['CP']=$usuario['CP'];
            $_SESSION['Provincia']=$usuario['Provincia'];
            $_SESSION['ComunidadAutonoma']=$usuario['ComunidadAutonoma'];
            $_SESSION['Direccion']=$usuario['Direccion'];
	    $_SESSION['Rol']=$usuario['Rol'];
	    $_SESSION['Dni']=$usuario['DNi'];
	    $_SESSION['FechaNacimiento']=$usuario['FechaNacimiento'];

    
        }
        function recuperar($conexion, $email){
            $consulta = "SELECT * FROM usuario WHERE Email = '$email' ";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
       }
       function modificarUsuarios($conexion, $password, $correo){
        $consulta = "UPDATE usuario SET `Password` = '$password' WHERE (`Email` = '$correo') ";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

         function insertarUsuarios($conexion,$Usuario,$Password,$Email,$DNi,$Apellido1,$Apellido2,$ComunidadAutonoma,$Nombre,$Telefono,$CP, $Direccion, $Provincia, $FechaNacimiento){
            $consulta = "INSERT INTO usuario ( `Usuario`, `Password`, `Nombre`, `Apellido1`, `Apellido2`, `Telefono`, `Email`, `CP`, `Provincia`, `ComunidadAutonoma`, `Direccion`, `Rol`, `DNi`, `FechaNacimiento`) VALUES ('$Usuario', '$Password', '$Nombre', '$Apellido1', '$Apellido2', '$Telefono', '$Email', '$CP', '$Provincia', '$ComunidadAutonoma', '$Direccion','usuario', '$DNi', '$FechaNacimiento')";

            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        function insertarUsuario($conexion,$Usuario,$Password,$Email,$DNi,$Apellido1,$Apellido2,$ComunidadAutonoma,$Nombre,$Telefono,$CP, $Direccion, $Provincia, $FechaNacimiento,$Rol){
            $consulta = "INSERT INTO usuario ( `Usuario`, `Password`, `Nombre`, `Apellido1`, `Apellido2`, `Telefono`, `Email`, `CP`, `Provincia`, `ComunidadAutonoma`,`Direccion`, `Rol`,`DNi`,`FechaNacimiento`) VALUES ('$Usuario', '$Password', '$Nombre', '$Apellido1', '$Apellido2', '$Telefono', '$Email', '$CP', '$Provincia', '$ComunidadAutonoma','$Direccion', '$Rol','$DNi', '$FechaNacimiento')";

            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
       
        function mostrarUsuario($conexion){
            $consulta = "SELECT * FROM usuario";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        function mostrarPerfil($conexion, $idUsuario)
	{
		$consulta = "SELECT * FROM Usuario WHERE(`idUsuario` = '$idUsuario')";
		$resultado = mysqli_query($conexion, $consulta);
		return $resultado;
    }

        function modificarusuario($conexion, $rol, $idUsuario){
            $consulta = "UPDATE `usuario` SET `Rol` = '$rol' WHERE (`idUsuario` = '$idUsuario')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        function modificarPerfil($conexion, $usuario, $password, $nombre, $Apellido1, $Apellido2, $Telefono, $email, $CodigoPostal, $Provincia, $ComunidadAutonoma, $FechaNacimiento, $Direccion, $Dni, $idUsuario){
            $consulta = "UPDATE `usuario` SET `Usuario` = '$usuario', `Password` = '$password', `Nombre` = '$nombre', `Apellido1` = '$Apellido1', `Apellido2` = '$Apellido2', `Telefono` = '$Telefono', `Email` = '$email', `CP` = '$CP', `Provincia` = '$Provincia', `ComunidadAutonoma` = '$ComunidadAutonoma',`Direccion` = '$Direccion', `Dni` = '$Dni', `FechaNacimiento` = '$FechaNacimiento' WHERE(`idUsuario` = '$idUsuario')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

        function eliminarPerfil($conexion, $idUsuario){
            $consulta = "DELETE FROM `final`.`usuario` WHERE (`idUsuario` = '$idUsuario')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }


?>
