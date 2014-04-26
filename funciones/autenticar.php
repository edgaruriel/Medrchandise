<?php
 include_once("mantener_sesion.php");

 $cdestino = "Location:../index.php";
 if ( (isset($_POST["btn_ingresar"])) && ($_POST["btn_ingresar"]=="Aceptar") ){
   if(($_POST["txt_usuario"]=="admin") && ($_POST["pass_usuario"]=="root")){
	   //admin
	   echo "Entro en admin";
	   iniciarSesion($_POST["txt_usuario"]);
	   $cdestino = "Location:../index.php";
	   
	   }else{
	   	//usuario registrado
	   	echo "Entro en cliente registrado";
	   	if (($_POST["txt_usuario"]=="cliente") && ($_POST["pass_usuario"]=="registrado")) {
	    iniciarSesion($_POST["txt_usuario"]);
	    
	    session_start();
	    $carrito = array();
	    $_SESSION["carrito"] = $carrito;
	    
	    $cdestino = "Location:../index.php";
	   	}else{
	   		echo "Entro en else de cliente";
	   	}
	   }
   
 }else{
 	echo "No entro";
 }
 header($cdestino);
 exit();
 ?>