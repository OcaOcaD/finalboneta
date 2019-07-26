<?php 
session_start();
$i = 1;
for ($i=0; $i < 10 ; $i++) { 
	var_dump($_POST['tipo'.$i]);
	if (isset($_POST['tipo'.$i]) && $_POST['tipo'.$i] == "") {
		switch ($i) {
			case 0:
				$_SESSION['catalogo_actual'] = "promocion";
				break;
			case 1:
				$_SESSION['catalogo_actual'] = "caballero";
				break;
			case 2:
				$_SESSION['catalogo_actual'] = "dama";
				break;
			case 3:
				$_SESSION['catalogo_actual'] = "niños";
				break;
			case 4:
				$_SESSION['catalogo_actual'] = "escolar";
				break;
			case 5:
				$_SESSION['catalogo_actual'] = "bebés";
				break;
			case 6:
				$_SESSION['catalogo_actual'] = "principal";
				break;
			default:
				$_SESSION['catalogo_actual'] = "promocion";
				break;
		}
	}
}
$_SESSION['escogido'] = true;
header("location:cat.php");
 ?>