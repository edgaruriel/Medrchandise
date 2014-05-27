<?php
include_once("./config.inc.php"); 
include_once("acceder_base_datos.php");
function listarProductos(){
	$cprodutos = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
	$cquery = "";

    if(isset($_POST['submit'])){ 
        if(isset($_GET['buscar'])){ 
            if(preg_match("/[A-Z  | a-z]+/", $_POST['txt_buscar'])){
                $filtro=$_POST['txt_buscar']; 
                $cquery = "SELECT * FROM producto AS p WHERE  p.nombre LIKE '%" . $filtro . "%' OR p.descripcion LIKE '%" . $filtro . "%'";
            }else{
                $cquery = "SELECT * FROM producto AS p ";
            }
        }else{
           $cquery = "SELECT * FROM producto AS p"; 
        }
    }else{
        if(isset($_GET['subcategoria'])){
            $subcategoria = $_GET['subcategoria'];
            $cquery = "SELECT * FROM producto AS p JOIN subcategoria AS s ON p.id_subcategoria = s.id_subcategoria WHERE s.nombre_subcategoria = '".$subcategoria."'";
        }else{
            if(isset($_GET['categoria'])){
                $categoria = $_GET['categoria'];
                $cquery = "SELECT * FROM producto AS p JOIN subcategoria AS s ON p.id_subcategoria = s.id_subcategoria JOIN categorias AS c ON s.id_categorias = c.id_categorias WHERE c.nombre_categoria = '".$categoria."'";
            }else{
                $cquery = "SELECT * FROM producto AS p";
            }
        }
    }

	

	$lresult = mysqli_query($pconexion, $cquery);
	$i = 0;
    $tieneFoto = false;
    $foto = "";
	if ( $lresult ){
   		if (mysqli_num_rows($lresult) > 0){          	 
		   	while ( $adatos = mysqli_fetch_array($lresult) ){
		   		
		   		if($i == 0){
		   			$cprodutos .= 	"<tr>";
		   		}
                $nombre = $adatos["nombre"];
                $cid_producto = $adatos["id_producto"];
            	$cprodutos .= 	"<td>";
                $cprodutos .=        "<div id=\"producto\">";
                $cprodutos .=            "<div id=\"img_principal\">";


                $cquery = "SELECT * FROM fotos AS f WHERE f.id_producto = $cid_producto";
                $lresult2 = mysqli_query($pconexion, $cquery);
                if($lresult2){
                    if (mysqli_num_rows($lresult2) > 0) {
                        while ($fotos = mysqli_fetch_array($lresult2)) {
                            $foto = $fotos["ruta"];
                            $cprodutos .=                "<img id=\"img_producto\" src=\"".$foto."\">";
                            $tieneFoto = true;
                        }
                    }else{
                        $cprodutos .= "<img id=\"img_producto\" src=\"imagen/default.jpg\" >";
                        $foto = "imagen/default.jpg";
                    }
                }else{
                    $cprodutos .= "<img id=\"img_producto\" src=\"imagen/default.jpg\" >";
                    $foto = "imagen/default.jpg";
                }

                
                $cprodutos .=            "</div>";
                $cprodutos .=            "<div id=\"nombreProducto\">";
                $cprodutos .=                $adatos["nombre"];
                $cprodutos .=            "</div>";
                $cprodutos .=            "<div id=\"precioDetalles\">";
                $cprodutos .=                "<div id=\"precio\">".$adatos["precio"].".00 MXN</div>";
                $cprodutos .=                "<div id=\"detalles\">";
                if ($tieneFoto) {
                     $cprodutos .=                "<a href=\"javascript:mostrar_ventana('".$adatos["id_producto"]."','".$adatos["nombre"]."','".$foto."','".$adatos["descripcion"]."','".$adatos["precio"]."')\" title=\"Detalles\">Ver M&aacute;s [+]</a>";
                }else{
                     $cprodutos .=                "<a href=\"javascript:mostrar_ventana('".$adatos["id_producto"]."','".$adatos["nombre"]."','".$foto."','".$adatos["descripcion"]."','".$adatos["precio"]."')\" title=\"Detalles\">Ver M&aacute;s [+]</a>";
                }
               
                $cprodutos .=                "</div>";
                $cprodutos .=            "</div>";
                $cprodutos .=        "</div>";
                $cprodutos .=   "</td>";
                

                if($i == 3){
                	$cprodutos .= 	"</tr>";
                	$i = 0;
                }else{
                    $i++;
                }
                
    		}
            $cprodutos .= "<tr height=\"70px\"><td>&nbsp;</td></tr>";
		}else{

        }
	}

	mysqli_free_result($lresult);
 	cerrarConexion($pconexion);
 	return $cprodutos;

}

?>