<?php 
  include("conexion.php");
 ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />
  <title>La RM comercial</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body id="index_body" class="index_body">
  <div class="navbar_oca">
        <ul class="nav nav-pills nav-fill bg-warning fixed-top">
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
    <center>
    <div class="boneta">
        <img class="index_logo" src="diseño/img/logo_RM.png" alt="">
        <h1 class="titulo_index">Bonetería la comercial</h1>  
    </div>
  </center>
<?php 
  $productos_query = "SELECT * FROM productos WHERE categoria = 'principal' ";
      $productos = mysqli_query($conexion,$productos_query);
      $productos_rows = mysqli_num_rows($productos);

      for ($i=0; $i < $productos_rows; $i++) { 
        $productos_data[$i] = mysqli_fetch_array($productos);
      }
      
 ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 900px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-block float-left">
          <div id="promo1izq" class="center_slide d-block float-left text-white" style="margin-right: 50vw;">
            <h1 class=""><?php echo utf8_decode($productos_data[0]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[0]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[0]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="buy_button btn-warning d-block float-left">Comprar</button>
            
          </div>
          <img class="d-block float-right center_slide" style="margin-right: 50vw" src="diseño/img/<?php echo $productos_data[0]['imagen'] ?>" alt="First slide">
        </div>
        <div class="d-block float-right">
          <div id="promo2der" class="center_slide d-block float-left text-white" style="margin-left: 50vw">
            <h1 class=""><?php echo utf8_decode($productos_data[1]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[1]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[1]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="buy_button btn-warning d-block float-left">Comprar</button>
          </div>
          <img class="d-block float-right center_slide" style="margin-left: 50vw" src="diseño/img/<?php echo $productos_data[1]['imagen'] ?>" alt="First slide">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-block float-left">
          <div id="promo1izq" class="center_slide d-block float-left text-white" style="margin-right: 50vw;">
            <h1 class=""><?php echo utf8_decode($productos_data[2]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[2]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[2]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="buy_button btn-warning d-block float-left">Comprar</button>
            
          </div>
          <img class="d-block float-right center_slide" style="margin-right: 50vw" src="diseño/img/<?php echo $productos_data[2]['imagen'] ?>" alt="First slide">
        </div>
        <div class="d-block float-right">
          <div id="promo2der" class="center_slide d-block float-left text-white" style="margin-left: 50vw">
            <h1 class=""><?php echo utf8_decode($productos_data[3]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[3]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[3]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="buy_button btn-warning d-block float-left">Comprar</button>
          </div>
          <img class="d-block float-right center_slide" style="margin-left: 50vw" src="diseño/img/<?php echo $productos_data[3]['imagen'] ?>" alt="First slide">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-block float-left">
          <div id="promo1izq" class="center_slide d-block float-left text-white" style="margin-right: 50vw;">
            <h1 class=""><?php echo utf8_decode($productos_data[4]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[4]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[4]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="buy_button btn-warning d-block float-left">Comprar</button>
            
          </div>
          <img class="d-block float-right center_slide" style="margin-right: 50vw" src="diseño/img/<?php echo $productos_data[4]['imagen'] ?>" alt="First slide">
        </div>
        <div class="d-block float-right">
          <div id="promo2der" class="center_slide d-block float-left text-white" style="margin-left: 50vw">
            <h1 class=""><?php echo utf8_decode($productos_data[5]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[5]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[5]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="buy_button btn-warning d-block float-left">Comprar</button>
          </div>
          <img class="d-block float-right center_slide" style="margin-left: 50vw" src="diseño/img/<?php echo $productos_data[5]['imagen'] ?>" alt="First slide">
        </div>
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid">
  <hr>
</div>
<div id="matrizMapa" class="row">
  <div class="container text-white">
    <legend class="text-big">Sucursal matriz</legend>
    <p class="">Estamos ubicaados en Calle Los Ángeles 283, Las Conchas, 44460 Guadalajara, Jal.</p>
  </div>
  <div class="container-fluid">
    <iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.185587386636!2d-103.31608035340793!3d20.661313545850586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b22c65c40ac9%3A0x553898df265ab714!2sCalle+Federico+Medrano+1595%2C+Maga%C3%B1a%2C+44800+Guadalajara%2C+Jal.!5e0!3m2!1ses!2smx!4v1534700338897" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>  
</div>
<br><br><br><br>



 <div class="card text-center">
  <div class="card-header">
    Bonetería la comercial
  </div>
  <div class="card-body">
    <h5 class="card-title">Trato personalizado para nuestros</h5>
    <p class="card-text">Siguenos en nuestras redes sociales</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>
  <div class="card-footer text-muted">
    <label>Sitio desarrollado y diseñado por</label><br><label> luisdonaldogarciacastro@gmail.com</label>
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

