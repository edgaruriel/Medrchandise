<?php
include_once("config.inc.php");
include_once("funciones/menu_header.php");
include_once("./funciones/mantener_sesion.php");
include_once("./funciones/acceder_base_datos.php");
include_once("./funciones/administrar_productos.php");
validarSesion();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link href="css/header.css" rel="stylesheet" type="text/css" />
	<link href="css/footer.css" rel="stylesheet" type="text/css" />
	<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
	<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/estilos_editarproducto.css">
	<script language="JavaScript" src="js/js_editarproducto.js" type="text/javascript"></script>
	<title>Agregar Producto</title>
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
				<div id="cabecera">
					<h1>Agregar Producto</h1>
		        </div>	
				
			</div>
			<div id="div_contenido">
				<form id="formulario" name="formulario" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
				<p align="center" class="estado"><?php echo agregarProducto(); ?></p>
					<table id="table_producto">
						<tr>
							<td>*Nombre:</td>
							<td><input type="text" id="nombre" name="nombre" value="<?php echo (isset($_POST["nombre"]))?$_POST["nombre"]:""; ?>"></td>
						</tr>
						<tr>
							<td> Descripci&oacute;n:</td>
							<td><TEXTAREA id="descripcion" name="descripcion" cols="50" rows="5" ><?php echo (isset($_POST["descripcion"]))?$_POST["descripcion"]:""; ?></TEXTAREA></td>
						</tr>
						<tr>
							<td>*Cantidad:</td>
							<td><input type="text" id="cantidad" name="cantidad" value="<?php echo (isset($_POST["cantidad"]))?$_POST["cantidad"]:""; ?>"></td>
						</tr>
						<tr>
							<td>*Precio:</td>
							<td><input type="text" id="precio" name="precio" value="<?php echo (isset($_POST["precio"]))?$_POST["precio"]:""; ?>"></td>
						</tr>
                        <tr>
                            <td>*Disponibilidad:</td>
                            <td>
								<select name="cmb_iddisponibilidad" id="cmb_iddisponibilidad">
									<?php echo listarDisponibilidad(); ?>
								</select>
							</td>
                        </tr>
                        <tr>
                            <td>*Subcategoria:</td>
                            <td>
                                <select name="cmb_idsubcategoria" id="cmb_idsubcategoria">
                                    <?php echo listarSubcategorias(); ?>
                                </select>
                            </td>
                        </tr>
						<tr>
							<td>Imagen:</td>
							
							<td><a id="examinar_imagen" name="examinar_imagen" class="boton" >Examinar</a></td>
						</tr>
					</table>
					<hr color="#82c396">
					<table>
                        <tr>
                        
                        <td><input type="file" id="file_img" name="file_img" ></td>                        
                            <td><input id="btn_guardar" name="btn_guardar" type="submit" class="boton" value="Guardar"></td>
                            <td><a id="btn_cancelar" class="boton" value="Cancelar" href="catalogoProductos.php">Cancelar</a></td>
                        </tr>
                    </table>
					
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
		<!--Fin del footer-->
	
</body>
</html>