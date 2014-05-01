 window.onload = function() {
	 var pagar =	document.getElementById("Btnpagar");
	 pagar.onclick = pagarProductos;
 }
 
 function pagarProductos(){
	 alert("Compra terminada.");
		 document.getElementById('Btnsubmit').click();
		 alert("Gracias por comprar con nosotros."); 
		
	 }