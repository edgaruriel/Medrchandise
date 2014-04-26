 window.onload = function() {
	 var valor = document.getElementById("idTodos").value;
	 
if(valor.length=!0){
	 var ArrayId = valor.split("-");
		//alert("Arreglo " + ids);
		//alert("tamaño del array:" + ArrayId.length);
		for(var i=0; i<ArrayId.length-1; i++){
		//	alert("Alerta " +document.getElementsByName("cantidad"+ArrayId[i]).value);
			//document.getElementsByTagName("cantidad"+ArrayId[i]).onkeypress = validarNumero(event);
		//	document.getElementById("cantidad"+ArrayId[i]).onchange = actualizarSubtotal(this.value);
		}
}else{
	alert("No tiene productos");
}	 
	
 }

 function validarNumero(evt){
	 var charCode = (evt.which) ? evt.which : event.keyCode
	         if (charCode > 31 && (charCode < 48 || charCode > 57))
	            return false;
	 
	 return true;
 }

function actualizarSubtotal(value){
	var preciosBase = document.getElementById("preciosBase").value;
	var idTodos = document.getElementById("idTodos").value;
	var ArrayPrecio = preciosBase.split("-");
	var ArrayId = idTodos.split("-");
	var Index = value.name;
	var ArrayIndex = Index.split("cantidad"); 
	
	var Bandera;	
	for(var i=0;i<ArrayId.length-1;i++){
		if(ArrayId[i] == ArrayIndex[1]){
			Bandera = i;
			break;
		}
	}
	var precioBase = ArrayPrecio[Bandera];
	var resultado = value.value * precioBase;	
	document.getElementById("subtotal" + ArrayIndex[1]).value = resultado;
	actualizarResumen();
	
}

function actualizarResumen(){
	var idTodos = document.getElementById("idTodos").value;
	var ArrayId = idTodos.split("-");
	var articuloTotal = 0;
	var precioTotal = 0;
	for(var i =0; i<ArrayId.length-1; i++){
	//	alert("cantidad "+i + " name: cantidad"+ArrayId[i] +" :" + document.getElementById("cantidad"+ArrayId[i]).value);
	//	alert("subtotal "+i +" :" + document.getElementById("subtotal"+ArrayId[i]).value);
	var auxArticulos = 	document.getElementById("cantidad"+ArrayId[i]).value;
	var auxPrecios = document.getElementById("subtotal"+ArrayId[i]).value;
	
	var auxNumeroArticulos = parseInt(auxArticulos);
	var auxNumeroPrecios = parseInt(auxPrecios);
		articuloTotal += auxNumeroArticulos;
		precioTotal += auxNumeroPrecios;
		//alert("articulos: " + auxArticulos + " precios: "+ auxPrecios);
	}
	document.getElementById("productoTotal").value = articuloTotal;
	document.getElementById("precioTotal").value = precioTotal;
/*	
	var productoTotal = document.getElementById("productoTotal").value;	
	var numeroProTotal = parseInt(productoTotal);
	document.getElementById("productoTotal").value = (numeroProTotal + 1);
	var precioTotal = document.getElementById("precioTotal").value;
	var numeroPreTotal = parseInt(precioTotal);
	var numeroPreBase = parseInt(precioBase);
	document.getElementById("precioTotal").value = (numeroPreTotal + numeroPreBase);
*/	
}
