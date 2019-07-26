
application/x-httpd-php article_procedure.php ( PHP script, UTF-8 Unicode text )
<?php 
	include("conexion.php");
	session_start();


	$products_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}'";
	$productos      = mysqli_query($conexion,$products_query);
	if ($productos) {
		$productos_rows = mysqli_num_rows($productos);
		if ($productos_rows > 0) {
			for ($i=0; $i < $productos_rows ; $i++) { 
				/*****************Eliminar un producto******************/
				if (isset($_POST['pedido'.$i]) && $_POST['pedido'.$i] == "") {
					$autor     = $_POST['pedido_correo'.$i];
					$contenido = $_POST['pedido_descripcion'.$i];
					$articulos_catalogo_actual = $i+1;
					for ($j=0; $j < $articulos_catalogo_actual ; $j++) { //Aquí obtenemos el ID del articulo a eliminar
						$productos_data = mysqli_fetch_array($productos);
						$articulo_ID    = $productos_data['ID_producto'];
						$nombrearticulo = $productos_data['titulo'];
						$nombrearticulo = $productos_data['descripcion'];
						$creadodesde = $articulo_ID." ".$nombrearticulo." ".$descripcion;
					}
					echo "Voy a insertar un oedido desde el articulo: ".$articulo_ID;
					$pedido_query = " INSERT INTO pedidos (autor,contenido,creadodesde) VALUES ('{$autor}','{$contenido}','{$creadodesde}') ";
					echo "<br>".$pedido_query."<br>";
					$pedido  	  = mysqli_query($conexion,$pedido_query);
					var_dump($pedido); 	

					
					if ( $delete_article ) {
						$_SESSION['pedido'] = true;
					}else{
						$_SESSION['pedido'] = false;
					}				
				}
			}
		}else{
			//no hay productos que mostrar
			$_SESSION['errors'] += "No hay productos que mostrar";
		}	
	}
	//header("location:cat.php");
	 

 ?>