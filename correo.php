<?php
require("./functions/class.phpmailer.php");
 if ( isset($_POST["btn_enviar"]) && $_POST["btn_enviar"] == "Enviar"){

        $nombre = $_POST["txt_nombre"];
        $correo = $_POST["txt_correo"];
        $comentario = $_POST["txt_comentarios"];

        $mail = new PHPMailer();

        $mail->IsSMTP();  // telling the class to use SMTP

        $mail->SMTPDebug  = 0;     

        $mail->Host     = "smtp.gmail.com"; // SMTP server
        $mail->Port     = 587;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth   = true;

        $mail->Username   = "medrchandise@gmail.com";  // GMAIL username
        $mail->Password   = "Medrchandise123";            // GMAIL password

        $mail->SetFrom('medrchandise@gmail.com', 'Medrchandise');

        $mail->Subject  = "Contacto Medrchandise";
        $mail->Body     = $comentario;
        $mail->WordWrap = 50;

        $mail->AddAddress($correo, $nombre);

        if(!$mail->Send()) {
          echo 'Message was not sent.';
          echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
          echo 'Message has been sent.';
        }   
}
?>