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
                $ccategorias .= "<li class=\"elem_categ\"><a href=\"#\" class=\"link_catego\">".$adatos["categoria"]."</a>";
                $cquery2 = "SELECT * FROM subcategorias WHERE id_categoria = ".$adatos["id"];
				$lresult2 = mysqli_query($pconexion, $cquery2);
				if($lresult2){
					if (mysqli_num_rows($lresult2) > 0){
						$ccategorias .= "<ul>";          	 
		   				while ( $adatos2 = mysqli_fetch_array($lresult2) ){
		   					$ccategorias .= "<li><a href=\"\">".$adatos2["subcategoria"]."</a></li>";
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