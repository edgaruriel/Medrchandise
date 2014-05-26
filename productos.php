<?php
include_once("funciones/menu_header.php");
include_once("funciones/menu_categorias.php");
include_once("funciones/listar_productos.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_menu_categorias.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_productos.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="funciones/detalles_ventana_emergente.js"></script>
<title>Medrchandise</title>
</head>
<body>
    <div id="cintilla">
        
    </div>
	<div id="contenedor">
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
            <div>
                <!--
                <input type="text"  id="txt_buscar">
                <a id="btn_buscar" class="boton" href="">Buscar</a>
                -->
                <form  method="post" action="productos.php?buscar"  id="searchform"> 
                    <input  type="text" name="txt_buscar" id="txt_buscar"> 
                    <input  type="submit" name="submit" id="btn_buscar" class="boton" value="Buscar"> 
                </form>
            </div>
            <div id="categorias">
            <h1>Categor&iacute;as</h1>
                <div>
                    <?php echo escribirMenuCat(); ?>
                </div>
            </div>
				
            <div id="productos">
                <h1>Lista de Art&iacute;culos</h1>
                <table>
                    <?php echo listarProductos(); ?>
                </table>
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