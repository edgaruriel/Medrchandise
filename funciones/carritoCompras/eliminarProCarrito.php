<?php


if( isset($_GET["Tipo"]) && $_GET["Tipo"] == "unElemento"){			
		$idProducto = $_REQUEST["ID"];
		session_start();
		$carrito = $_SESSION["carrito"];
		
		echo "tama�o antes: ".count($carrito);
		echo "<br/>";
		unset($carrito[$idProducto]);
		$_SESSION["carrito"] = $carrito;
		echo "tama�o Despues: ".count($carrito);
		echo "<br/>";
		$cdestino = "Location:../../carrito.php";
		header($cdestino);
		exit();	
}else{
	if( isset($_GET["Tipo"]) && $_GET["Tipo"] == "todo"){
		session_start();
		$carritoNuevo = array();
		$_SESSION["carrito"] = $carritoNuevo;
		$cdestino = "Location:../../index.php";
		header($cdestino);
	}else{
		$cdestino = "Location:../../index.php";
		header($cdestino);
	}

}
