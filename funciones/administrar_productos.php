<?php
include_once("../config.inc.php"); 
include_once("acceder_base_datos.php");

function recuperarInfoProducto($cid_producto){

    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
    
    $cquery = "SELECT id_producto, nombre, descripcion, precio, cantidad_existencia FROM producto"; 
    $cquery .= " WHERE (id_producto = $cid_producto)";
    
    $adatos = extraerRegistro($pconexion, $cquery);
    cerrarConexion($pconexion);
    
    return $adatos;
}

function agregarProducto(){

    $cmensaje = "";
    if ( isset($_POST["btn_guardar"]) && $_POST["btn_guardar"] == "Guardar"){
        $cnombre = $_POST["nombre"];
        $cdescripcion = $_POST["descripcion"];
        $ccantidad = $_POST["cantidad"];
        $cprecio = $_POST["precio"];
        
        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);
        
        $cquery = "SELECT nombre FROM productos";
        $cquery .= " WHERE nombre = '$cnombre'";
        
        if ( !existeRegistro($pconexion, $cquery) ){
            $cquery = "INSERT INTO productos";
            $cquery .= " (nombre, descripcion, precio, cantidad_existencia)";
            $cquery .= " VALUES ('$cnombre', '$cdescripcion', $cprecio, $ccantidad)";
            if (insertarDatos($pconexion, $cquery) ){
                $cmensaje = "Producto registrado";
                $curl = "Location:".$GLOBALS["raiz_sitio"]."catalogoProductos.php";
            }
            else{
                $cmensaje = "No fue posible registrar el producto en el catálogo";	 
            }
        }
        else{
            $cmensaje = "Ya existe un producto con el nombre: $cnombre";
            $curl = "Location:".$GLOBALS["raiz_sitio"]."agregarProducto.php";
        }
        cerrarConexion($pconexion);
    }
    
    return $cmensaje;
}

function editarProducto(){
    if ( isset($_POST["btn_guardar"]) && $_POST["btn_guardar"] == "Guardar"){
 
        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);
   
        $cid_producto = $_POST["hdn_idproducto"];
        $cnombre = $_POST["nombre"];
        $cdescripcion = $_POST["descripcion"];
        $ccantidad = $_POST["cantidad"];
        $cprecio = $_POST["precio"];
        
        $cquery = "UPDATE productos";
        $cquery .= " SET nombre = '$cnombre',";
        $cquery .= " descripcion = $cdescripcion,";
        $cquery .= " cantidad_existencia = $ccantidad";
        $cquery .= " precio = $cprecio";
        $cquery .= " WHERE (id_producto = $cid_producto)";
        
        if ( editarDatos($pconexion, $cquery) )
            $curl = "Location:".$GLOBALS["raiz_sitio"]."catalogoProductos.php";  
        else
            $curl = "Location:".$GLOBALS["raiz_sitio"]."edicionproducto.php?cid_producto=$cid_producto";
        
        cerrarConexion($pconexion);
        header($curl);
        exit();
    }
}
?>