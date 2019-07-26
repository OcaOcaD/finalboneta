<?php 
  include("conexion.php");
  session_start();
 ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />
  <title>Navbar</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body id="cat_body">
  <div class="navbar_oca fixed-top">
    <div class="row">
      <nav class="navbar bg-warning col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <span id="losdeinfo_head" class="navbar-brand mb-0 h1">Boneta</span>
      </nav>
    </div>
    <div class="row">
      
    </div>
      <ul class="nav nav-pills nav-fill bg-danger">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="cat.php">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cónocenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
  </div>


  <!---BOOTSTRAP-->
  <script type="text/javascript" src="diseño/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="diseño/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/ca566248d2.js"></script>
  <script>
    $('.dropdown-toggle').dropdown();
  </script>
<script type="text/javascript">

</script>


</body>
</html>
