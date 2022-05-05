<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="styles/new_style.css">
    </head>
    <body >
      <div class="container1">
      <nav class="nav-main1">
          <a href="index.php"><img src="img/logoo/logoo.png"></a>
          <a href="php/index.php" class="actionpanel">Inicio</a>
          <a href="login.html" class="actionpanel">Inicia sesión</a>
      </nav>  
        <hr>
      </div>
        <div class="container">
            <form action="php/registro.php" method="POST" validate>
              <div class="cardformulario">                 
                <label for="">Usuario:</label><br>
                <input type="text" style="text-align:center" class="form-control" id="usuario" name="usuario" placeholder="Alumno98"><br>
                <span id="usuario__error" class="error">Formato Incorrecto</span><br>

                <label for="">Nombre:</label><br>
                <input type="text" style="text-align:center"class="form-control" id="nombre" name="nombre" placeholder="Nombre"><br>
                <span id="nombre__error" class="error">Formato Incorrecto</span><br>

                <label class="form-label">Contraseña: </label>
                <input type="password" style="text-align:center" name="contrasena" id="contrasena" class="form-control" placeholder="La contraseña debe tener un minimo de 8 caracteres, contener una mayuscula y un caracter especial."><br>
                <span id="contrasena__error" class="error">Formato Incorrecto</span><br>
          
                <label for="">Primer Apellido:</label><br>
                <input type="text" style="text-align:center" class="form-control" id="apellidos" name="apellidos" placeholder="1º apellido"><br>  
                <span id="apellidos__error" class="error">Formato Incorrecto</span><br>
                
                <label for="">Segundo Apellido:</label>
                <input type="text" style="text-align:center" class="form-control" id="apellido2" name="apellido2" placeholder="2º apellido"><br>
                <span id="apellido2__error" class="error">Formato Incorrecto</span><br>

                <label>Email:</label>
                <input type="email" style="text-align:center" class="form-control" id="email" name="email" placeholder="Email">
                <span id="email__error" class="error">Formato Incorrecto</span><br>

                <label>DNI:</label>
                <input type="text" style="text-align:center" class="form-control" id="dni" name="dni" placeholder="DNI">
                <span id="dni__error" class="error">Formato Incorrecto</span><br>
                
                 <label class="form-label">Direccion: </label>
                <input type="text" style="text-align:center" name="direccion" id="direccion"  class="form-control" placeholder="Calle:..."><br>
                <span id="direccion__error" class="error">Formato Incorrecto</span><br>
                
                <label class="form-label">Fecha de nacimiento: </label>
                <input type="date" style="text-align:center" name="fechanacimiento" id="fechanacimiento"  class="form-control" placeholder="Escribe la fecha con numeros: 0000/00/0"><br>
                <span id="fechanacimiento__error" class="error">Formato Incorrecto</span><br>
              
                <label class="form-label">Telefono: </label>
                <input type="text" style="text-align:center" name="telefono" id="telefono" class="form-control" placeholder="Ejemplo: 659777894"><br>
                <span id="telefono__error" class="error">Formato Incorrecto</span><br>

                <label class="form-label"> Codigo Postal: </label>
                <input type="text" style="text-align:center" name="codigopostal" id="codigopostal" class="form-control" placeholder="Ejemplo: 52005"><br>
                <span id="codigopostal__error">Formato Incorrecto</span><br>

                <label class="form-label" for="provincias">Provincia: </label>
                <select name="provincia" style="text-align:center" id="provincia">

                <?php
                    require "./php/BD/conectorBD.php";
                    require "./php/BD/DAOUsuarios.php";
                    $conexion = conectar(false);
                    $consulta = obtenerProvincias($conexion);
                    echo '<option value="0">Elije una provincia</option>';
                     while($fila = mysqli_fetch_assoc($consulta)){
                
                      echo '<option value='.$fila["id"].'>'.$fila["provincia"].'</option>';
                     }
                            
                  ?>
                </select>
                <span id="provincia__error">Formato Incorrecto</span><br>

                <label class="form-label">Municipio: </label>
                <div id="listaMunicipios" style="text-align:center">
                <span id="municipio__error">Formato Incorrecto</span><br>

                
                </div>
                <br>

          <button type="submit" class="btn btn-primary">Enviar</button>
          
          </div>
          
                  </div>
                </form>
                <br><br>
          </div>
          </div>

   <!-- AQUI EL JS QUE HAGA QUE TARDE EN CARGAR LA WEB -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
   <script>src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
   <script src="js/registro.js"></script>
   <script>
     $(document).ready(function(){
        recargarLista();
       $('#provincia').change(function(){
        recargarLista();        
       });
     });
         
   </script>
   <script>
     function recargarLista(){
          $.ajax({
              type:"POST",
              url:"obtenerMunicipios.php",
              data: "input="+$('#provincia').val() ,
              
              success:function(data){
                $('#listaMunicipios').html(data);
              }
          })
        }
  </script>

    </body>
</html>
