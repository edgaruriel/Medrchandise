<?php
function recuperarInfoProducto($cid_producto){

    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
    
    $cquery = "SELECT * FROM producto"; 
    $cquery .=" WHERE (id_producto = $cid_producto)";
    
    $adatos = extraerRegistro($pconexion, $cquery);
    cerrarConexion($pconexion);
    
    return $adatos;
}

function recuperarInfoNombre($cid,$tid,$ctabla){
    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
    
    $cquery = "SELECT * FROM $ctabla";
    $cquery .=" WHERE ($tid = $cid)";
    
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
        $cdisponibilidad = $_POST["cmb_iddisponibilidad"];
        $csubcategoria = $_POST["cmb_idsubcategoria"];
        
        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);
        
        $cquery = "SELECT nombre FROM producto";
        $cquery .= " WHERE nombre = '$cnombre'";
        
        if ( !existeRegistro($pconexion, $cquery) ){
            $cquery = "INSERT INTO producto";
            $cquery .= " (nombre, descripcion, precio, cantidad_existencia, id_estados_disponibilidad, id_subcategoria, descuento, id_ofertas)";
            $cquery .= " VALUES ('$cnombre', '$cdescripcion', $cprecio, $ccantidad, $cdisponibilidad, $csubcategoria, 0, 1)";
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

function listarCategorias(){
    $copciones = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM categorias";
    $cquery .=" ORDER BY nombre_categoria ASC";
	
	$lresult = mysqli_query($pconexion, $cquery);
	if ( $lresult ){
        
		if (mysqli_num_rows($lresult) > 0){          
			if (  !$_POST["cmb_idcategorias"] || !isset($_POST["cmb_idcategorias"]) || $_POST["cmb_idcategorias"]=="0"){	 
				while ( $adatos = mysqli_fetch_array($lresult) ){
					$copciones .= "<option value=\"".$adatos["id_categorias"]."\">";
					$copciones .= $adatos["nombre_categoria"];
					$copciones .= "</option>\n";
				} //fin while     
			} 
			else{
				while ( $adatos = mysqli_fetch_array($lresult) ){
					if ( $_POST["cmb_idcategorias"] == $adatos["id_categorias"] )
						$copciones .= "<option value=\"".$adatos["id_categorias"]."\" selected>";
					else
						$copciones .= "<option value=\"".$adatos["id_categorias"]."\">";
					$copciones .= $adatos["nombre_categoria"];
					$copciones .= "</option>\n";
				}	   
			} //fin else	 
		}
	} 
	
	mysqli_free_result($lresult);
	cerrarConexion($pconexion);
	return $copciones;
}

function listarSubcategorias(){
    $copciones = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM subcategoria";
    $cquery .=" ORDER BY nombre_subcategoria ASC";
	
	$lresult = mysqli_query($pconexion, $cquery);
	if ( $lresult ){
        
		if (mysqli_num_rows($lresult) > 0){          
			if (  !$_POST["cmb_idsubcategoria"] || !isset($_POST["cmb_idsubcategoria"]) || $_POST["cmb_idsubcategoria"]=="0"){	 
				while ( $adatos = mysqli_fetch_array($lresult) ){
					$copciones .= "<option value=\"".$adatos["id_subcategoria"]."\">";
					$copciones .= $adatos["nombre_subcategoria"];
					$copciones .= "</option>\n";
				} //fin while     
			} 
			else{
				while ( $adatos = mysqli_fetch_array($lresult) ){
					if ( $_POST["cmb_idsubcategoria"] == $adatos["id_subcategoria"] )
						$copciones .= "<option value=\"".$adatos["id_subcategoria"]."\" selected>";
					else
						$copciones .= "<option value=\"".$adatos["id_subcategoria"]."\">";
					$copciones .= $adatos["nombre_subcategoria"];
					$copciones .= "</option>\n";
				}	   
			} //fin else	 
		}
	} 
	
	mysqli_free_result($lresult);
	cerrarConexion($pconexion);
	return $copciones;
}

function listarDisponibilidad(){
	$copciones = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM estados_disponibilidad";
	$cquery .= " ORDER BY estados_disponibilidad ASC";
	
	$lresult = mysqli_query($pconexion, $cquery);
	if ( $lresult ){
        
		if (mysqli_num_rows($lresult) > 0){          
			if (  !$_POST["cmb_iddisponibilidad"] || !isset($_POST["cmb_iddisponibilidad"]) || $_POST["cmb_iddisponibilidad"]=="0"){	 
				while ( $adatos = mysqli_fetch_array($lresult) ){
					$copciones .= "<option value=\"".$adatos["id_estados_disponibilidad"]."\">";
					$copciones .= $adatos["estados_disponibilidad"];
					$copciones .= "</option>\n";
				} //fin while
			} 
			else{	   
				while ( $adatos = mysqli_fetch_array($lresult) ){
					if ( $_POST["cmb_iddisponibilidad"] == $adatos["id_estados_disponibilidad"] )
						$copciones .= "<option value=\"".$adatos["id_estados_disponibilidad"]."\" selected>";
					else
						$copciones .= "<option value=\"".$adatos["id_estados_disponibilidad"]."\">";
					$copciones .= $adatos["estados_disponibilidad"];
					$copciones .= "</option>\n";
				}	   
			} //fin else	 
		}
	} 
	
	mysqli_free_result($lresult);
	cerrarConexion($pconexion);
	return $copciones;
}

function obtenerSubcategorias(){
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM estados_disponibilidad";
	$cquery .=" ORDER BY estados_disponibilidad ASC";
    
    $lresult = mysqli_query($pconexion, $cquery);
    $nSubcat = mysqli_num_rows($lresult);
	if ( $lresult ){
        if ($nSubcat > 0){
            for($i=0;$i<$nSubcat;$i++){
                $varSubcat = mysqli_fetch_array($lresult);
                $CargaIdSub[$i] = $varSubcat["id_subcategoria"];
                $CargaNomSub[$CargaIdSub[$i]] = $varSubcat["nombre_subcategoria"];
                $CargaIdCat[$CargaNomSub[$CargaIdSub[$i]]] = $varSubcat["id_categorias"];
            }
        }
    }
    mysqli_free_result($lresult);
	cerrarConexion($pconexion);
	return $CargaIdCat;
}
?>

