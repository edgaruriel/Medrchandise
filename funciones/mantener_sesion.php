<?php 
function validarSesion(){

if(!isset($_SESSION["cidusuario"])){
	$cdestino = "Location:index.php";
	header($cdestino);
	exit();	
	} 
}

function iniciarSesion($cidlogin){

session_start();
$_SESSION["cidusuario"]= $cidlogin;
 
}
?>
