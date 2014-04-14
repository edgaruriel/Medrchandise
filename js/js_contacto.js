function EnviarCorreo() {
    
}

function CrearMensajeGracias() {
    alert("Gracias por su comentario");
}

window.onload = function () {
    document.getElementById("btn_enviar").onclick = CrearMensajeGracias;
}