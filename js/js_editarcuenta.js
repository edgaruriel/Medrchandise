// JavaScript Document
 window.onload = function() {
	 document.getElementById("btn_registrarse").onclick = function(){return validacion()};
	 document.getElementById("nombre").onkeypress= function(){return permite(event, 'car')};
	 document.getElementById("apellido").onkeypress= function(){return permite(event, 'car')};
	 document.getElementById("contrasena").onkeypress= function(){return permite(event, 'num_car')};
	 document.getElementById("confcontrasena").onkeypress= function(){return permite(event, 'num_car')};
	 document.getElementById("direccion").onkeypress= function(){return permite(event, 'num_car')};
	 document.getElementById("telefono").onkeypress= function(){return permite(event, 'num')};
	 document.getElementById("estado").onkeypress= function(){return permite(event, 'car')};
	 document.getElementById("ciudad").onkeypress= function(){return permite(event, 'car')};
	 document.getElementById("cp").onkeypress= function(){return permite(event, 'num')};
 }
var camposValidos = new Array();
function validacion() {
	nombre();
	apellido();
	fecha();
	correo();
	contrasena();
	confcontrasena();
	direccion();
	telefono();
	estado();
	ciudad();
	cp();
    validarcontrasenas();
	
	for (var i in camposValidos){
		if (camposValidos[i]== false){
			return false;
			break;
			}
		}
		
	return true;
}
	
function permite(elEvento, permitidos) {
	// Variables que definen los caracteres permitidos
	var numeros = "0123456789";
	var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóú";
	var numeros_caracteres = numeros + caracteres;
	var teclas_especiales = [8, 37, 39, 46];
	// 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
	// Seleccionar los caracteres a partir del parámetro de la función
	switch(permitidos) {
		case 'num':
		permitidos = numeros;
		break;
		case 'car':
		permitidos = caracteres;
		break;
		case 'num_car':
		permitidos = numeros_caracteres;
		break;}
		// Obtener la tecla pulsada
	var evento = elEvento || window.event;
	var codigoCaracter = evento.charCode || evento.keyCode;
	var caracter = String.fromCharCode(codigoCaracter);
	// Comprobar si la tecla pulsada es alguna de las teclas especiales
	// (teclas de borrado y flechas horizontales)
	var tecla_especial = false;
	for(var i in teclas_especiales) {
		if(codigoCaracter == teclas_especiales[i]) {
			tecla_especial = true;
		break;
		}
	}// Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
// o si es una tecla especial
	return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
	
function nombre(){
	valor = document.getElementById("nombre").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert('Debes de proporcionar por lo menos tu nombre');
		camposValidos[0]=false;
	}//end if
	else{
	camposValidos[0]=true;}
}//end function

function apellido(){//Al no ser obligatorio, lo podremos dejar vacio, pero si se rellena, entonces se tendrá que validar.
valor = document.getElementById("apellido").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		camposValidos[1]=true;                                                  
	}else{
	
	camposValidos[1]=true;}
}

function fecha(){
	var ano = document.getElementById("anio").value;
	var mes = document.getElementById("mes").value;
	var dia = document.getElementById("dia").value;
	valor = new Date(ano, mes, dia);
	if( isNaN(valor) || ano==0 || dia ==0 ) {
		camposValidos[2]=false;
		alert('Danos tu fecha');
	}else if (ano > 1996){
		alert('Debes de tener 18 años para poder registrarte');
		camposValidos[2]=false;
	}else{
		camposValidos[2]=true;
	}

}
	
function correo(){
valor = document.getElementById("correo").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert('Debes proporcionarnos una cuenta de e-mail para poder comunicarnos contigo');
		camposValidos[3]=false;
	}
	else if( !(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(valor)) ) {
		alert('Correo invalido, favor de proporcionar otro');
		camposValidos[3]=false;
	}else{
	camposValidos[3]=true;
	}
}

function contrasena(){
valor = document.getElementById("contrasena").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert('Debes de tener una cotrase\u00f1a');
		camposValidos[4]=false;
	}else{
	
	camposValidos[4]=true;}
}

function confcontrasena(){
valor = document.getElementById("confcontrasena").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert('No se ha confirmado la constrase\u00f1a');
		camposValidos[5]=false;
	}else{
	
	camposValidos[5]=true;}
}

function validarcontrasenas(){
    valorc = document.getElementById("contrasena").value;
    valor = document.getElementById("confcontrasena").value;
    if(valor!=valorc){
        alert('Las contrase\u00f1as no coinciden');
        camposValidos[11]=false;
    }else{
        camposValidos[11]=true;
    }
}

function direccion(){
valor = document.getElementById("direccion").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		camposValidos[6]=true;                                                  
	}else{
	camposValidos[6]=true;}
}

function telefono(){
valor = document.getElementById("telefono").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		camposValidos[7]=true;                                                  
	}else if( !(/^\d{7}$/.test(valor)) ) {
		alert('El telefono debe de tener 7 digitos');
		return camposValidos[7]=false;
		
	}
	else{
	
	camposValidos[7]=true;}
}

function estado(){
valor = document.getElementById("estado").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		camposValidos[8]=true;                                                  
	}else{
	
	camposValidos[8]=true;}
}

function ciudad(){
valor = document.getElementById("ciudad").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		camposValidos[9]=true;                                                  
	}else{
	
	camposValidos[9]=true;}
}

function cp(){
valor = document.getElementById("cp").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		camposValidos[10]=true;                                                  
	}else{
	camposValidos[10]=true;}
}
