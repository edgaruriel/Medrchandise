<?php
include_once("./config.inc.php"); 
include_once("acceder_base_datos.php");
function escribirMenuCat(){

	$ccategorias = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
	 
	$cquery = "SELECT * FROM categorias";

	$lresult = mysqli_query($pconexion, $cquery);

	if ( $lresult ){
   		if (mysqli_num_rows($lresult) > 0){          	 
		   	while ( $adatos = mysqli_fetch_array($lresult) ){
			   	$ccategorias .= "<ul id=\"menu_cat\">";
                $ccategorias .= "<li class=\"elem_categ\"><a href=\"productos.php?categoria=".$adatos["nombre_categoria"]."\" class=\"link_catego\">".$adatos["nombre_categoria"]."</a>";
                $cquery2 = "SELECT * FROM subcategoria WHERE id_categorias = ".$adatos["id_categorias"];
				$lresult2 = mysqli_query($pconexion, $cquery2);
				if($lresult2){
					if (mysqli_num_rows($lresult2) > 0){
						$ccategorias .= "<ul>";          	 
		   				while ( $adatos2 = mysqli_fetch_array($lresult2) ){
		   					$ccategorias .= "<li><a href=\"productos.php?subcategoria=".$adatos2["nombre_subcategoria"]."\">".$adatos2["nombre_subcategoria"]."</a></li>";
		   				}
		   				$ccategorias .= "</ul>";
		   			}
				}                
                $ccategorias .= "</li>";
                $ccategorias .= "</ul>";
    		}
		}
	}
	mysqli_free_result($lresult);
 	cerrarConexion($pconexion);
 	return $ccategorias;
}
?>