<?php
include_once("./config.inc.php");
include_once("acceder_base_datos.php");
function listarProductosEditar(){
    $ccontenido = "";
    //Conexion con el servidor de base de datos
    $pconexion = abrirConexion();
    //Seleccion de la base de datos
    seleccionarBaseDatos($pconexion);
    //Construccion de la sentencia SQL
    $cquery = "SELECT producto.id_producto AS Id_Producto, producto.nombre AS Nombre, ";
    $cquery .= "producto.precio AS Precio ";
    $cquery .= "FROM producto";
    //Se ejecuta la sentencia SQL
    $lresult = mysqli_query($pconexion, $cquery);
    
    if (!$lresult) {
        $cerror = "No fue posible recuperar la informacion de la base de datos.<br>";
        $cerror .= "SQL: $cquery <br>";
        $cerror .= "Descripcion: ".mysqli_connect_error($pconexion);
        die($cerror);
    } 
    else{ 
        //Verifica que la consulta haya devuelto por lo menos un registro
        if (mysqli_num_rows($lresult) > 0){
            //Recorre los registros arrojados por la consulta SQL
            while ($adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH)){
                $cid_producto = $adatos["Id_Producto"]; //**
                $ccontenido .= "<tr>";
            	$ccontenido .= "<td colspan=\"2\" class=\"tabla_textocontenido\">".$adatos["Nombre"]."</td>";
                $ccontenido .= "<td class=\"tabla_textocontenido\">".$adatos["Precio"]."</td>";
                $ccontenido .= "<td class=\"tabla_textocontenido\"><img src=\"imagen/fotoproducto.jpg\"></td>";
                $ccontenido .= "<td class=\"tabla_textocontenido\">";
                $ccontenido .= "<ul >";
                $ccontenido .= "<li class=\"accion\"><a href=\"editarproducto.php?cid_producto=$cid_producto\"><img src=\"imagen/fotoeditar.jpg\"></a></li>";
                $ccontenido .= "<li class=\"accion\"><a href=\"eliminarproducto.php?cid_producto=$cid_producto\"><img src=\"imagen/fotoborrar.jpg\"></a></li>";
                $ccontenido .= "</ul>";
                $ccontenido .= "</td>";
                $ccontenido .= "</tr>";
    		}
		}
	}
	mysqli_free_result($lresult); 
 
    if ( empty($ccontenido) ){
        $ccontenido .= "<tr>";
        $ccontenido .= "<td colspan=\"11\">No se obtuvieron resultados</td>";
        $ccontenido .= "</tr>";
    }
    
    cerrarConexion($pconexion); 
    return $ccontenido; 
}
?>