<?php
session_start();
include("conexion.php");
include("formulario/enviar.php");
	$products_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}'";
	$productos      = mysqli_query($conexion,$products_query);
	if ($productos) {
		$productos_rows = mysqli_num_rows($productos);
		if ($productos_rows > 0) {
			for ($i=0; $i < $productos_rows ; $i++) { 
				/*****************Enviar correo al dueño con pedido******************/
				if (isset($_POST['pedido'.$i]) && $_POST['pedido'.$i] == "") {
					$articulos_catalogo_actual = $i+1;
					$correo_cliente = $_POST['pedido_correo'.$i];
					$pedido_cliente = $_POST['pedido_descripcion'.$i];
					$pedido_cliente = utf8_decode($pedido_cliente);
					for ( $j=0; $j < $articulos_catalogo_actual ; $j++) { //Aquí obtenemos el ID del articulo desde elq ue se generó el pedido
						$productos_data       = mysqli_fetch_array($productos);
						$articulo_ID          = $productos_data['ID_producto'];
						$articulo_titulo      = utf8_decode($productos_data['titulo']);
						$articulo_descripcion = utf8_decode($productos_data['descripcion']);
						$articulo_imagen      = $productos_data['imagen'];
						$articulo_precio	  = $productos_data['precio'];
					}
					$asunto = "Pedido nuevo";
					//echo "Voy a hacer un pedido y enviar un correo generado desde el articulo:".$articulo_ID;
					/*php mailer*/
					$mensaje = "<legend><strong>".$correo_cliente."<strong> comenta:</legend><br><p>".$pedido_cliente."</p><br>
							<p>Pedido generado desde:</p>
							<p><small>Articulo: ".$articulo_ID."</small></p>
							<p><small>Nombre: ".$articulo_titulo."</small></p>
							<p><small>Descripcion: ".$articulo_descripcion."</small></p>
							<p><small>Precio: ".$articulo_precio."</small></p>
							<img style='max-width:300px;' src='diseño/img/".$articulo_imagen."'> ";
					$correo = send_mail($asunto,$mensaje);
				}
			}
		} //if ($productos_rows > 0)
	} //if ($productos)
	if ($correo == true) {
		$_SESSION['pedidoenviado'] = true;
	}else{
		$_SESSION['pedidoenviado'] = false;
	}
	header("location:cat.php");
 ?>