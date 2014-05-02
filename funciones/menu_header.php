<?php
include_once("funciones/mantener_sesion.php");

//$rolArray = obtenerInfoSesion();

session_start();


function listarMenu(){
	
	/**$pconexion = abrirConexion();
   	seleccionarBaseDatos($pconexion);
	$idusuario = $_SESSION["cidusuario"];
	
	$dquery="SELECT usuario.id_rol FROM usuario WHERE usuario.id_usuario = '$idusuario'";
			$rolArray=extraerRegistro($pconexion,$dquery);**/
	
	
 $menu = "";
 //if(isset($_SESSION["cidusuario"]) && ($_SESSION["cidusuario"] == "admin")){
	 if(isset($_SESSION["cidusuario"])){
		 $rolArray = obtenerInfoSesion();
	 if($rolArray[0] == 1){
 	 	
 	$menu .= "<a class=\"menu\" href=\"index.php\">";
 	$menu .= "Inicio";
 	$menu .= "</a>";
 	
	$menu .= "<a class=\"menu\" href=\"productos.php\">";
	$menu .= "Productos";
 	$menu .= "</a>";
 	
 	$menu .= "<a  class=\"menu\" href=\"ofertas.php\">";
 	$menu .= "Ofertas";
 	$menu .= "</a>";
 	 	
 	$menu .= "<a class=\"menu\" href=\"catalogoOfertas.php\">";
 	$menu .= "Administrar Ofertas";
 	$menu .= "</a>";
 	
 	$menu .= "<a class=\"menu\" href=\"catalogoProductos.php\">";
 	$menu .= "Administrar productos";
 	$menu .= "</a>";
 	
 	$menu .= "<a class=\"menu\" href=\"catalogoClientes.php\">";
 	$menu .= "Administrar clientes";
 	$menu .= "</a>";
	
 	
 }
 //if(isset($_SESSION["cidusuario"]) && ($_SESSION["cidusuario"] == "cliente")){
 elseif($rolArray[0] == 2){
 	
		
 	$menu .= "<a class=\"menu\" href=\"index.php\">";
 	$menu .= "Inicio";
 	$menu .= "</a>";
 	
	$menu .= "<a class=\"menu\" href=\"productos.php\">";
	$menu .= "Productos";
 	$menu .= "</a>";
 	
 	$menu .= "<a  class=\"menu\" href=\"ofertas.php\">";
 	$menu .= "Ofertas";
 	$menu .= "</a>";
 	
 	$menu .= "<a class=\"menu\" href=\"contacto.php\">";
 	$menu .= "Contacto";
 	$menu .= "</a>";
 				
 	}
	}else{
 	$menu .= "<a class=\"menu\" href=\"index.php\">";
 	$menu .= "Inicio";
 	$menu .= "</a>";
 	
	$menu .= "<a class=\"menu\" href=\"productos.php\">";
	$menu .= "Productos";
 	$menu .= "</a>";
 	
 	$menu .= "<a  class=\"menu\" href=\"ofertas.php\">";
 	$menu .= "Ofertas";
 	$menu .= "</a>";
 	
 	$menu .= "<a class=\"menu\" href=\"contacto.php\">";
 	$menu .= "Contacto";
 	$menu .= "</a>";
 	}
 
 return $menu;
}

function listarPanel(){
	$panel = "";	 
	//if(isset($_SESSION["cidusuario"]) && ($_SESSION["cidusuario"] == "admin")){
		if(isset($_SESSION["cidusuario"])){
		 $rolArray = obtenerInfoSesion();
		if($rolArray[0] == 1){
	   $panel .= "<ul id=\"nombre_usuario\">";
		$panel .= 	"<li><a href=\"#\">Usuario:".$rolArray[1].".</a>";
	   $panel .= 		"<ul>";
	   $panel .= 			"<li class=\"elem_usuario\"> <a href=\"cuenta_usuario.php?cid_usuario=$rolArray[2]\" class=\"link_usuario\">Cuenta</a></li>";
	   $panel .= 			"<li class=\"elem_usuario\"> <a href=\"funciones/cerrar_sesion.php\" class=\"link_usuario\">Salir</a></li>";
	   $panel .= 		"</ul>";
	   $panel .= 	"</li>";
	   $panel .= "</ul>";
	 
	   
	   }
	   // if(isset($_SESSION["cidusuario"]) && ($_SESSION["cidusuario"] == "cliente")){
	   elseif($rolArray[0] == 2){
	   //$panel .= "<a id=\"nombre_usuario\" >";
	   //$panel .= "Usuario:".$_SESSION["cidusuario"].".";
	   //$panel .= "</a>";

		$panel .= "<ul id=\"nombre_usuario\">";
		$panel .= 	"<li><a href=\"#\">Usuario:".$rolArray[1].".</a>";
	   $panel .= 		"<ul>";
	   $panel .= 			"<li class=\"elem_usuario\"> <a href=\"cuenta_usuario.php?cid_usuario=$rolArray[2]\" class=\"link_usuario\">Cuenta</a></li>";
	   $panel .= 			"<li class=\"elem_usuario\"> <a href=\"funciones/cerrar_sesion.php\" class=\"link_usuario\">Salir</a></li>";
	   $panel .= 		"</ul>";
	   $panel .= 	"</li>";
	   $panel .= "</ul>";
	   $panel .= "<a class=\"boton\" id=\"btn_numArtic\" href=\"carrito.php\">";
	   $panel .= "<span class=\"carrito\">". count($_SESSION["carrito"])." Art&iacute;culos</span>";
	   $panel .= "</a>";
	   }
	  }else{
	  	
	   $panel .= "<a id=\"registrarse\" class=\"boton\" value=\"Registrarse\" href=\"registro.php\">";
	   $panel .= "Registrarse";
	   $panel .= "</a>";
	   
	   $panel .= "<a id=\"identificarse\" class=\"boton\" value=\"Identificarse\" href=\"login.php\">";
	   $panel .= "Ingresar";
	   $panel .= "</a>";
	  }  	
	   	 			 
 
return 	$panel; 
}

?>