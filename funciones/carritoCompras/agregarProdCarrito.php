<?php
include_once("../../config.inc.php"); 
include_once("../acceder_base_datos.php");


if( isset($_POST["btn_agregarProdCarrito"]) && $_POST["btn_agregarProdCarrito"] == "agregar"){

	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);

	$cantidad = $_REQUEST["pro_cantidad"];
	$idProducto = $_REQUEST["pro_id"];
	$total = $_REQUEST["pro_total"];
	
 	session_start();

	$carrito = $_SESSION["carrito"];

if(count($carrito)!= 0){
		//valida que el producto no se encuentre en el carrito
		$bandera = 0;
		$indexAux;
	foreach ($carrito as $index => $producto){
		if($producto["id"] == $idProducto){
			$bandera = 1;
			$indexAux = $index;
			echo "3";
			break;
		}
	}
	if($bandera!=0){
		
		//actualiza producto
	$prodRepetido =	$carrito[$indexAux];
		$auxCantidad =  $prodRepetido["cantidad"];
		$auxTotal = $prodRepetido["total"];
		$newCantidad = $cantidad + $auxCantidad;
		$newTotal = $total + $auxTotal;
	$prodRepetido["cantidad"] = $newCantidad;
	$prodRepetido["total"] = $newTotal;
	$carrito[$indexAux] = $prodRepetido;
	$_SESSION["carrito"] = $carrito;
	}else{
		
		//agrega nuevo producto
		$newProducto = array(
			"id" => $idProducto,
			"cantidad" => $cantidad,
			"total" => $total
		);
		
		$carrito[$idProducto] = $newProducto;
		$_SESSION["carrito"] = $carrito;
	}
	
}else{
	
	$newProducto = array(
			"id" => $idProducto,
			"cantidad" => $cantidad,
			"total" => $total
		);		
		$carrito[$idProducto] = $newProducto;
		$_SESSION["carrito"] = $carrito;
}
$cdestino = "Location:../../index.php";

}else{
	//actualizar el carrito de compras antes de finalizar la compra
	if( isset($_POST["Btnsubmit"]) && $_POST["Btnsubmit"] == "comprar"){
		
		session_start();
		$carrito = $_SESSION["carrito"];
		
		if(count($carrito)!=0){
		
			foreach ($carrito as $index => $producto){		
				$cantidad = $_REQUEST["cantidad".$producto["id"]];
				$subtotal = $_REQUEST["subtotal".$producto["id"]];
				$producto["cantidad"] = $cantidad;
				$producto["total"] = $subtotal;
				$carrito[$index] = $producto;
	
			}
			$_SESSION["carrito"] = $carrito;
			$cdestino = "Location:../../pago.php";
		
		}
		
		
	}else{
		
		//agregar a BD
		if( isset($_POST["Btnsubmit"]) && $_POST["Btnsubmit"] == "pago"){
			session_start();
			$carrito = $_SESSION["carrito"];
			 $Total = "";
			foreach ($carrito as $index => $producto){
				$Total += $producto["total"];
			}
			
			 	$pconexion = abrirConexion();
   			 	seleccionarBaseDatos($pconexion);
				date_default_timezone_set('UTC');
				$fecha = date("Y-m-d");
			$cquery	 = "INSERT INTO carrito";
		   	$cquery .= " (id_usuario, fecha, total)";
		   	$cquery .= " VALUES ('1', '$fecha', $Total)";
       
		 if (insertarDatos($pconexion, $cquery)){
	     	
		 $query= "Select * from carrito order by idCarrito DESC LIMIT 1";
		$ultimoRegistro = extraerRegistro($pconexion, $query);
		//print_r($id);
		$id = $ultimoRegistro["idCarrito"];
			
			foreach ($carrito as $index => $producto){
			$equery = "INSERT INTO carrito_has_producto";
			$equery .= "(idCarrito, id_producto, cantidad, subtotal)";
			$idProducto = $producto["id"];
			$cantidadProducto = $producto["cantidad"];
			$subtotalProducto = $producto["total"];
			$equery .= " VALUES ('$id', '$idProducto', $cantidadProducto, $subtotalProducto)";
				if(!insertarDatos($pconexion, $equery)){
					$cmensaje = "No fue posible registrar el carrito tiene productos";
					break;
				}

			$dquery="SELECT producto.cantidad_existencia FROM producto WHERE producto.id_producto = '$idProducto'";
			$productoArray=extraerRegistro($pconexion,$dquery);	

			$nuevaCantidad = $productoArray[0] - $cantidadProducto;
			if($nuevaCantidad < 0){
				$nuevaCantidad = 0;
			}
			
			$uquery = "UPDATE producto";
			$uquery .= " SET cantidad_existencia = '$nuevaCantidad'";
			$uquery .= " WHERE (id_producto = $idProducto)";
			
				if (!editarDatos($pconexion, $uquery) ){
					$cmensaje = "No fue posible actualizar el producto";
					break;
				}
			}
		 	//$cmensaje = "Registrado carrito tiene productos";	     	
	    // 	$cquery2 = "SELECT * ";	    
	    unset($_SESSION["carrito"]);
	    $nuevoCarrito = array();
	    $_SESSION["carrito"] = $nuevoCarrito; 	
	   	}
	  	 else{
	     $cmensaje = "No fue posible registrar el usuario";	 
           }
			
		}
		//echo $cmensaje;
	$cdestino = "Location:../../index.php";
	}

}

header($cdestino);
exit();

