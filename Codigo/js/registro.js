//constantes que almacenan los identificadores del html
const usuario = document.getElementById("usuario");
const email = document.getElementById("email");
const contrasena = document.getElementById("contrasena");
const nombre = document.getElementById("nombre");
const apellido1 = document.getElementById("apellido1");
const dni = document.getElementById("dni");
const boton = document.getElementById("boton");
const telefono = document.getElementById('telefono');
const codigopostal = document.getElementById('codigopostal');
const provincia = document.getElementById('provincia');
const municipios = document.getElementById('municipios');
const apellido2 = document.getElementById("apellido2");
const direccion = document.getElementById("direccion");
const fechanacimiento = document.getElementById("fechanacimiento");
const rol = document.getElementById("rol");
const errorUsuario=document.getElementById("usuario__error");

//ocultamos los mensajes de errores con JQUERY
$("#usuario__error").css("visibility", "hidden");
$("#contrasena__error").css("visibility", "hidden");
$("#dni__error").css("visibility", "hidden");
$("#apellido1__error").css("visibility", "hidden");
$("#nombre__error").css("visibility", "hidden");
$("#codigopostal__error").css("visibility", "hidden");
$("#provincia__error").css("visibility", "hidden");
$("#municipio__error").css("visibility", "hidden");
$("#telefono__error").css("visibility", "hidden");
$("#apellido2__error").css("visibility", "hidden");
$("#email__error").css("visibility", "hidden");
$("#direccion__error").css("visibility", "hidden");
$("#fechanacimiento__error").css("visibility", "hidden");
$("#rol__error").css("visibility", "hidden");
//constante para las expresiolnes regulares
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{6,}$/,
    email:  /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    dni: /^[0-9]{8}[A-Za-z]$/,
    contrasena: /^(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%?&])[A-Za-z\d$@$!%*?&]{8,}$/,
    apellido1: /^[a-zA-Z\_\-]{2,}$/,
    apellido2: /^[a-zA-Z\_\-]{2,}$/,
    nombre:/^[a-zA-Z\_\-]{2,}$/,
    telefono: /^[0-9]{9}$/,
    codigopostal: /^[0-9]{2}-? ?[0-9]{3}$/,
    provincia: /^[a-zA-Z]{}/,
    municipios: /^[a-zA-Z]{4,}/,
    direccion: /^[a-zA-ZÀ-ÿ0-9.\s?\-]{5,100}$/,
    fechanacimiento: /^[0-9]{4}[-/]{1}[0-9]{2}[-/]{1}[0-9]{2}$/,
    rol: /[A-Za-z]{4,30}/
}
//funcion validar usuarios 
function validarUsuario(){
    if (expresiones.usuario.test(usuario.value)) {
        $("#usuario__error").css("visibility", "hidden");

    }else{
        $("#usuario__error").css("visibility", "visible");
        $("#usuario__error").css("color", "red");
    }

}
function validarNombre(){
    if (expresiones.nombre.test(nombre.value)) {
        $("#nombre__error").css("visibility", "hidden");

    }else{
        $("#nombre__error").css("visibility", "visible");
        $("#nombre__error").css("color", "red");
    }

}
function validarApellido1(){
    if (expresiones.apellido1.test(apellido1.value)) {
        $("#apellido1__error").css("visibility", "hidden");

    }else{
        $("#apellido1__error").css("visibility", "visible");
        $("#apellido1__errorr").css("color", "red");
    }

}
function validarApellido2(){
    if (expresiones.apellido2.test(apellido2.value)) {
        $("#apellido2__error").css("visibility", "hidden");

    }else{
        $("#apellido2__error").css("visibility", "visible");
        $("#apellido2__error").css("color", "red");
    }

}
//funcion para validar el email
function validarEmail(){
    if (expresiones.email.test(email.value)) {
        $("#email__error").css("visibility", "hidden");

    }else{
        $("#email__error").css("visibility", "visible");
        $("#email__error").css("color", "red");
    }

}
//funcion que valida la contrasña
function validarContrasena(){
    if (expresiones.contrasena.test(contrasena.value)) {
        $("#contrasena__error").css("visibility", "hidden");

    }else{
        $("#contrasena__error").css("visibility", "visible");
        $("#contrasena__error").css("color", "red");
    }

}
function validarTelefono(){
    if (expresiones.telefono.test(telefono.value)) {
        console.log($("#telefono__error"));
        $("#telefono__error").css("visibility", "hidden");

    }else{
        $("#telefono__error").css("visibility", "visible");
        $("#telefono__error").css("color", "red");
    }

}

