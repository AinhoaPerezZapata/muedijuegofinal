//constantes que almcenan los identificadores
const usuario = document.getElementById("usuario");
const email = document.getElementById("email");
const boton = document.getElementById("boton");
//ocultamos los mensajes de errores
document.getElementById("usuario__error").style.visibility = "hidden";
document.getElementById("email__error").style.visibility = "hidden";
const expresiones = {
    usuario : /^[a-zA-Z0-9\_\-]{6,}$/,
    email :  /^[a-zA-Z0-9_.+-\S]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
};
//funcion para validar el usuario
function validarUsuario(){
    if (expresiones.usuario.test(usuario.value)) {
        document.getElementById("usuario__error").style.visibility = "hidden";

    }else{
        document.getElementById("usuario__error").style.visibility = "visible";
        document.getElementById("usuario__error").style.color = "red";
    }

}
//constante para validar el email
function validarEmail(){
    if (expresiones.email.test(email.value)) {
        document.getElementById("email__error").style.visibility = "hidden";

    }else{
        document.getElementById("email__error").style.visibility = "visible";
        document.getElementById("email__error").style.color = "red";
    }

}

//funcion para el boton
function pulsarBoton(){
    validarUsuario();
    validarEmail();
}
//oyentes de eventos
usuario.addEventListener("keyup", validarUsuario);
usuario.addEventListener("blur", validarUsuario);
email.addEventListener("keyup", validarEmail);
email.addEventListener("blur", validarEmail);
boton.addEventListener("click", pulsarBoton);




