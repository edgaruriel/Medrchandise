<?php
include_once("../funciones/mantener_sesion.php");
include_once("../config.inc.php"); 
include_once("../funciones/acceder_base_datos.php");
     
 $cdestino = "Location:../login.php";
 if ( (isset($_POST["btn_ingresar"])) && ($_POST["btn_ingresar"]=="Aceptar") ){
	 
	$pconexion = abrirConexion();
   	seleccionarBaseDatos($pconexion);
	
	$cusuario = $_POST["txt_usuario"];
 	$ccontrasena = $_POST["pass_usuario"];
	
	
	$cquery = "SELECT usuario.nick, usuario.contrasena FROM usuario";
   $cquery .= " WHERE usuario.nick = '$cusuario'";
   $cquery .= " AND usuario.contrasena = '$ccontrasena'";
   
   
   $usuarioArray = extraerRegistro($pconexion,$cquery);
   
   $result = existeRegistro($pconexion,$cquery);
	echo "<p>$result</p>";
	if( $result == true){
		echo "Result es valido";
		if(($usuarioArray[0]==$cusuario) && ($usuarioArray[1]==$ccontrasena)){
			echo "Entrando a la validacion de usuario y contraseña";
			$dquery="SELECT usuario.id_rol, usuario.id_usuario FROM usuario WHERE usuario.nick = '$cusuario'";
			$rolArray=extraerRegistro($pconexion,$dquery);
			
			if($rolArray[0]==1){
	   			//admin
				echo "Entro en admin";
	  		 	iniciarSesion($rolArray[1]);
	   			$cdestino = "Location:../index.php";
				
	   		}
			elseif($rolArray[0]==2){
				//usuario registrado
	   			echo "Entro en cliente registrado";
				iniciarSesion($rolArray[1]);
	    
	    		session_start();
	    		$carrito = array();
	   			$_SESSION["carrito"] = $carrito;
	    
	    		$cdestino = "Location:../index.php";
				
				}
		}
		else{
			$cdestino = "Location:../loginError.php";		
			}
	}
	else{$cdestino = "Location:../loginError.php";}
 }

 
 header($cdestino);
 exit();
 ?>