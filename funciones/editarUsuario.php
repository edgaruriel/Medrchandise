<?php
include_once("../config.inc.php"); 
include_once("acceder_base_datos.php");

     if ( isset($_POST["btn_registrarse"]) && $_POST["btn_registrarse"] == "Registrarse"){
 
    $pconexion = abrirConexion();
   seleccionarBaseDatos($pconexion);
    
         $cid_usuario = $_POST["hdn_idusuario"];
    $cnombre = $_POST["nombre"];
     $capellido = $_POST["apellido"];
     $cnombreusuario = $_POST["nombreusuario"];
     $cdia = $_POST["dia"];
     $cmes = $_POST["mes"];
     $canio = $_POST["anio"];
     $cfechaNac = $canio."-".$cmes."-".$cdia;
     $ccorreo = $_POST["correo"];
     $ccontrasena = $_POST["contrasena"];
     $cdireccion = $_POST["direccion"];
     $ctelefono = $_POST["telefono"];
     $cestado = $_POST["estado"];
     $cciudad = $_POST["ciudad"];
     $ccp = $_POST["cp"];
     $ctipousuario = $_POST["tipo_usuario"];
         
 $cquery = "UPDATE usuario";
   $cquery .= " SET nombre = '$cnombre',";
   $cquery .= " apellido = '$capellido',";
         $cquery .= " correo = '$ccorreo',";
         $cquery .= " fecha_nacimiento = '$cfechaNac',";
         $cquery .= " direccion = '$cdireccion',";
         $cquery .= " telefono = '$ctelefono',";
         $cquery .= " estado = '$cestado',";
         $cquery .= " ciudad = '$cciudad',";
         $cquery .= " codigo_postal = '$ccp',";
         $cquery .= " id_rol = '$ctipousuario',";
         $cquery .= " nick = '$cnombreusuario',";
         $cquery .= " contrasena = '$ccontrasena'";
   $cquery .= " WHERE (id_usuario = $cid_usuario)";
 
   if ( editarDatos($pconexion, $cquery) ){
	   
     $curl = "Location:".$GLOBALS["raiz_sitio"]."catalogoClientes.php";  
	 }
   else{
	   
     $curl = "Location:".$GLOBALS["raiz_sitio"]."cuenta_usuario.php?cid_usuario=$cid_usuario";
	 }
	 
   cerrarConexion($pconexion);
   header($curl);
   exit();
 }

?>