<?php

    function conectar($esRemota){

        if($esRemota){
            $servidor = "";
           
        }else{
            $servidor = "127.0.0.1";
            $usuario = "debianDB";
            $password = "debianDB";
            $bd = "final";
        }
      
        $conector = mysqli_connect($servidor, $usuario, $password, $bd);
        if ($conector ) {
            return $conector;
        }
        else{
            echo mysqli_connect_error();
        }
   

        echo "conectamos a la BD<br>";

        $conectar = mysqli_connect($servidor, $usuario, $password, $bd);

        if($conectar){
            echo "La conexion se ha realizado con exito<br>";
            return $conectar;
        }else{
            echo "Error no se ha conectado<br>";
            echo mysqli_connect_error();
            exit;
        }
    }
   
$conexion = conectar(false);
$provincia = $_POST['input'];
if ($_POST['input']){

    $consulta = "SELECT * FROM municipios WHERE provincia_id=$provincia";
    $resultado = mysqli_query($conexion, $consulta);
    
    $texto = "<select id='municipios' name='municipio'>";
    while ($fila = mysqli_fetch_assoc($resultado)){
        $texto = $texto.'<option value='.$fila['municipio'].'>'.($fila['municipio']).'</option>';
    }
    
    echo $texto."</select>";  
}else {
    echo $texto = '<select id="municipios" name="municipios"><option value="test">Elija una opcion...</option></select>';
}


