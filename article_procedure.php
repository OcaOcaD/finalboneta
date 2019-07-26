<?php 
	include("conexion.php");
	session_start();

	/*****************Agregar un producto******************/
	if ( isset($_POST['add_newitem']) && $_POST['add_newitem'] == "" ) {
		$titulo        = $_POST['input_title'];
		$descripcion   = $_POST['input_description'];
		$categoria     = $_POST['input_type'];
		$precio        = $_POST['input_price'];
		$nombre_imagen = $_FILES['input_image']['name']; 			//obtiene el nombre
		$archivo       = $_FILES['input_image']['tmp_name'];        //contiene el archivo
		$ruta          = "diseño/img/".$nombre_imagen;
		$titulo        = utf8_encode($titulo);
		$descripcion   = utf8_encode($descripcion);
		move_uploaded_file($archivo,$ruta);							//Guardamos la imagen.
		var_dump($descripcion);
		$add_item_query = "INSERT INTO productos(titulo, descripcion, categoria, precio, imagen) VALUES ( '{$titulo}' , '{$descripcion}' , '{$categoria}' , {$precio} , '{$nombre_imagen}')";
		$add_item       = mysqli_query($conexion,$add_item_query) ;
		if ( $add_item ) {
			$_SESSION['deleted'] = true;
		}else{
			$_SESSION['deleted'] = false;
		}
	}

	$products_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}'";
	$productos      = mysqli_query($conexion,$products_query);
	if ($productos) {
		$productos_rows = mysqli_num_rows($productos);
		if ($productos_rows > 0) {
			for ($i=0; $i < $productos_rows ; $i++) { 
				/*****************Eliminar un producto******************/
				if (isset($_POST['delete_art'.$i]) && $_POST['delete_art'.$i] == "") {
					$articulos_catalogo_actual = $i+1;
					for ($j=0; $j < $articulos_catalogo_actual ; $j++) { //Aquí obtenemos el ID del articulo a eliminar
						$productos_data = mysqli_fetch_array($productos);
						$articulo_ID = $productos_data['ID_producto'];
					}
					//echo "Voy a borrar el".$articulo_ID;
					$delete_article_query = " DELETE FROM productos WHERE ID_producto = {$articulo_ID} ";
					$delete_article       = mysqli_query($conexion,$delete_article_query) ;
					if ( $delete_article ) {
						$_SESSION['deleted'] = true;
					}else{
						$_SESSION['deleted'] = false;
					}
				}
				/*****************Editar un producto******************/
				if ( isset($_POST['confirm_editing'.$i]) && $_POST['confirm_editing'.$i] == "" ) {
					$nuevo_titulo      = utf8_encode($_POST['input_title'.$i]);
					$nueva_descripcion = $_POST['input_descripcion'.$i];
					$nueva_descripcion = utf8_encode($nueva_descripcion);
					$nombre_imagen = $_FILES['input_image'.$i]['name']; //obtiene el nombre
					$archivo = $_FILES['input_image'.$i]['tmp_name'];   //contiene el archivo
					$ruta = "diseño/img/".$nombre_imagen;
					move_uploaded_file($archivo,$ruta);
					//Guardamos la imagen.
					//var_dump($nueva_descripcion);
					$nuevo_precio      = $_POST['input_price'.$i];
					$articulos_catalogo_actual = $i+1;
					for ($j=0; $j < $articulos_catalogo_actual		 ; $j++) { //Aquí obtenemos el ID del articulo a editar
						$productos_data = mysqli_fetch_array($productos);
						$articulo_ID = $productos_data['ID_producto'];
						//echo "<br><br>Voy a editar el articulo:<br>".$articulo_ID."<br>".$productos_data['titulo']."<br>";
					}
					$update_article_query = " UPDATE productos SET titulo ='{$nuevo_titulo}', descripcion ='{$nueva_descripcion}', imagen ='{$nombre_imagen}', precio ='{$nuevo_precio}' WHERE ID_producto =  {$articulo_ID}";
					//echo $update_article_query;
					$update_article       = mysqli_query($conexion,$update_article_query) ;
					if ( $update_article ) {
						$_SESSION['deleted'] = true;
					}else{
						$_SESSION['deleted'] = false;
					}
				}
			}
		}else{
			//no hay productos que mostrar
			$_SESSION['errors'] += "No hay productos que mostrar";
		}	
	}
	header("location:admin_dashboard.php");
	 

 ?>