<?php
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
         $opciones .= "<input type='hidden' name='tipo_usuario' value='2'>";
     }else{
        $opciones .= "<input type='hidden' name='tipo_usuario' value='2'>";
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

function listarUsuarios(){
 
 $ccontenido = "";
 //Conexi�n con el servidor de base de datos
 $pconexion = abrirConexion();
 //Selecci�n de la base de datos
 seleccionarBaseDatos($pconexion);
 //Construcci�n de la sentencia SQL
 $cquery = "SELECT usuario.id_usuario AS Id_Usuario, usuario.nombre AS Nombre,";
 //$cquery .= " productos.precio AS Precio, productos.cantidad AS Cantidad,";
 $cquery .= " rol.tipo_rol AS Rol";
 $cquery .= " FROM usuario,rol";
 $cquery .= " WHERE (usuario.id_rol=rol.id_rol)"; 
  
 //Se ejecuta la sentencia SQL
 $lresult = mysqli_query($pconexion, $cquery); 
	 
 if (!$lresult) {
   $cerror = "No fue posible recuperar la informaci�n de la base de datos.<br>";
   $cerror .= "SQL: $cquery <br>";
   $cerror .= "Descripci�n: ".mysqli_connect_error($pconexion);
   die($cerror);
 } 
 else{ 
   //Verifica que la consulta haya devuelto por lo menos un registro
   if (mysqli_num_rows($lresult) > 0){
  	 //Recorre los registros arrojados por la consulta SQL
	 while ($adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH)){

       $cid_usuario = $adatos["Id_Usuario"]; //**
	   $ccontenido .= "<tr>";
	   $ccontenido .= "<td class=\"tabla_textocontenido\">".$adatos["Id_Usuario"]."</td>";
        $ccontenido .= "<td colspan=\"2\" class=\"tabla_textocontenido\">".$adatos["Nombre"]."</td>";
        $ccontenido .= "<td class=\"tabla_textocontenido\">".$adatos["Rol"]."</td>";
        $ccontenido .= "<td class=\"tabla_textocontenido\">";
         $ccontenido .= "<ul>";
         $ccontenido .= "<li class=\"accion\"><a href=\"cuenta_usuario.php?cid_usuario=$cid_usuario\"><img src=\"imagen/fotoeditar.jpg\"></a></li>";
         $ccontenido .= "<li class=\"accion\"><a href=\"funciones/borrarUsuario.php?cid_usuario=$cid_usuario\" onClick=\"return confirmar(String.fromCharCode(191)+'Seguro que desea eliminar el registro?')\"><img src=\"imagen/fotoborrar.jpg\"></a></li>";
         $ccontenido .= "</ul>";
         $ccontenido .= "</td>";
	   $ccontenido .= "</tr>";	
	 }   
   }	 
 }	 
 
 mysqli_free_result($lresult); 
 
 if ( empty($ccontenido) ){
   $ccontenido .= "<tr>";
   $ccontenido .= "<td colspan=\"11\">No se obtuvieron resultados</td>";		
   $ccontenido .= "</tr>";
 }
 
 cerrarConexion($pconexion); 
 return $ccontenido; 
}

function recuperarInfoUsuario($cid_usuario){
 
 $adatos = array();
 
 $pconexion = abrirConexion();
 seleccionarBaseDatos($pconexion);
 
 $cquery = "SELECT id_usuario, nombre, apellido, correo, fecha_nacimiento, direccion, telefono, estado, ciudad, codigo_postal, id_rol, nick, contrasena FROM
usuario"; 
 $cquery .= " WHERE (id_usuario = $cid_usuario)";
 $adatos = extraerRegistro($pconexion, $cquery);
 cerrarConexion($pconexion);
   
 return $adatos;
} 
?>