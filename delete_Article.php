<?php 
	session_start();
	$i = 1;
	for ($i=0; $i < 4 ; $i++) { 
		var_dump($_POST['delete_art'.$i]);
		if (isset($_POST['delete_art'.$i]) && $_POST['delete_art'.$i] == "") {
			$articulo_ID = $i;
			$delete_article_query = " DELETE productos WHERE ID_producto = {$articulo_ID} ";
			$delete_article       = mysqli_query($conexion,$delete_article_query) ;
			if ( $delete_article ) {
				$_SESSION['deleted'] = true;
			}else{
				$_SESSION['deleted'] = false;
			}
		}
	}
	header("location:cat.php");
	 

 ?>