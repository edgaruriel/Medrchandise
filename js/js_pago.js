 window.onload = function() {
	 var pagar =	document.getElementById("Btnpagar");
	 var cancelar = document.getElementById("confirmCancelar");
	 pagar.onclick = pagarProductos;
	 cancelar.onclick = cancelarProductos;
 }
 
 function pagarProductos(){
	
	 var validar = validarTarjetaCredito();
	 if(validar){
		 document.getElementById('Btnsubmit').click();
		 alert("Gracias por comprar con nosotros.");
	 }else{
		 alert('El número de tarjeta debe de tener 16 digitos');
	 }
		
}
 
 function validarTarjetaCredito(){
	 var tarjeta = document.getElementById("num_tarjeta").value;
	 //alert(tarjeta.length);
	 if(tarjeta.length == 16){
		 return true;
	 }else{
		 return false; 
	 }
		
	 
 }
 
 function cancelarProductos(){
	var resultado = confirm("¿Está seguro que desea cancelar su compra?. Se eliminaran todos los productos su carrito");
	//alert(resultado);
	if(resultado == true){
		window.location="funciones/carritoCompras/eliminarProCarrito.php?Tipo=todo";
		 //document.getElementById('Btncancelar').click();
	}else{
		
	}
 }
 
 function validarNumero(evt){
	 var charCode = (evt.which) ? evt.which : event.keyCode
	         if (charCode > 31 && (charCode < 48 || charCode > 57))
	            return false;
	 return true;
 }