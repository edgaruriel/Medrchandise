 window.onload = function() {
	 document.getElementById("btn_enviar").onclick = function(){return validacion()};
 }
var camposValidos = new Array();
function validacion() {
	nombre();
	correo();
    comentario();
	
	for (var i in camposValidos){
		if (camposValidos[i]== false){
			return false;
			break;
			}
		}
    form.submit();
	return true;
}

function nombre(){
	valor = document.getElementById("txt_nombre").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert("Ingrese su nombre");
		camposValidos[0]=false;
	}//end if
	else{
	camposValidos[0]=true;}
}//end function

function comentario(){//Al no ser obligatorio, lo podremos dejar vacio, pero si se rellena, entonces se tendrá que validar.
valor = document.getElementById("txt_comentarios").value;
	if( valor == null || valor.length == 0) {
        alert("Ingrese su comentario porfavor");
		camposValidos[1]=false;                                                  
	}else{
	
	camposValidos[1]=true;}
}

function correo(){
valor = document.getElementById("txt_correo").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert('Correo invalido, favor de proporcionar otro');
		camposValidos[2]=false;
	}
	else if( !(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(valor)) ) {
		alert('Correo invalido, favor de proporcionar otro');
		camposValidos[2]=false;
	}else{
	camposValidos[2]=true;
	}
}