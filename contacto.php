<?php
include_once("funciones/menu_header.php");
include_once("funciones/mail.php");
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_contacto.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/js_contacto.js"></script>
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
            <div id="forma">
            <form method="post" action="correo.php">
                <table>
                    <tr>
                        <td class="celda_texto">
                            <p class="texto">Nombre:</p>
                        </td>
                        <td>
                            <input class="forma_texto" type="text" id="txt_nombre" name="txt_nombre" value="" size="25">
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="celda_texto">
                            <p class="texto">Correo:</p>
                        </td>
                        <td>
                            <input class="forma_texto" type="text" id="txt_correo" name="txt_correo" value="" size="25">
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="celda_texto">
                            <p class="texto">Comentarios:</p>
                        </td>
                        <td>
                            <textarea class="forma_areatexto" id="txt_comentarios" name="txt_comentarios" cols="40" rows="5" wrap="soft"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input class="boton" type="submit" id="btn_enviar" name="btn_enviar" value="Enviar">
                        </td>
                    </tr>
                </table>
                </form>
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