<?php
session_start();

function opciones_usuario(){
    $opciones = "";
 if(isset($_SESSION["cidusuario"]) && ($_SESSION["cidusuario"] == "admin")){
     $opciones .= "Tipo de usuario:<br>";
     $opciones .= "<select id='tipo_usuario' name='tipo_usuario'>";
     $opciones .= "<option value='2'>Cliente</option>";
     $opciones .= "<option value='1'>Administrador</option>";
     $opciones .= "";
     $opciones .= "</select>";
     
 }else{
     
     if(isset($_SESSION["cidusuario"]) && ($_SESSION["cidusuario"] == "cliente")){
         $opciones .= "<input type='text' name='tipo_usuario' value='2'>";
     }else{
        $opciones .= "<input type='text' name='tipo_usuario' value='2'>";
     }
 }
    return $opciones;
}

function agregarUsuario(){

 $cmensaje = "";
 if ( isset($_POST["btn_registrarse"]) && $_POST["btn_registrarse"] == "Registrarse"){
     
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

   $pconexion = abrirConexion();
   seleccionarBaseDatos($pconexion);
   
   $cquery = "SELECT nick FROM usuario";
   $cquery .= " WHERE nick = '$cnombreusuario'";
   
   if ( !existeRegistro($pconexion, $cquery) ){
	   
	   $cquery = "INSERT INTO usuario";
	   $cquery .= " (nombre, apellido, correo, fecha_nacimiento, direccion, telefono, estado, ciudad, codigo_postal, id_rol, nick, contrasena)";
	   $cquery .= " VALUES ('$cnombre', '$capellido', '$ccorreo', '$cfechaNac', '$cdireccion', '$ctelefono', '$cestado', '$cciudad', '$ccp', '$ctipousuario', '$cnombreusuario', '$ccontrasena')";
       
	   if (insertarDatos($pconexion, $cquery) ){
	     $cmensaje = "Usuario registrado";
	   }
	   else{
	     $cmensaje = "No fue posible registrar el usuario";	 
           }
   }
   else{
     $cmensaje = "Ya existe un usuario con el nombre de usuario: $cnombreusuario";
   }	 
   cerrarConexion($pconexion);
 
 }

 return $cmensaje;
}
?>