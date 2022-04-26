//constantes que almacenan los identificadores
const usuario = document.getElementById("usuario")
const contra = document.getElementById("contrasena");
const boton = document.getElementById("boton");
//oculta los mensajes de errores
document.getElementById("usuario__error").style.visibility = "hidden";
document.getElementById("contrasena__error").style.visibility = "hidden";

//constantes para las expresiones regulares
const expresiones = {
    usuario: /^[a-zA-Z0-9À-ÿ_\-\S]{6,}$/,
    contra: /^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/
}
//funcion para validar los usuarios 
function validarUsuario(){
    if (expresiones.usuario.test(usuario.value)) {
        document.getElementById("usuario__error").style.visibility = "hidden";
    }else{
        document.getElementById("usuario__error").style.visibility = "visible";
        document.getElementById("usuario__error").style.color = "red";
       
    }

}
//funcion para validar la contraseña
function validarContrasena(){
    if (expresiones.contrasena.test(contrasena.value)) {
        document.getElementById("contrasena__error").style.visibility = "hidden";

    }else{
        document.getElementById("contrasena__error").style.visibility = "visible";
        document.getElementById("contrasena__error").style.color = "red";

    }

}

//funcion para el boton 
function pulsarBoton(){
    validarUsuario();
    validarContrasena();
    
}
//oyentes de eventos 
usuario.addEventListener("keyup", validarUsuario);
usuario.addEventListener("blur", validarUsuario);
contra.addEventListener("keyup", validarContrasena);
contra.addEventListener("blur", validarContrasena);
boton.addEventListener("click", pulsarBoton);





    



 

