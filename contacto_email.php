<?php 
	include("formulario/enviar.php");

	$contacto_correo      = $_POST['contacto_correo'];
	$contacto_descripcion = $_POST['contacto_descripcion'];

	$asunto  = "Contacto";
	$mensaje = "<legend>".$contacto_correo.":</legend><br><p>".utf8_decode($contacto_descripcion)."</p><label><small>Correo generado desde la pestaña sucursales en la web.</small></label>";
	send_mail($asunto,$mensaje);
	header("location:contacto.php");
 ?>