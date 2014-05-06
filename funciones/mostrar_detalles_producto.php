<?php
include_once("./config.inc.php"); 
include_once("acceder_base_datos.php");
function listarProductos(){
	$cprodutos = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
	 
	$cquery = "SELECT * FROM producto AS p JOIN fotos AS f ON f.id_producto = p.id_producto";

	$lresult = mysqli_query($pconexion, $cquery);
	$i = 0;
	if ( $lresult ){
   		if (mysqli_num_rows($lresult) > 0){          	 
		   	while ( $adatos = mysqli_fetch_array($lresult) ){
		   		
		   		if($i == 0){
		   			$cprodutos .= 	"<tr>";
		   		}

            	$cprodutos .= 	"<td>";
                $cprodutos .=        "<div id=\"producto\">";
                $cprodutos .=            "<div id=\"img_principal\">";
                $cprodutos .=                "<img src=\"".$adatos["ruta"]."\">";
                $cprodutos .=            "</div>";
                $cprodutos .=            "<div id=\"nombreProducto\">";
                $cprodutos .=                $adatos["nombre"];
                $cprodutos .=            "</div>";
                $cprodutos .=            "<div id=\"precioDetalles\">";
                $cprodutos .=                "<div id=\"precio\">".$adatos["precio"].".00 MXN</div>";
                $cprodutos .=                "<div id=\"detalles\">";
                $cprodutos .=                "<a href=\"javascript:mostrar_ventana('".$adatos["ruta"]."','".$adatos["descripcion"]."')\" title=\"AmpliarImagen\">Ver M&aacute;s [+]</a>";
                $cprodutos .=                "</div>";
                $cprodutos .=            "</div>";
                $cprodutos .=        "</div>";
                $cprodutos .=   "</td>";
                
                if($i == 2){
                	$cprodutos .= 	"</tr>";
                	$i = 0;
                }
                $i++;
    		}
		}
	}
	mysqli_free_result($lresult);
 	cerrarConexion($pconexion);
 	return $cprodutos;

}

?>