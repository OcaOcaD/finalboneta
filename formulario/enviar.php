
<?php
function send_mail($asunto,$contenido){
    require ("includes/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->From     = ("pedidos@boneterialacomercial.com"); //Dirección desde la que se enviarán los mensajes. Debe ser la misma de los datos de el servidor SMTP.
    $mail->FromName = "SITIO WEB"; 
    $mail->AddAddress("contacto@boneterialacomercial.com"); // Dirección a la que llegaran los mensajes.
// Aquí van los datos que apareceran en el correo que reciba
    //$mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  = $asunto;
    $mail->Body     = $contenido;
    $mail->Host     = "mail.boneterialacomercial.com";
    $mail->Username = "pedidos@boneterialacomercial.com";
    $mail->Password = "boneteria_123!";
// Datos del servidor SMTP
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAuth = true;
    $mail->Port = 465;          
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    if ($mail->Send())
        return true;
    else
        return "Error al enviar";
    //echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
/*
var_dump($_POST['enviar']);
if ( isset($_POST['enviar']) && $_POST['enviar'] == "enviar" ){
    $Nombre   = $_POST['Nombre'];
    $Correo   = $_POST['Correo'];
    $Mensaje  = $_POST['Mensaje'];
    $Telefono = $_POST['Telefono'];
    require ("includes/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = ("pedidos@boneterialacomercial.com"); //Dirección desde la que se enviarán los mensajes. Debe ser la misma de los datos de el servidor SMTP.
    $mail->FromName = "Pedro"; 
    $mail->AddAddress("contacto@boneterialacomercial.com"); // Dirección a la que llegaran los mensajes.


// Aquí van los datos que apareceran en el correo que reciba

    //$mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Pedido nuevo";
    $mail->Body     =  "hola asdfsdasdasdsd dsa  d asdasdsdssd";
    $mail->Host     = "mail.boneterialacomercial.com";
    $mail->Username = "pedidos@boneterialacomercial.com";
    $mail->Password = "boneteria_123!";

// Datos del servidor SMTP
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAuth = true;
    $mail->SMTPOptions = array(
    $mail->Port = 465;          
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    if ($mail->Send())
        //echo "logia";
        echo "<script>alert('Formulario Enviado');location.href ='javascript:history.back()';</script>";
    else
        echo "nomia";
    //echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
}
*/
}
?>
