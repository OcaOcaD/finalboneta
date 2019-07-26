<?php 
  include("conexion.php");
  session_start();
  if (isset($_SESSION['userauth']) && $_SESSION['userauth'] == true ) {
    header("location:admin_dashboard.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />
  <title>Log in</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body id="index_admin" class="index_body">
  <div class="navbar_oca">
        <ul class="nav nav-pills nav-fill fixed-top">
          <li class="nav-item active">
            <a class="nav-link " href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cat.php">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
        </ul>
    </div>
    <div class="row" style="height: 100vh">
      <div class="container form">
        <form action="admin_auth.php" method="POST">
          <div class="form-group">
            <label class="text-white" for="username">Nombre de usuario</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Usuario administrador">
          </div>
          <div class="form-group">
            <label class="text-white" for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
          </div>
          <button type="submit" name="entrar" class="btn btn-sm btn-primary">Entrar</button>
        </form>
      </div>
    </div>


    <div class="col-xs-12 text-right fixed-bottom">
      <div class="admin">
        <form action="logout.php" method="POST"></form>
          <a href="admin.php">
            <i class="fa fa-sign-out fa-3x" aria-hidden="true"></i><br>  
            Salir
          </a>
      </div>

    </div>
  






  <!---BOOTSTRAP-->  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="diseño/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/ca566248d2.js"></script>
  <script>
    $('.dropdown-toggle').dropdown()
  </script>

</body>
</html>

