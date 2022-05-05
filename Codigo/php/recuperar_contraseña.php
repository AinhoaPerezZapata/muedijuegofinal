<?php 

//Cargamos los archivos que vamos a usar
require 'BD/conectorBD.php';
require 'BD/DAOUsuarios.php';

//Usamos las variables que vamos a coger
 $email = $_POST['email'];
 $usuario = $_POST['usuario'];

//Nos conectamos a la base de datos y a la consulta
  $conexion = conectar(false);
  $consulta = consultaUsuarios($conexion, $usuario);

//Recorremos la consulta
  
  if(mysqli_num_rows($consulta) == 1){

        $fila = mysqli_fetch_assoc($consulta);
 
        crearSesion($fila);

        header('Location: ../recuperar_contraseña.html');
    } else{
    	
        header('Location: ../login.html');
    }
?>