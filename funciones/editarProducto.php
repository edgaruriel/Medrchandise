<?php 
include_once("../config.inc.php"); 
include_once("acceder_base_datos.php"); 

    if ( isset($_POST["btn_guardar"]) && $_POST["btn_guardar"] == "Guardar"){ 
        
        $pconexion = abrirConexion(); 
        seleccionarBaseDatos($pconexion); 
        
        $cid_producto = $_POST["hdn_idproducto"]; 
        $cnombre = $_POST["nombre"]; 
        $cdescripcion = $_POST["descripcion"]; 
        $ccantidad = $_POST["cantidad"];
        $cprecio = $_POST["precio"];
        $cdisponibilidad = $_POST["cmb_iddisponibilidad"];
        $csubcategoria = $_POST["cmb_idsubcategoria"];
        if(strcasecmp($cnombre,'')==0 && empty($ccantidad) && empty($cprecio) && ctype_digit($cprecio) && ctype_digit($ccantidad)){
            $cquery = "UPDATE producto"; 
            $cquery .=" SET nombre = '$cnombre',"; 
            $cquery .=" descripcion = '$cdescripcion',"; 
            $cquery .=" precio = $cprecio,";
            $cquery .=" cantidad_existencia = $ccantidad,";
            $cquery .=" id_estados_disponibilidad = $cdisponibilidad,";
            $cquery .=" id_subcategoria = $csubcategoria,";
            $cquery .=" descuento = 0,";
            $cquery .=" id_ofertas = 1";
            $cquery .=" WHERE (id_producto = $cid_producto)";

            if ( editarDatos($pconexion, $cquery) )
                $curl="Location:".$GLOBALS["raiz_sitio"]."catalogoProductos.php"; 
            else 
                $curl="Location:".$GLOBALS["raiz_sitio"]."editarproducto.php?cid_producto=$cid_producto";
        }
        else{
            $curl="Location:".$GLOBALS["raiz_sitio"]."editarproducto.php?cid_producto=$cid_producto";
        }
        cerrarConexion($pconexion); 
        header($curl);
        exit(); 
    } 
?>