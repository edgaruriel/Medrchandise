function mostrar_ventana(id,nombre,imagen, descripcion,precio) {
    var ventana = window.open("", "ventana", "width=800 height=500 scrollbars=true");
    ventana.document.open();
    ventana.document.write("<html><head><title>Detalles</title>");
    ventana.document.write("<link href=\"css/estilos_detalles.css\" rel=\"stylesheet\" type=\"text/css\">");
	ventana.document.write("<link href=\"css/estilos_botones.css\" rel=\"stylesheet\" type=\"text/css\" />");
	ventana.document.write("<link href=\"css/estilos_input_text.css\" rel=\"stylesheet\" type=\"text/css\" />");
    ventana.document.write("<script type=\"text/javascript\" src=\"js/js_detalles.js\"></script>");
	ventana.document.write("</head><body>");
    ventana.document.write("            <div id=\"imagen\">");
    ventana.document.write("                <h1>"+nombre+"</h1>");
    ventana.document.write("                    <div id=\"img_principal\">");
    ventana.document.write("                        <img src=\""+imagen+"\" name=\"visorImagen\" id=\"visorImagen\">");
    ventana.document.write("                    </div>");
    ventana.document.write("            </div>");        
    ventana.document.write("            <div id=\"info\">");
    ventana.document.write("                <div id=\"descripcion\">");
    ventana.document.write("                    <h3>Ficha T&eacute;cnica</h3>");
    ventana.document.write("                    <p>"+descripcion+"</p>");
    ventana.document.write("                </div>");
    ventana.document.write("                <div id=\"info_gral\">");
    ventana.document.write("                    <form id=\"btn_agregarProdCarrito\" name=\"btn_agregarProdCarrito\" method=\"post\" action=\"funciones/carritoCompras/agregarProdCarrito.php\">Disponibilidad: <input type=\"text\" disabled=\"disabled\" value=\"En existencia\" id=\"txt_dispo\"><br>");
    ventana.document.write("                        Cantidad: <input type=\"text\" id=\"pro_cantidad\" name=\"pro_cantidad\" onblur=\"CalcularTotal()\"><br>");
    ventana.document.write("                        Precio Unitario:<input type=\"text\" disabled=\"disabled\" value=\""+precio+"\" id=\"pro_precio\">MXN<br>");
    ventana.document.write("                        Total: <input type=\"text\" disabled=\"disabled\" id=\"pro_total\" name=\"pro_total\" value=\"0\">MXN<br><input id=\"pro_id\" name=\"pro_id\" type=\"hidden\" value=\""+id+"\">");
    ventana.document.write("                        <input class=\"boton\" type=\"submit\"  value=\"agregar\" id=\"btn_agregarProdCarrito\" name=\"btn_agregarProdCarrito\">");
    ventana.document.write("                    </form>");
    ventana.document.write("                </div>");
	ventana.document.write("	      </div>");
    ventana.document.write("</body></html>");
    ventana.document.close();
    ventana.focus();
}

