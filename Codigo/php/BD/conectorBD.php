<?php

    function conectar($esRemota){

        if($esRemota){
            $servidor = "";
           
        }else{
            $servidor = "localhost:3307";
            $usuario = "root";
            $password = "root";
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
   




