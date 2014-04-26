<?php
include_once("../../config.inc.php"); 
include_once("../acceder_base_datos.php");


if( isset($_POST["btn_agregarProdCarrito"]) && $_POST["btn_agregarProdCarrito"] == "agregar producto"){

	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);

	$cantidad = $_REQUEST["pro_cantidad"];
	$idProducto = $_REQUEST["pro_id"];
	$total = $_REQUEST["pro_total"];
	/*
	echo "id: ".$idProducto;
	echo "<br/>";
	echo "cantidad: ".$cantidad;
	echo "<br/>";
	echo "total: ".$total;
	echo "<br/>";
	*/
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
		//echo "3.1";
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
		//echo "3.2";
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
	//echo "2";
	$newProducto = array(
			"id" => $idProducto,
			"cantidad" => $cantidad,
			"total" => $total
		);		
		$carrito[$idProducto] = $newProducto;
		$_SESSION["carrito"] = $carrito;
}
//echo "3"; 
}
$cdestino = "Location:../../index.php";
 header($cdestino);
 exit();
/*
echo "1 productos agregados al carrito";
echo "<br/>";

foreach ($carrito as $ind => $pro){
	echo "index del carrito: ".$ind;
	echo "<br/>";
	echo "id del producto: ".$pro["id"];
	echo "<br/>";
	echo "cantidad del producto: ".$pro["cantidad"];
	echo "<br/>";
	echo "total del producto: ".$pro["total"];
	echo "<br/>";
	echo "<br/>";
}
*/
