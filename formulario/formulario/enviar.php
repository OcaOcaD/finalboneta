
<?php
var_dump($_POST['enviar']);
if ( isset($_POST['enviar']) && $_POST['enviar'] == "enviar" ){
    $Nombre   = $_POST['Nombre'];
    $Correo   = $_POST['Correo'];
    $Mensaje  = $_POST['Mensaje'];
    $Telefono = $_POST['Telefono'];
    require ("includes/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = ("pedidos@boneterialacomercial.com"); //Dirección desde la que se enviarán los mensajes. Debe ser la misma de los datos de el servidor SMTP.
    $mail->FromName = $Nombre; 
    $mail->AddAddress("contacto@boneterialacomercial.com"); // Dirección a la que llegaran los mensajes.

    $mail->From     = ("pedidos@boneterialacomercial.com");
    $mail->FromName = $Nombre;
    $mail->AddAddress("contacto@boneterialacomercial.com");

// Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Pedido nuevo";
    $mail->Body     =  "hola";

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "mail.boneterialacomercial.com:2525";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "pedidos@boneterialacomercial.com";  // Correo Electrónico
    $mail->Password = "boneteria_123!"; // Contraseña
    $mail->Port = 26;
    $mail->SMTPSecure = false;
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    if ($mail->Send())
        echo "logia";
        //echo "<script>alert('Formulario Enviado');location.href ='javascript:history.back()';</script>";
    else
        echo "nomia";
    //echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
}

/*


    require("includes/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = ("pedidos@boneterialacomercial.com"); //Dirección desde la que se enviarán los mensajes. Debe ser la misma de los datos de el servidor SMTP.
    $mail->FromName = $Nombre; 
    $mail->AddAddress("contacto@boneterialacomercial.com"); // Dirección a la que llegaran los mensajes.

// Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Pedido nuevo";
    $mail->Body     =  "Nombre: $Nombre \n<br />".
    "Email: $Correo \n<br />".
    "Tel: $Telefono \n<br />".
    "Mensaje: $Mensaje \n<br />";

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "mail.boneterialacomercial.com:2525";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "pedidos@boneterialacomercial.com";  // Correo Electrónico
    $mail->Password = "boneteria_123!"; // Contraseña

    if ($mail->Send())
        echo "logia";
    //echo "<script>alert('Formulario Enviado');location.href ='javascript:history.back()';</script>";
    else
        echo "nomia";
    //echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
*/
?>
