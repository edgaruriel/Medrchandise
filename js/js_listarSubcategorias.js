var arraySubCats;

function cambia_subcategoria() {
    var categoria = document.formulario.cmb_idcategorias[document.formulario.cmb_idcategorias.selectedIndex].value;
    if(categoria != 0){
        var subcategorias = document.formulario.hdn_subcategorias.value;
        var mis_subcategorias = eval("subcategorias[categoria]");
        var num_subcategorias = mis_subcategorias.length;
        document.formulario.cmb_idsubcategoria.length = num_subcategorias;
        for(i=0;i<num_subcategorias;i++){
            document.formulario.cmb_idsubcategoria.option[i].value = mis_subcategorias[i];
            document.formulario.cmb_idsubcategoria.option[i].text = mis_subcategorias[i];
        }
    }
    else {
        document.formulario.cmb_idsubcategoria.length = 1;
        document.formulario.cmb_idsubcategoria.options[0].value = "";
        document.formulario.cmb_idsubcategoria.options[0].text = "";
    }
    document.formulario.cmb_idsubcategoria.options[0].selected = true;
}

window.onload = function() {
    document.getElementById("cmb_idcategorias").onchange = cambia_subcategoria;
}