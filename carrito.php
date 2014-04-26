<?php
include_once("funciones/menu_header.php");
include_once("funciones/mantener_sesion.php");
include_once("config.inc.php"); 
include_once("./funciones/acceder_base_datos.php");
include_once("funciones/carritoCompras/mostrarProCarrito.php");
validarSesion();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_carrito.css" rel="stylesheet" type="text/css"/>
<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/js_carritoCompras.js"></script>
<title>Medrchandise</title>
</head>
<body>
    <div id="cintilla">
        
    </div>
	<div id=contenedor>
		<!--Inicio del header -->
        <div id="div_encabezado">
        	<div id="logotipo" ></div>
            <div  id="btns_identificarse">
           <?php 
            	 echo listarPanel();
            	?>
			</div>
		<div id="div_menu" >			
		<?php 
		echo listarMenu();
		?>			
		</div>
		</div>
		<!--Fin del header -->
		
		<!--Inicio del cuerpo-->
		<div id="cuerpo">
		
		<div id="div_cuerpo">		 
            <div id="productos">
            
            <form id="formCarrito" action="funciones/carritoCompras/agregarProdCarrito.php" method="post">
            <!--  <a id="btnComprar" class="boton" href="#" >Siguiente</a>  -->
                <table id="tabla_productos">
                    <tr id="tabla_titulo">
                        <td colspan="2" class="tabla_textotitulo">
                           Producto.
                        </td>
                        <td class="tabla_textotitulo">
                            Precio por unidad.
                        </td>
                        <td class="tabla_textotitulo">
                            Cantidad.
                        </td>
                        <td class="tabla_textotitulo">
                            Subtotal.
                        </td>
                        <td class="tabla_textotitulo">
                            Operaciones.
                        </td>
                    </tr>    
				        <?php 
				       echo listarProCarrito();
				        ?>
                </table>                
                <input type="submit" id="Btnsubmit" name="Btnsubmit"  class="Btnsubmit" value="comprar">
                </form>
            </div>
            <div id="resumen">
			         <?php 
			         echo resumenCarrito();
			         ?>
            </div>            
		</div>
		</div>
		<!--Fin del cuerpo-->
		
		<!--Inicio del footer-->
		<div id="div_footer">
			
			&copy; Todos los derechos reservados - Medrchandise
		</div>
		<div class="footer_segmento">
			<div id="div_redes_sociales_izquierda">
			<a href="https://www.facebook.com/"> <img class="link_redes_sociales" alt="" src="imagen/index_30.png"> </a>
			<a href="https://twitter.com/"> <img class="link_redes_sociales" alt="" src="imagen/index_31.gif"> </a>
			<a href="https://plus.google.com/"> <img class="link_redes_sociales" alt="" src="imagen/index_32.gif"> </a>
			</div>			
		</div>
		</div>
    <div id="div_footer">
        <div class="leyenda">
            &copy; Todos los derechos reservados - Medrchandise<br>
            Desarrollado por Aldo, Javier, Jaime, Eddie, Gabriel, Edgar.
            </div>
		</div>
		<div class="footer_segmento">
			<a href="https://www.facebook.com/"> <img class="link_redes_sociales" alt="" src="imagen/index_30.png"> </a>
			<a href="https://twitter.com/"> <img class="link_redes_sociales" alt="" src="imagen/index_31.gif"> </a>
			<a href="https://plus.google.com/"> <img class="link_redes_sociales" alt="" src="imagen/index_32.gif"> </a>
					
		</div>
		<!--Fin del footer-->
    
</body>
</html>