<?php
include_once("funciones/menu_header.php");
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
<script type="text/javascript" src="js/js_registro.js"></script>
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
        Crear una cuenta
        </div>			
				<div id="formulario">
					<form id="registro">
                    *Nombre: <br>
                    <input type="text" id="nombre" class="campos">
                    <br>
                    Apellido: <br>
                    <input type="text" id="apellido" class="campos">
                    <br>
                    *Fecha de nacimiento
                    <br>
                    <select id="mes" style='width:100px;' class="campos">
						<option value='0' />
						<option value='1' selected>Enero</option>
                        <option value='2'>Febrero</option>
                        <option value='3'>Marzo</option>
                        <option value='4'>Abril</option>
                        <option value='5'>Mayo</option>
                        <option value='6'>Junio</option>
                        <option value='7'>Julio</option>
                        <option value='8'>Agosto</option>
                        <option value='9'>Septiembre</option>
                        <option value='10'>Octubre</option>
                        <option value='11'>Noviembre</option>
                        <option value='12'>Diciembre</option>
                        		</select> &nbsp; 
					<select id="dia" style='width:50px;' class="campos">
						<option value='0' />
						<option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                        <option value='25'>25</option>
                        <option value='26'>26</option>
                        <option value='27'>27</option>
                        <option value='28'>28</option>
                        <option value='29'>29</option>
                        <option value='30'>30</option>
                        <option value='31'>31</option>
                                </select> &nbsp; 
                   <select id="anio" style='width:64px;' class="campos">
                        <option value='0' />
                        <option value='2013'>2013</option>
                        <option value='2012'>2012</option>
                        <option value='2011'>2011</option>
                        <option value='2010'>2010</option>
                        <option value='2009'>2009</option>
                        <option value='2008'>2008</option>
                        <option value='2007'>2007</option>
                        <option value='2006'>2006</option>
                        <option value='2005'>2005</option>
                        <option value='2004'>2004</option>
                        <option value='2003'>2003</option>
                        <option value='2002'>2002</option>
                        <option value='2001'>2001</option>
                        <option value='2000'>2000</option>
                        <option value='1999'>1999</option>
                        <option value='1998'>1998</option>
                        <option value='1997'>1997</option>
                        <option value='1996'>1996</option>
                        <option value='1995'>1995</option>
                        <option value='1994'>1994</option>
                        <option value='1993'>1993</option>
                        <option value='1992'>1992</option>
                        <option value='1991'>1991</option>
                        <option value='1990'>1990</option>
                        <option value='1989'>1989</option>
                        <option value='1988'>1988</option>
                        <option value='1987'>1987</option>
                        <option value='1986'>1986</option>
                        <option value='1985'>1985</option>
                        <option value='1984'>1984</option>
                        <option value='1983'>1983</option>
                        <option value='1982'>1982</option>
                        <option value='1981'>1981</option>
                        <option value='1980'>1980</option>
                        <option value='1979'>1979</option>
                        <option value='1978'>1978</option>
                        <option value='1977'>1977</option>
                        <option value='1976'>1976</option>
                        <option value='1975'>1975</option>
                        <option value='1974'>1974</option>
                        <option value='1973'>1973</option>
                        <option value='1972'>1972</option>
                        <option value='1971'>1971</option>
                        <option value='1970'>1970</option>
                        <option value='1969'>1969</option>
                        <option value='1968'>1968</option>
                        <option value='1967'>1967</option>
                        <option value='1966'>1966</option>
                        <option value='1965'>1965</option>
                        <option value='1964'>1964</option>
                        <option value='1963'>1963</option>
                        <option value='1962'>1962</option>
                        <option value='1961'>1961</option>
                        <option value='1960'>1960</option>
                        <option value='1959'>1959</option>
                        <option value='1958'>1958</option>
                        <option value='1957'>1957</option>
                        <option value='1956'>1956</option>
                        <option value='1955'>1955</option>
                        <option value='1954'>1954</option>
                        <option value='1953'>1953</option>
                        <option value='1952'>1952</option>
                        <option value='1951'>1951</option>
                        <option value='1950'>1950</option>
                        <option value='1949'>1949</option>
                        <option value='1948'>1948</option>
                        <option value='1947'>1947</option>
                        <option value='1946'>1946</option>
                        <option value='1945'>1945</option>
                        <option value='1944'>1944</option>
                        <option value='1943'>1943</option>
                        <option value='1942'>1942</option>
                        <option value='1941'>1941</option>
                        <option value='1940'>1940</option>
                        <option value='1939'>1939</option>
                        <option value='1938'>1938</option>
                        <option value='1937'>1937</option>
                        <option value='1936'>1936</option>
                        <option value='1935'>1935</option>
                        <option value='1934'>1934</option>
                                </select><br>
                    *Correo:<br>
                    <input type="text" id="correo" class="campos">
                    <br>
                    *Contrase&ntilde;a:<br>
                    <input type="password" id="contrasena" class="campos">
                    <br>
                    *Confirmar contrase&ntilde;a:<br>
                    <input type="password" id="confcontrasena" class="campos">
                    <br>
                    Direcci&oacute;n: <br>
                    <input type="text" id="direccion" class="campos">
                    <br>
                    Tel&eacute;fono:
                    <br>
                    <input type="text" id="telefono" class="campos">
                    <br>
                    Estado: <br>
                    <input type="text" id="estado" class="campos">
                    <br>
                    Ciudad/Municipio : <br>
                    <input type="text" id="ciudad" class="campos">
                    <br>
                    C.P.: 
                    <br>
                    <input type="text" id="cp" class="campos">
                    <br>
                    <br>
                    <input type="checkbox" id="aceptcondiciones" value="acepto"  class="campos">
                    *Acepto t&eacute;rminos y condiciones.
                    <br>
                    <br>
                    <hr color="#82c396">
                    <input type="submit" value="Registrarse" class="boton" id="btn_registrarse">
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