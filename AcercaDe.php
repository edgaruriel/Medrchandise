<?php
include_once("funciones/menu_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_acercade.css" rel="stylesheet" type="text/css"/>
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
        
        <div id="titulo_acercaDe">
        <h2>Acerca de Nosotros</h2>
        </div>
        <div id="contenido_acercaDe">
          <h3>Concepto</h3>
          <p>
          La tienda Medrchandise, es una tienda que ofrece por primera vez al m�dico y al p�blico general la venta directa de: productos m�dicos, material de curaci�n, instrumental, muebles y todo lo relacionado con el cuidado y atenci�n de la salud; a trav�s de un servicio aut�nomo, el cual le permite al comprador estar en contacto directo con el producto a adquirir y con ello hacer una selecci�n propia a trav�s de conocer y comparar el producto que busca.
Con gran orgullo aseguramos que contamos con m�s de 5,000 productos de 400 marcas.
Tenemos una magn�fica relaci�n con nuestros proveedores, lo que por a�os nos ha permitido establecer excelentes relaciones comerciales que se ven reflejadas en los precios que ofrecemos a nuestros clientes.
		<h3>Compromiso</h3>
        <p>
        Entendemos las necesidades del profesional de la medicina, as� como de los pacientes que necesitan tener productos de calidad y de vanguardia, precios competitivos con abasto oportuno y confiable. Por lo que nuestro compromiso es mantener los est�ndares de calidad en servicio y atenci�n que usted merece.
        </p>
        <h3>Misi&oacute;n</h3>
        <p>Proporcionar un mercado electr�nico mundial en el que pr�cticamente cualquier persona pueda comerciar con casi cualquier producto, creando as� oportunidades econ�micas por todo el mundo</p>
        <h3>Visi&oacute;n</h3>
        <UL type = disk >
		<LI>Una tienda con marcas l&iacute;deres y confiables para nuestros consumidores.</LI>
		<LI>El proveedor preferido de nuestros clientes.</LI>
		<LI>Una tienda innovadora, que mira hacia el futuro.</LI>
		<LI>Una tienda financieramente s&oacute;lida.</LI>
		</UL>
        <br>
       Gracias por su preferencia!<br>
       <center><img src="http://www.despertardetamaulipas.com/fotos/7_10_medicosMEDICOS_2.jpg"></center>
        <br>
        <br>
        <br>
        <br>
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