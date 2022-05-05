//constantes que almacenan los identificadores del html
const password = document.getElementById("password");
const Rcontrasena = document.getElementById("Rcontrasena");
//ocultamos los mensajes de errores
document.getElementById("Rcontrasena__error").style.visibility = "hidden";
document.getElementById("contrasena__error").style.visibility = "hidden";
//constantes para las expresiones regulares
const expresiones = {
   password: /^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/
}
//funcion para validar la contraseña
function validarContrasena(){
   if (expresiones.password.test(password.value)) {
        document.getElementById("contrasena__error").style.visibility = "hidden";

    }else{
        document.getElementById("contrasena__error").style.visibility = "visible";
        document.getElementById("contrasena__error").style.color = "red";
    }
   
}
//funcion para que las contraseñas sean iguales
function validarContrasena2(){
    if (Rcontrasena.value==password.value) {
        document.getElementById("Rcontrasena__error").style.visibility = "hidden";

    }else{
        document.getElementById("Rcontrasena__error").style.visibility = "visible";
        document.getElementById("Rcontrasena__error").style.color = "red";
    }
}
//funcion para el boton que almacena todas las funciones
function pulsarBoton(){
    validarContrasena();
    validarContrasena2();
}
//oyentes de eventos
password.addEventListener("keyup", validarContrasena);
password.addEventListener("blur", validarContrasena);
Rcontrasena.addEventListener("keyup", validarContrasena2);
Rcontrasena.addEventListener("blur", validarContrasena2);
boton.addEventListener("click", pulsarBoton);