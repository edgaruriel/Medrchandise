<?php
include_once("funciones/menu_header.php");
include_once("./funciones/mantener_sesion.php");
validarSesion();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link href="css/header.css" rel="stylesheet" type="text/css" />
	<link href="css/footer.css" rel="stylesheet" type="text/css" />
	<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
	<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/estilos_editarproductos.css">
	<title>Editar Productos</title>
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
			<div id="div_cuerpo_superior">
				<a href="agregarProducto.php" class="boton" id="btn_nuevoproducto">Nuevo producto</a>
			</div>
			<div id="div_contenido">
				<table id="table_producto">
					<tr id="tabla_titulo">
						<td colspan="2" class="tabla_textotitulo">Nombre</td>
						<td class="tabla_textotitulo">Precio</td>
						<td class="tabla_textotitulo">Imagen</td>
						<td class="tabla_textotitulo">Acciones</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="editarproducto.php"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="#"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="#"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="#"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="#"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="#"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="#"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tabla_textocontenido">ESTETOSCOPIO</td>
						<td class="tabla_textocontenido">$200.00</td>
						<td class="tabla_textocontenido"><img src="imagen/fotoproducto.jpg"></td>
						<td class="tabla_textocontenido">
							 <ul >			
				  				<li class="accion"><a href="#"><img src="imagen/fotoeditar.jpg"></a></li>
				                <li class="accion"><a href="#"><img src="imagen/fotoborrar.jpg"></a></li>				  				
							</ul>
						</td>
					</tr>
				</table>
				
			</div>
			<div>
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