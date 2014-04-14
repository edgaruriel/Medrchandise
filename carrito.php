<?php
include_once("funciones/menu_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_carrito.css" rel="stylesheet" type="text/css"/>
<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
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
		<div id="div_cuerpo">
            <div id="productos">
                <table id="tabla_productos">
                    <tr id="header_tabla">
                        <td class="celda_producto">
                            Tienes <b>1</b> producto en el carrito
                        </td>
                        <td class="celda_precio">
                            C.U.
                        </td>
                        <td class="celda_cantidad">
                            Cantidad
                        </td>
                        <td class="celda_subtotal">
                            &nbsp;
                        </td>
                        <td class="celda_eliminar">
                            &nbsp;
                        </td>
                    </tr>
                    <tr class="fila_producto">
                        <td class="celda_producto" >
                            <table>
                                <tr>
                                    <td class="celda_imagen">
                                         <img id="img_producto" alt="" src="imagen/prod.jpg">
                                    </td>
                                    <td id="nombre_producto">
                                        Estetoscopio
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="celda_precio">
                            $600.00
                        </td>
                        <td class="celda_cantidad">
                            <input type="number" id="cantidad" value="1">
                        </td>
                        <td class="celda_subtotal">
                            $600.00 MXN
                        </td>
                        <td class="celda_eliminar">
                            <a class="eliminar_prod"href="#">x</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="resumen">
                <div>
                    &nbsp;
                </div>
                <div>
                    Total
                </div>
                <div>
                    <b>$600.00 MXN</b>
                </div>
                <div>
                    Incl. IVA
                </div>
                <div>
                    <a id="btn_comprar" class="boton" href="pago.php">Siguiente</a>
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