function cargarImagen(){
	document.getElementById('file_img').click();
}

window.onload = function() {
	
	var select = document.getElementById("examinar_imagen");
	select.onclick = cargarImagen;
}