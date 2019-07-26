<?php
function enviar_correo($asunto,$mensaje){
/*
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'mail.boneterialacomercial.com';                    // Specify main and backup SMTP servers
	//$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'pedidos@boneterialacomercial.com';          // SMTP username
	$mail->Password = 'boneteria_123!'; // SMTP password
	//$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
	//$mail->Port = 465;                                 // TCP port to connect to
	$mail->SMTPAuth = false;
	$mail->SMTPSecure = false;
	$mail->Port = 2525;

	$mail->setFrom('pedidos@boneterialacomercial.com', 'PEDIDOS');
	//$mail->addReplyTo('@gmail.com', 'INTECO copia');
	$mail->addAddress('contacto@boneterialacomercial.com');   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $mensaje;
	//$mail->addAttachment($archivo_adjunto);
	$mail->Subject = $asunto;
	$mail->Body    = $bodyContent;
*/	

    $mail->From     = ("nombre@dominio.com"); //Dirección desde la que se enviarán los mensajes. Debe ser la misma de los datos de el servidor SMTP.
    $mail->FromName = $Nombre; 
    $mail->AddAddress("nombre@dominio.com"); // Dirección a la que llegaran los mensajes.

// Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "mail.dominio.com:2525";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "nombre@dominio.com";  // Correo Electrónico
    $mail->Password = "123456"; // Contraseña

	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    	)
	);

	if(!$mail->send()) {
		return  'Message could not be sent.<br> Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    
	    return true;
	}
}
?>