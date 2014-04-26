<?php

$idProducto = $_REQUEST["ID"];
session_start();
$carrito = $_SESSION["carrito"];


echo "tamaño antes: ".count($carrito);
echo "<br/>";
unset($carrito[$idProducto]);
$_SESSION["carrito"] = $carrito;
echo "tamaño Despues: ".count($carrito);
echo "<br/>";
$cdestino = "Location:../../carrito.php";
header($cdestino);
exit();