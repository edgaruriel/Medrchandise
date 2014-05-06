<?php
include_once("funciones/menu_header.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_slider.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_botones.css" rel="stylesheet" type="text/css" />
<title>Medrchandise</title>
</head>
<body>
    <div id="cintilla">
        <!--Eddy, eres un farol -->
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
				<div id="div_img_cuerpo">
					<img id="img_cuerpo" alt="" src="imagen/index_20.gif">
				</div>
                <br>
                <center><h2>Aprovecha Nuestros Productos en Oferta!</h2></center>
		</div>
        <!--Inicio del slider-->
        <div id="div_slider">
   
        <ul class="slider">
    <li>
        <input type="radio" id="slide1" name="slide" checked>
        <label for="slide1"></label>
        <img src="http://images02.olx-st.com/ui/11/78/88/1303872451_106327088_2-PRODUCTOS-E-INSUMOS-MeDICOS-Santiago.jpg"Panel 1">
    </li>
    <li>
        <input type="radio" id="slide2" name="slide">
        <label for="slide2"></label>
        <img src="http://www.emmaie.com/uploads/1/0/8/1/10812764/6725485_orig.jpg"Panel 2">
    </li>
    <li>
        <input type="radio" id="slide3" name="slide">
        <label for="slide3"></label>
        <img src="http://i01.i.aliimg.com/photo/v0/108286161/sell_medical_disposables_Syringes_Vacutainers_and_other.jpg"Panel 3">
    </li>
    <li>
        <input type="radio" id="slide4" name="slide">
        <label for="slide4"></label>
        <img src="http://fdasolutionsgroup.com/wp-content/uploads/2012/09/MedicalDevice1.png"Panel 4">
    </li>
</ul>
</div>
        <!--Fin del slider-->
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
	</div>
</body>
</html>