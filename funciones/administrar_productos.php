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

function recuperarNombreSubcategorias($cid_producto){
    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
    
    $cquery = "SELECT * FROM subcategoria";
    $cquery .=" WHERE (id_subcategoria = $cid_producto)";
    
    $adatos = extraerRegistro($pconexion, $cquery);
    cerrarConexion($pconexion);
    
    return $adatos;
}

function recuperarNombreDisponibilidades($cid_producto){
    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
    
    $cquery = "SELECT * FROM estados_disponibilidad";
    $cquery .=" WHERE (id_estados_disponibilidad = $cid_producto)";
    
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
        
        if( strcasecmp($cnombre,'')==0 && empty($ccantidad) && empty($cprecio)){
            $cmensaje = "Faltan campos por llenar";
        }
        else{
            $pconexion = abrirConexion();
            seleccionarBaseDatos($pconexion);
            if(ctype_digit($cprecio) && ctype_digit($ccantidad)){
                $cquery = "SELECT nombre FROM producto";
                $cquery .= " WHERE nombre = '$cnombre'";

                if ( !existeRegistro($pconexion, $cquery) ){
                    $cquery = "INSERT INTO producto";
                    $cquery .= " (nombre, descripcion, precio, cantidad_existencia, id_estados_disponibilidad, id_subcategoria, descuento, id_ofertas)";
                    $cquery .= " VALUES ('$cnombre', '$cdescripcion', $cprecio, $ccantidad, $cdisponibilidad, $csubcategoria, 0, 1)";
                    if (insertarDatos($pconexion, $cquery) ){
                    	$filesize = $_FILES['file_img']['size'];
                        if($filesize > 0){
                        	
                            $adatos = array();
                            $cquery = "SELECT * FROM producto WHERE (nombre = '$cnombre')";
                            $adatos = extraerRegistro($pconexion, $cquery);
                            $idproducto = $adatos["id_producto"];
                            if($_FILES["file_img"]["error"]>0){
                            	
                                $cquery = "DELETE FROM producto"; 
                                $cquery .=" WHERE (id_producto = $idproducto)";
                                if ( editarDatos($pconexion, $cquery) )
                                    $cmensaje = "Ha ocurrido un error al cargar el archivo";
                                else
                                    $cmensaje = "El producto no se registro correctamente";
                            }
                            else{
                            	
                                $apermitidos = array("image/jpg","image/jpeg","image/gif","image/png");
                                if(in_array($_FILES['file_img']['type'],$apermitidos)){
                                	
                                    $sdirectorio = 'imagen/';
                                    $sarchivo = 'imagen/' . $_FILES['file_img']['name'];
                                    $nombrearchivo = $_FILES['file_img']['name'];
                                    if(!file_exists($sarchivo)){
                                    	$temp = $_FILES['file_img']['tmp_name'];
                                    	//echo "4 ruta: ".$sarchivo." Temp: ".$temp;
                                    	
                                        $resultado = move_uploaded_file($temp, $sarchivo);
                                        if($resultado){
                                        	//echo "5";
                                            $inombre = $_FILES['file_img']['name'];
                                            $cquery = "INSERT INTO fotos";
                                            $cquery.= " (ruta, id_producto) VALUES ('$sarchivo', $idproducto)";
                                            if(insertarDatos($pconexion,$cquery)){
                                                $cmensaje = "Producto registrado";
                                            }
                                            else{
                                                $cquery = "DELETE FROM producto"; 
                                                $cquery .=" WHERE (id_producto = $idproducto)";
                                                if ( editarDatos($pconexion, $cquery) ){
                                                    $cmensaje = "El producto no se pudo registrar correctamente debido a la imagen";
                                                }
                                                else{
                                                    $cmensaje = "El producto no se registro correctamente";
                                                }
                                            }
                                        }
                                        else{
                                        	echo "4.1";
                                            $cquery = "DELETE FROM producto"; 
                                            $cquery .=" WHERE (id_producto = $idproducto)";
                                            if ( editarDatos($pconexion, $cquery) )
                                                $cmensaje = "Error al mover imagen";
                                            else
                                                $cmensaje = "El producto no se registro correctamente";
                                        }
                                    }
                                    else{
                                        $cquery = "DELETE FROM producto"; 
                                        $cquery .=" WHERE (id_producto = $idproducto)";
                                        if ( editarDatos($pconexion, $cquery) )
                                            $cmensaje = "El archivo ya existe";
                                        else
                                            $cmensaje = "El producto no se registro correctamente";
                                    }
                                }
                                else{
                                    $cquery = "DELETE FROM producto"; 
                                    $cquery .=" WHERE (id_producto = $idproducto)";
                                    if ( editarDatos($pconexion, $cquery) )
                                        $cmensaje = "El archivo seleccionado no es una imagen valida";
                                    else
                                        $cmensaje = "El producto no se registro correctamente";
                                }
                            }
                        }
                        //echo "Tiene que seleccionar un archivo";
                    }
                    else{
                        $cmensaje = "No fue posible registrar el producto en el catálogo";	 
                    }
                }
                else{
                    $cmensaje = "Ya existe un producto con el nombre: $cnombre";
                }
            }
            else{
                $cmensaje = "Los campos CANTIDAD y PRECIO deben ser numeros";
            }
            cerrarConexion($pconexion);
        }
    }
    return $cmensaje;
}

