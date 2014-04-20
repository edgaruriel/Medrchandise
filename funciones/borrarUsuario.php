<?php
include_once("../config.inc.php"); 
include_once("acceder_base_datos.php");
$cid_usuario = $_GET["cid_usuario"]; 
$pconexion = abrirConexion();
seleccionarBaseDatos($pconexion);
$cquery = "DELETE From  usuario Where id_usuario = $cid_usuario";
 
 
  if ( eliminarDatos($pconexion, $cquery) ){
	   
     $curl = "Location:".$GLOBALS["raiz_sitio"]."catalogoClientes.php";  
	 }
   else{
	   
     $curl = "Location:".$GLOBALS["raiz_sitio"]."productos.php?cid_producto=$cid_producto";
	 }
	 
   cerrarConexion($pconexion);
   header($curl);
   exit();
?>