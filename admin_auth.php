<?php 
	include("conexion.php");
	session_start();
	if(isset($_POST['entrar'])){
		$username  = $_POST['username'];
		$password = $_POST['password'];
		$pass_encrypted = sha1($password);
		//Buscamos si existe ese nombre en la base de datos
		$userexist_query = " SELECT * FROM usuarios WHERE username = '{$username}' ";
		$userexist       = mysqli_query($conexion,$userexist_query) ;
		if ($userexist) {
			$user_num_rows = mysqli_num_rows($userexist);
			if ($user_num_rows == 1) {
				//Comprobamos si la contraseña y el usuario coinciden
				$user_auth_query = "SELECT * FROM usuarios WHERE username = '{$username}' AND password = '{$pass_encrypted}' ";
				$user_auth       = mysqli_query($conexion,$userexist_query);
				$user_auth_data  = mysqli_fetch_array($user_auth);
				$_SESSION['userauth']  = true;
				$_SESSION['username']  = $user_auth_data['username'];
				$_SESSION['user_type'] = $user_auth_data['type'];
				header("location:admin_dashboard.php");
			}else{
				$_SESSION['userauth']  = false;
				if (isset($_SESSION['errores']) && $_SESSION['errores'] != NULL) {
					$_SESSION['errores'] += "Parece que hay más de un usuario con el mismo nombre.<br> PAra solucionarlo contacta al administrador";
				}else{
					$_SESSION['errores'] == "Parece que hay más de un usuario con el mismo nombre.<br> PAra solucionarlo contacta al administrador";			
				}
			}
		}else{
			if (isset($_SESSION['errores']) && $_SESSION['errores'] != NULL) {
				$_SESSION['errores'] += "No existe ese nombre de usuario";
			}else{
				$_SESSION['errores'] == "No existe ese nombre de usuario";
			}
		}
	}else{
		echo "Problemas al cargar los datos del formulario";
	}
	header("location:admin.php");
 ?>