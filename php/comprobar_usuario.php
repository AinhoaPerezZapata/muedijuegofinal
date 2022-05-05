<?php
//MOSTRAR ERRORES PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
//Cargamos los archivos que vamos a usar

require "BD/conectorBD.php";
require "BD/DAOUsuarios.php";
  
$usuario = $_POST["usuario"];
$password = $_POST["password"];
//Nos conectamos a la base de datos y a la consulta

$conexion = conectar(false);
$consulta = consultaLogin($conexion, $usuario, $password);
 
//Recorremos la consulta

if(mysqli_num_rows($consulta) == 1)
{
    $fila = mysqli_fetch_array($consulta);
    crearSesion($fila);
    header("Location: index.php");
}
else
{
    $consulta = consultaUsuarios($conexion, $usuario);
    if(mysqli_num_rows($consulta) == 1)
    {
        header("Location: ../contraseña_nueva.html");
    }
    else
    {
        header("Location: ../ingresar_usuario.html");
    }
}

    