function validarCodigopostal(){
	if(expresiones.codigopostal.test(codigopostal.value)){
		document.getElementById('codigopostal__error').style.visibility = "hidden";
	}else{
		document.getElementById('codigopostal__error').style.visibility = "visible";
		document.getElementById('codigopostal__error').style.color = "red";
	}	
}
function validarComunidadAutonoma(){
	if(expresiones.municipio.test(municipio.value)){
		document.getElementById('municipio__error').style.visibility = "hidden";
	}else{
		document.getElementById('municipio__error').style.visibility = "visible";
		document.getElementById('municipio__error').style.color = "red";
	}	
}


function validarprovincia(){
	if(expresiones.provincia.test(provincia.value)){
		document.getElementById('provincia__error').style.visibility = "hidden";
	}else{
		document.getElementById('provincia__error').style.visibility = "visible";
		document.getElementById('provincia__error').style.color = "red";
	}	
}

//funcion para validar el rol
function validarRol(){
    if (expresiones.rol.test(rol.value)) {
        $("#rol__error").css("visibility", "hidden");

    }else{
        $("#rol__error").css("visibility", "visible");
        $("#rol__error").css("color", "red");
    }

}
function validarProvincia(cpostal){
    let cp_provincias = {
      1: "\u00C1lava", 2: "Albacete", 3: "Alicante", 4: "Almer\u00EDa", 5: "\u00C1vila",
      6: "Badajoz", 7: "Baleares", 08: "Barcelona", 09: "Burgos", 10: "C\u00E1ceres",
      11: "C\u00E1diz", 12: "Castell\u00F3n", 13: "Ciudad Real", 14: "C\u00F3rdoba", 15: "Coruña",
      16: "Cuenca", 17: "Gerona", 18: "Granada", 19: "Guadalajara", 20: "Guip\u00FAzcoa",
      21: "Huelva", 22: "Huesca", 23: "Ja\u00E9n", 24: "Le\u00F3n", 25: "L\u00E9rida",
      26: "La Rioja", 27: "Lugo", 28: "Madrid", 29: "M\u00E1laga", 30: "Murcia",
      31: "Navarra", 32: "Orense", 33: "Asturias", 34: "Palencia", 35: "Las Palmas",
      36: "Pontevedra", 37: "Salamanca", 38: "Santa Cruz de Tenerife", 39: "Cantabria", 40: "Segovia",
      41: "Sevilla", 42: "Soria", 43: "Tarragona", 44: "Teruel", 45: "Toledo",
      46: "Valencia", 47: "Valladolid", 48: "Vizcaya", 49: "Zamora", 50: "Zaragoza",
      51: "Ceuta", 52: "Melilla"
    };
    if(cpostal.length == 5 && cpostal <= 52999 && cpostal >= 1000)
      return cp_provincias[parseInt(cpostal.substring(0,2))];
    else
      return "----";
  }
  
  function validarComunidad(cpostal){
    let cp_comunidad = {
      1: "Pa\u00EDs Vasco", 2: "Castilla-La Mancha", 3: "Comunidad Valenciana", 4: "Andaluc\u00EDa", 5: "Castilla y Le\u00F3n",
      6: "Extremadura", 7: "Islas Baleares", 08: "Catalu\u00F1a", 09: "Castilla y Le\u00F3n", 10: "Extremadura",
      11: "Andaluc\u00EDa", 12: "Comunidad Valenciana", 13: "Castilla-La Mancha", 14: "Andaluc\u00EDa", 15: "Galicia",
      16: "Castilla-La Mancha", 17: "Catalu\u00F1a", 18: "Andaluc\u00EDa", 19: "Castilla-La Mancha", 20: "Pa\u00EDs Vasco",
      21: "Andaluc\u00EDa", 22: "Arag\u00F3n", 23: "Andaluc\u00EDa", 24: "Castilla y Le\u00F3n", 25: "Catalu\u00F1a",
      26: "La Rioja", 27: "Galicia", 28: "Comunidad de Madrid", 29: "Andaluc\u00EDa", 30: "Regi\u00F3n de Murcia",
      31: "Comunidad de Navarra", 32: "Galicia", 33: "Principado de Asturias", 34: "Castilla y Le\u00F3n", 35: "Islas Canarias",
      36: "Galicia", 37: "Castilla y Le\u00F3n", 38: "Islas Canarias", 39: "Cantabria", 40: "Castilla y Le\u00F3n",
      41: "Andaluc\u00EDa", 42: "Castilla y Le\u00F3n", 43: "Catalu\u00F1a", 44: "Arag\u00F3n", 45: "Castilla-La Mancha",
      46: "Comunidad Valenciana", 47: "Castilla y Le\u00F3n", 48: "Pa\u00EDs Vasco", 49: "Castilla y Le\u00F3n", 50: "Arag\u00F3n",
      51: "Ceuta", 52: "Melilla"
    };
    if(cpostal.length == 5 && cpostal <= 52999 && cpostal >= 1000)
      return cp_comunidad[parseInt(cpostal.substring(0,2))];
    else
      return "----";
  }
  codigopostal.onkeyup = function(){
    municipios.value = validarComunidad(codigopostal.value);
	provincia.value = validarProvincia(codigopostal.value);
  }
