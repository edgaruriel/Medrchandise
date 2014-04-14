        window.onload = function() { //tras cargar la página ...
            visor1=document.getElementById("img_principal"); //referencia al visor
            document.getElementById("foto1").onclick = Function("mifoto(1)");
            document.getElementById("foto2").onclick = Function("mifoto(2)");
            document.getElementById("foto3").onclick = Function("mifoto(3)");
            document.getElementById("foto4").onclick = Function("mifoto(4)");
            document.getElementById("foto5").onclick = Function("mifoto(5)");
        }
        
function mifoto(num) { //cambiar la imagen
         f="imagen/foto"+num+".jpg"; //ruta de la nueva imagen
         document.images["visorImagen"].src=f; //cambiar imagen
}