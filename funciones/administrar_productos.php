<?php
function recuperarInfoProducto($cid_producto){

    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
    
    $cquery = "SELECT id_producto, nombre, descripcion, precio, cantidad_existencia, id_estados_disponibilidad, id_subcategoria, descuento, id_ofertas FROM producto"; 
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
        
        $cquery = "SELECT nombre FROM producto";
        $cquery .= " WHERE nombre = '$cnombre'";
        
        if ( !existeRegistro($pconexion, $cquery) ){
            $cquery = "INSERT INTO producto";
            $cquery .= " (nombre, descripcion, precio, cantidad_existencia, id_estados_disponibilidad, id_subcategoria, descuento, id_ofertas)";
            $cquery .= " VALUES ('$cnombre', '$cdescripcion', $cprecio, $ccantidad, 1, 1, 0, 1)";
            if (insertarDatos($pconexion, $cquery) ){
                //$cquery = "INSERT INTO fotos";
                
                $cmensaje = "Producto registrado";
            }
            else{
                $cmensaje = "No fue posible registrar el producto en el catálogo";	 
            }
        }
        else{
            $cmensaje = "Ya existe un producto con el nombre: $cnombre";
        }
        cerrarConexion($pconexion);
    }
    
    return $cmensaje;
}
?>