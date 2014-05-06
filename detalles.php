<?php
include_once("funciones/menu_header.php");
include_once("funciones/menu_categorias.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_menu_categorias.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_detalles.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/js_detalles.js"></script>
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
            <div>
                <input type="text"  id="txt_buscar">
                <a id="btn_buscar" class="boton" value="Buscar" href="">Buscar</a>
            </div>
            
            <div id="categorias">
            <h1>Categor&iacute;as</h1>
                <div>
                    <!--
                    <ul id="menu_cat">
                        <li class="elem_categ"> <a href="#" class="link_catego">Categoria 1</a>
                            <ul>
                                <li><a href="">Subcategoria 1</a></li>
                                <li><a href="">Subcategoria 2</a></li>
                            </ul>
                        </li>
                        <li class="elem_categ"> <a href="#" class="link_catego">Categoria 1</a>
                            <ul>
                                <li><a href="">Subcategoria 1</a></li>
                                <li><a href="">Subcategoria 2</a></li>
                                <li><a href="">Subcategoria 3</a></li>
                            </ul>
                        </li>
                        <li class="elem_categ"> <a href="#" class="link_catego">Categoria 1</a>
                            <ul>
                                <li><a href="">Subcategoria 1</a></li>
                                <li><a href="">Subcategoria 2</a></li>
                                <li><a href="">Subcategoria 3</a></li>
                                <li><a href="">Subcategoria 4</a></li>
                            </ul>
                        </li>
                        <li class="elem_categ"> <a href="#" class="link_catego">Categoria 1</a>
                            <ul>
                                <li><a href="">Subcategoria 1</a></li>
                                <li><a href="">Subcategoria 2</a></li>
                            </ul>
                        </li>
                        <li class="elem_categ"> <a href="#" class="link_catego">Categoria 1</a></li>
                        <li class="elem_categ"> <a href="#" class="link_catego">Categoria 1</a></li>
                        <li class="elem_categ"> <a href="#" class="link_catego">Categoria 1</a></li>
                    </ul>
                -->
                <?php echo escribirMenuCat(); ?>
                </div>
            </div>
            
                <div id="imagen">
                <h1>Nombre del Art&iacute;culo</h1>
                <div id="img_principal">
                    <img src="imagen/foto1.jpg" name="visorImagen" id="visorImagen">
                </div>
                <div id="img_secundarias">
                    <img class="linea_img" src="imagen/foto1.jpg" name="foto1" id="foto1">
                    <img class="linea_img" src="imagen/foto2.jpg" name="foto2" id="foto2">
                    <img class="linea_img" src="imagen/foto3.jpg" name="foto3" id="foto3">
                    <img class="linea_img" src="imagen/foto4.jpg" name="foto4" id="foto4">
                    <img class="linea_img" src="imagen/foto5.jpg" name="foto5" id="foto5">
                </div>
            </div>
            
            <div id="info">
                <div id="descripcion">
                    <h3>Ficha T&eacute;cnica</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu vehicula mi. In ullamcorper, nibh ut lobortis laoreet, enim arcu pellentesque felis, eu venenatis odio nisi in arcu. Fusce tincidunt ultrices semper. Nunc gravida eleifend ante, vitae condimentum sapien accumsan ac. Vestibulum eget lorem ligula. Etiam ante sapien, sagittis quis lorem eu, sagittis luctus augue. Etiam et dignissim leo. Vivamus imperdiet aliquet leo, et euismod orci. Praesent pretium diam nec fringilla aliquam. Vestibulum porttitor felis sed lectus bibendum, at dapibus dui imperdiet. Cras quis blandit turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    <br>Quisque consequat tristique tortor non lacinia. Sed eu hendrerit felis. Quisque malesuada nisi vel dui facilisis pulvinar. Pellentesque placerat vehicula felis ac aliquam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ut magna molestie ligula commodo varius. Nullam vehicula tortor a arcu mattis dapibus. Vivamus dolor ligula, imperdiet in velit id, feugiat eleifend erat. Nullam dictum mauris non sem rhoncus, nec cursus odio varius. Duis et ipsum et quam elementum fermentum.</p>
                </div>
                <div id="info_gral">
                    <form>Disponibilidad: <input type="text" disabled="disabled" value="En existencia" id="txt_dispo"><br>
                        Cantidad: <input type="number" id="txt_cantidad"><br>
                        Precio Unitario:<input type="text" disabled="disabled" value="200" id="txt_precio">MXN<br>
                        Total: <input type="text" disabled="disabled" id="txt_total">MXN<br>
                        <a id="btn_agregar" class="boton" value="A&ntilde;adir al carrito" href="#">A&ntilde;adir al carrito</a>
                    </form>
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
                
                
            </div>
		<!--Fin del footer-->
    </div>
</body>
</html>