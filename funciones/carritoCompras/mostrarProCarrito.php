<?php
//include_once("././config.inc.php"); 
//include_once("acceder_base_datos.php");

function listarProCarrito(){
	//session_start();
	$carrito = $_SESSION["carrito"];
	
	$pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
	
	$ccontenido = "";
	$idProductos = "";
	$preciosBase = "";
	 
	if(count($carrito)!=0){
		foreach ($carrito as $index => $producto){
		 	$cquery = "SELECT * FROM producto WHERE id_producto = ".$producto["id"];
		 	$lresult = mysqli_query($pconexion, $cquery); 
		 	 if (!$lresult) {
			   $cerror = "No fue posible recuperar la informaci�n de la base de datos.<br>";
			   $cerror .= "SQL: $cquery <br>";
			   $cerror .= "Descripci�n: ".mysqli_connect_error($pconexion);
			   die($cerror);
			   exit();
 			} 
		 	else{
		 		$adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH);
		 	 $ccontenido .= "<tr class=\"fila_producto\">";
		 	 $ccontenido .= "<td class=\"tabla_textocontenido\"> <img id=\"img_producto\" alt=\"\" src=\"imagen/prod.jpg\"> </td>";
		 //	 $ccontenido .= "</tr>";
		 //	 $ccontenido .= "<tr>";
			 	  $ccontenido .= "<td class=\"tabla_textocontenido\">";
			 	  $ccontenido .= $adatos["nombre"];
			 	  $ccontenido .= "</td>";
		 //	 $ccontenido .= "</tr>";
		 //	 $ccontenido .= "<tr>";
		 	 	  $ccontenido .= "<td class=\"tabla_textocontenido\">";
			 	  $ccontenido .= $adatos["precio"];
			 	  $ccontenido .= "</td>";
		// 	 $ccontenido .= "</tr>";
		// 	 $ccontenido .= "<tr>";
		 	 	  $ccontenido .= "<td class=\"tabla_textocontenido\">";
			 	  $ccontenido .= "<input type=\"number\" id=\"cantidad".$producto["id"]."\" name=\"cantidad".$producto["id"]."\" min=\"1\" value=\"".$producto["cantidad"]."\" onkeypress=\"return validarNumero(event)\" onchange='actualizarSubtotal(this)'>";
			 	  $ccontenido .= "</td>";
		// 	 $ccontenido .= "</tr>";
		// 	 $ccontenido .= "<tr>";
		 	 	  $ccontenido .= "<td class=\"tabla_textocontenido\">";
			 	  $ccontenido .= "$<input id=\"subtotal".$producto["id"]."\" name=\"subtotal_".$producto["id"]."\" value=\"".$producto["total"]."\" readonly>";
			 	  $ccontenido .= "</td>";
		// 	 $ccontenido .= "</tr>";
		// 	 $ccontenido .= "<tr>";
		 	 	  $ccontenido .= "<td class=\"tabla_textocontenido\">";
			 	  $ccontenido .= " <a class=\"eliminar_prod\" href=\"funciones/carritoCompras/eliminarProCarrito.php?ID=".$producto["id"]."\">Eliminar</a>";
			 	  $ccontenido .= "</td>";
		 	 $ccontenido .= "</tr>";
		 	 $idProductos .= $producto["id"]."-";
		 	 $preciosBase .= $adatos["precio"]."-";
		 	}
		 }
		
	}else{
	$ccontenido .= "<tr>";
   	$ccontenido .= "<td colspan=\"6\">No existe ningun producto en el carrito de compras</td>";		
   	$ccontenido .= "</tr>";
	} 
 //oculto todos los ids de los productos
 $ccontenido .= "<input type=\"hidden\" id=\"idTodos\" name=\"idTodos\" value=\"".$idProductos."\">";
 $ccontenido .= "<input type=\"hidden\" id=\"preciosBase\" name=\"preciosBase\" value=\"".$preciosBase."\">";	 
 cerrarConexion($pconexion); 
 return $ccontenido; 
}

function resumenCarrito(){
	$ccontenido = "";
	
	$carrito = $_SESSION["carrito"];
	
	if(count($carrito)!=0){
		$cantidadTotal = "";
		$precioTotal = "";
		foreach ($carrito as $index => $producto){
			$cantidadTotal += $producto["cantidad"];
			$precioTotal += $producto["total"];
		}
		
		$ccontenido .= "<div>";
		$ccontenido .= "Resumen:";
		$ccontenido .= "<br/>";
		$ccontenido .= " Total de Articulos:";
		$ccontenido .= "<br/>";
		$ccontenido .= "<input id=\"productoTotal\" name=\"productoTotal\" value=\"".$cantidadTotal."\" readonly>";
		$ccontenido .= "<br/>";
		$ccontenido .= "Precio Total:";
		$ccontenido .= "<input id=\"precioTotal\" name=\"precioTotal\" value=\"".$precioTotal."\" readonly>";
		$ccontenido .= "<br/>";
		$ccontenido .= " Incl. IVA";
		$ccontenido .= "<br/>";
		$ccontenido .= "<br/>";
		$ccontenido .= "<a id=\"btn_comprar\" class=\"boton\" href=\"pago.php\">Siguiente</a>";
		$ccontenido .= "</div>";
		
	}else{
		
	}
	return $ccontenido;
}
?>