        
        window.onload = function() { //tras cargar la página ...
            visor1=document.getElementById("img_principal"); //referencia al visor
            document.getElementById("foto1").onclick = Function("mifoto(1)");
            document.getElementById("foto2").onclick = Function("mifoto(2)");
            document.getElementById("foto3").onclick = Function("mifoto(3)");
            document.getElementById("foto4").onclick = Function("mifoto(4)");
            document.getElementById("foto5").onclick = Function("mifoto(5)");

            precio = document.getElementById("pro_total");
            precio.value = 12;
        }
       
function mifoto(num) { //cambiar la imagen
         f="imagen/foto"+num+".jpg"; //ruta de la nueva imagen
         document.images["visorImagen"].src=f; //cambiar imagen
}

function CalcularTotal() {
    var cantidad, precio, total;
    
    cantidad = document.getElementById("pro_cantidad");
    precio = document.getElementById("pro_precio");
    total = document.getElementById("pro_total");
    
    if(isNaN(Number(cantidad.value))) {
        alert("La cantidad debe ser un número entero mayor que cero");
        cantidad.value = 0;
        cantidad.focus();
    }
    total.value = cantidad.value * precio.value;
}