//funcion que validar dni y la letra del dni
function validardni() {
    let numero;
    let letr;
    let letra;
    let dn = dni.value;
    dni.value = dni.value.slice(0, 8) + dni.value.charAt(8).toUpperCase();
    if(expresiones.dni.test (dn) == true){
       numero = dn.substr(0,dn.length-1);
       letr = dn.substr(dn.length-1,1);
       numero = numero % 23;
       letra='TRWAGMYFPDXBNJZSQVHLCKET';
       letra=letra.substring(numero,numero+1);
      if (letra!=letr.toUpperCase()) {
        document.getElementById("dni__error").style.visibility = "visible";
        document.getElementById("dni__error").style.color = "red";
      }else{
        document.getElementById("dni__error").style.visibility = "hidden";
      }
    }else{
        document.getElementById("dni__error").style.visibility = "visible";
        document.getElementById("dni__error").style.color = "red";
     }
  }
function validarDireccion(){
	if(expresiones.direccion.test(direccion.value)){
		document.getElementById('direccion__error').style.visibility = "hidden";
	}else{
		document.getElementById('direccion__error').style.visibility = "visible";
		document.getElementById('direccion__error').style.color = "red";
	}	
}
function validarFechaNacimiento(){
	if(expresiones.fechanacimiento.test(fechanacimiento.value)){
		document.getElementById('fechanacimiento__error').style.visibility = "hidden";
	}else{
		document.getElementById('fechanacimiento__error').style.visibility = "visible";
		document.getElementById('fechanacimiento__error').style.color = "red";
	}	
}
 // funcion para el boton que almacena todas las funciones
function pulsarBoton(){
    validarUsuario();
    validarEmail();
    validarContrasena();
    validarApellido1();
    validarApellido2();
    validarNombre();
    validardni();
    validarTelefono();
    validarCodigopostal();
    validarProvincia();
    validarComunidadAutonoma();
	validarDireccion();
	validarFechaNacimiento();
	validarRol();
	
}
//oyentes de eventos
usuario.addEventListener("keyup", validarUsuario);
usuario.addEventListener("blur", validarUsuario);
email.addEventListener("keyup", validarEmail);
email.addEventListener("blur", validarEmail);
dni.addEventListener("keyup", validardni);
dni.addEventListener("blur", validardni);
nombre.addEventListener("keyup", validarNombre);
nombre.addEventListener("blur", validarNombre);
apellido1.addEventListener("keyup", validarApellido1);
apellido1.addEventListener("blur", validarApellido1);
apellido2.addEventListener("keyup", validarApellido2);
apellido2.addEventListener("blur", validarApellido2);
codigopostal.addEventListener("keyup", validarCodigopostal);
codigopostal.addEventListener("blur", validarCodigopostal);
provincia.addEventListener("keyup", validarProvincia);
provincia.addEventListener("blur", validarProvincia);
comunidadautonoma.addEventListener("keyup", validarComunidadAutonoma);
comunidadautonoma.addEventListener("blur", validarComunidadAutonoma);
telefono.addEventListener("keyup", validarTelefono);
telefono.addEventListener("blur", validarTelefono);
contrasena.addEventListener("keyup", validarContrasena);
contrasena.addEventListener("blur", validarContrasena);
direccion.addEventListener("keyup", validarDireccion);
direccion.addEventListener("blur", validarDireccion);
fechanacimiento.addEventListener("keyup", validarFechaNacimiento);
fechanacimiento.addEventListener("blur", validarFechaNacimiento);
rol.addEventListener("keyup", validarRol);
rol.addEventListener("blur", validarRol);
