<?php
?>
<html>
<head>
<script type="text/javascript">
	function recarga_padre_y_cierra_ventana(){
	window.opener.location.reload();
	window.close();
	}
</script>
<title>Test de carrito compra</title>
</head>
<body onLoad="recarga_padre_y_cierra_ventana()">
		<div>
		<form id="btn_agregarProdCarrito" method="post" action="funciones/carritoCompras/agregarProdCarrito.php">
		<br/>
		<label for="pro_id">Id del producto:</label>
		<input id="pro_id" name="pro_id" type="text" />
		<br/>
		<label for="pro_cantidad">Cantidad:</label>
		<input id="pro_cantidad" name="pro_cantidad" type="text" />
		<br/>
		<label for="pro_total">Total en precio:</label>
		<input id="pro_total" name="pro_total" type="text" />
		<br/>
		<input type="submit" value="agregar" id="btn_agregarProdCarrito" name="btn_agregarProdCarrito">
		</form>
		</div>
		<br/>
</body>
</html>
