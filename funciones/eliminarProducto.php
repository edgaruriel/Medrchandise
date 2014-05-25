<?php 
include_once("../config.inc.php"); 
include_once("acceder_base_datos.php"); 

    if ( isset($_POST["btn_eliminar"]) && $_POST["btn_eliminar"] == "Eliminar"){ 
        
        $pconexion = abrirConexion(); 
        seleccionarBaseDatos($pconexion); 
        
        $cid_producto = $_POST["hdn_idproducto"];
        
        $cquery = "DELETE FROM producto"; 
        $cquery .=" WHERE (id_producto = $cid_producto)";
        
        if ( editarDatos($pconexion, $cquery) )
            $curl="Location:".$GLOBALS["raiz_sitio"]."catalogoProductos.php"; 
        else 
            $curl="Location:".$GLOBALS["raiz_sitio"]."eliminarproducto.php?cid_producto=$cid_producto";
        //"editarproducto.php?cid_producto=$cid_producto"
        cerrarConexion($pconexion); 
        header($curl);
        exit(); 
    } 
?>