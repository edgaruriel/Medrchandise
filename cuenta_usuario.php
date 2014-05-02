<?php
include_once("./funciones/menu_header.php");
include_once("./funciones/opciones_registro.php");
include_once("config.inc.php");
include_once("./funciones/acceder_base_datos.php");
include_once("./funciones/mantener_sesion.php");
validarSesion();
$adatos = recuperarInfoUsuario($_GET["cid_usuario"]/**$_SESSION["cidusuario"]**/); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_input_text.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_registro.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/js_editarcuenta.js"></script>
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
		<div id="cont_form">
        <div id="cabecera">
        Modificar cuenta
        </div>			
				<div id="formulario">
					<form id="registro" method="post" action="./funciones/editarUsuario.php">
                        <input type="hidden" name="hdn_idusuario" value="<?php echo $adatos["id_usuario"]; ?>">
                        <br>
                <?php list($year,$month,$day) = split("-",$adatos["fecha_nacimiento"]);
                        $st_year = 2010; //Starting Year
    $month_names = array("Enero", "Febrero", "Marzo","Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");?>
                        
                    *Nombre: <br>
                    <input type="text" id="nombre" name="nombre" class="campos" value="<?php echo $adatos["nombre"];?>">
                    <br>
                    Apellido(s): <br>
                    <input type="text" id="apellido" name="apellido" class="campos"  value="<?php echo $adatos["apellido"];?>">
                    <br>
                    *Nombre de usuario: <br>
                    <input type="text" id="nombreusuario" name="nombreusuario" class="campos"  value="<?php echo $adatos["nick"];?>">
                    <br>
                    *Fecha de nacimiento
                    <br>
                    <select id="mes" name="mes" style='width:100px;' class="campos">
                         <?php
                        for ($i=01; $i<=12; $i++) {
                            echo "<option ";
                            if ($i == $month) {
                                echo "selected=\"selected\" ";
                            }
                            echo "value=\"$i\">", $month_names[$i-1], "</option>\n";
                        }
                        ?>
                        		</select> &nbsp; 
					<select id="dia" name="dia" style='width:50px;' class="campos">
						<?php
                    for ($i=01; $i<=31; $i++) {
                        echo "<option ";
                        if ($i == $day) {
                            echo "selected=\"selected\" ";
                        }
                        echo "value=\"$i\">$i</option>\n";
                    }
                    ?>
                                </select> &nbsp; 
                   <select id="anio" name="anio" style='width:64px;' class="campos">
                    <?php
                    for ($i=1934; $i<=2010; $i++) {
                        echo "<option ";
                        if ($i == $year) {
                            echo "selected=\"selected\" ";
                        }
                        echo "value=\"$i\">$i</option>\n";
                    }
                    ?>
                                </select><br>
                    *Correo:<br>
                    <input type="text" id="correo" name="correo" class="campos"  value="<?php echo $adatos["correo"];?>">
                    <br>
                    *Contrase&ntilde;a:<br>
                    <input type="password" id="contrasena" name="contrasena" class="campos"  value="<?php echo $adatos["contrasena"];?>">
                    <br>
                    *Confirmar contrase&ntilde;a:<br>
                    <input type="password" id="confcontrasena" name="confcontrasena" class="campos"  value="<?php echo $adatos["contrasena"];?>">
                    <br>
                    Direcci&oacute;n: <br>
                    <input type="text" id="direccion" name="direccion" class="campos"  value="<?php echo $adatos["direccion"];?>">
                    <br>
                    Tel&eacute;fono:
                    <br>
                    <input type="text" id="telefono" name="telefono" class="campos"  value="<?php echo $adatos["telefono"];?>">
                    <br>
                    Estado: <br>
                    <input type="text" id="estado" name="estado" class="campos"  value="<?php echo $adatos["estado"];?>">
                    <br>
                    Ciudad/Municipio : <br>
                    <input type="text" id="ciudad" name="ciudad" class="campos"  value="<?php echo $adatos["ciudad"];?>">
                    <br>
                    C.P.: 
                    <br>
                    <input type="text" id="cp" name="cp" class="campos" value="<?php echo $adatos["codigo_postal"]?>">
                    <br>
                        <?php
                            echo opciones_usuario($adatos["id_rol"]);
                        ?>
                    <br>
                    <br>
                    <hr color="#82c396">
                    <input type="submit" value="Actualizar" class="boton" id="btn_registrarse" name="btn_registrarse">
                    <!-- <a href="" class="boton" id="btn_registrarse">Registrarse</a> -->
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