/*function listarCategorias(){
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
}*/

function listarSubcategorias(){
    $copciones = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM subcategoria";
    $cquery .=" ORDER BY nombre_subcategoria ASC";
	
	$lresult = mysqli_query($pconexion, $cquery);
	if ( $lresult ){
        
		if (mysqli_num_rows($lresult) > 0){
            while ( $adatos = mysqli_fetch_array($lresult) ){
                if ( $_POST["cmb_idsubcategoria"] == $adatos["id_subcategoria"] )
                    $copciones .= "<option value=\"".$adatos["id_subcategoria"]."\" selected>";
                else
                    $copciones .= "<option value=\"".$adatos["id_subcategoria"]."\">";
                $copciones .= $adatos["nombre_subcategoria"];
                $copciones .= "</option>\n";
            }	   	 
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
            while ( $adatos = mysqli_fetch_array($lresult) ){
                if ( $_POST["cmb_iddisponibilidad"] == $adatos["id_estados_disponibilidad"] )
                    $copciones .= "<option value=\"".$adatos["id_estados_disponibilidad"]."\" selected>";
                else
                    $copciones .= "<option value=\"".$adatos["id_estados_disponibilidad"]."\">";
                $copciones .= $adatos["estados_disponibilidad"];
                $copciones .= "</option>\n";
            }
		}
	} 
	
	mysqli_free_result($lresult);
	cerrarConexion($pconexion);
	return $copciones;
}

function obtenerSubcategorias(){
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM subcategoria";
	$cquery .=" ORDER BY nombre_subcategoria ASC";
    
    $lresult = mysqli_query($pconexion, $cquery);
	if ( $lresult ){
		if (mysqli_num_rows($lresult) > 0){
            $i = 0; $listaSubcategorias = array();
            while ( $adatos = mysqli_fetch_array($lresult) ){
                $listaSubcategorias[$i] = $adatos["nombre_subcategoria"];
                $i++;
            }
		}
	}
    mysqli_free_result($lresult);
	cerrarConexion($pconexion);
    return $listaSubcategorias;
}

function obtenerDisponibilidades(){
    $pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM estados_disponibilidad";
	$cquery .= " ORDER BY estados_disponibilidad ASC";
    
    $lresult = mysqli_query($pconexion, $cquery);
	if ( $lresult ){
		if (mysqli_num_rows($lresult) > 0){
            $i = 0; $listaDisponibilidades = array();
            while ( $adatos = mysqli_fetch_array($lresult) ){
                $listaDisponibilidades[$i] = $adatos["estados_disponibilidad"];
                $i++;
            }
		}
	}
    mysqli_free_result($lresult);
	cerrarConexion($pconexion);
    return $listaDisponibilidades;
}
?>
