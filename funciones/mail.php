<?php 
 if ( (isset($_POST["btn_enviar"])) && ($_POST["btn_enviar"]=="Enviar") ){
	 $from = $_POST["txt_nombre"]; // sender
    $subject = $_POST["txt_correo"];
    $message = $_POST["txtr_comentarios"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("mijangosjavier@gmail.com",$subject,$message);
    echo "Thank you for sending us feedback";
	 }
?>