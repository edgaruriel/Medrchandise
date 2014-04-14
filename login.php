<?php
include_once("funciones/menu_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_login.css" rel="stylesheet" type="text/css"/>
<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
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
        <div id="cuerpo">
            <div id="cuenta">
					 <form id="frm_autenticar" name="frm_autenticar" method="post" action="funciones/autenticar.php">
					<table>
                    	<tr>
                        	<td class="td_titulo">
                        	<p class="titulo_login">&iquest;Ya tienes una cuenta&#63;</p>
                        	</td>
                    	</tr>
                        <tr>
                       	 <td>
                        	<p class="texto_cuenta">Usuario:</p>
                       	 </td>
                    	</tr>
                        <tr>
                        	<td>
                        	<input class="" type="text" id="txt_usuario" name="txt_usuario" value="" size="25">
                       	 </td>
                    	</tr>
                        <tr>
                       	 <td>
                        	<p class="texto_cuenta">Contrase&ntilde;a:</p>
                       	 </td>
                    	</tr>
                        <tr>
                        	<td>
                        	<input class="" type="password" id="pass_usuario" name="pass_usuario" value="" size="25">
                       	 </td>
                    	</tr>
                        <tr>
                        	<td>
                        	<a id="contrasena_login" href="">&iquest;Olvid&oacute; su contrase&ntilde;a&#63;</a>
                       	 </td>
                    	</tr>
                        <tr>
              				  <td><hr></td>
              			</tr>
                        <tr>
                        	<td>
                        	<input class="boton" type="submit" id="btn_ingresar" name="btn_ingresar" value="Aceptar">
                       	 </td>
                    	</tr>
                    </table>
                    </form>                      
            </div>
          <div id="crear_cuenta">
            <table>
              <tr>
                <td class="td_titulo">
                <p class="titulo_login">Crear una cuenta</p>
                </td>
              </tr>
              <tr>
                <td><p class="texto_cuenta">Al crear una cuenta en Merchandise usted podr&aacute; comprar de manera m&aacute;s r&aacute;pida, almacenar direcciones de env&iacute;o, ver y hacer un seguimiento de sus pedidos y participar en grandes promociones y descuentos. 
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><hr></td>
              </tr>
              <tr>
                <td><a href="registro.php" class="boton" id="btn_registrarse" >Registrarse</a></td>
              </tr>
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