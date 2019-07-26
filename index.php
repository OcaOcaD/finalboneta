<?php 
  include("conexion.php");
 ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />
  <title>La R comercial</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="diseño/img/RMlogo.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123951903-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123951903-1');
  </script>
</head>
<body id="index_body" class="index_body">
  <div class="row">
    <div class="navbar_oca">
        <ul class="nav nav-pills nav-fill bg-warning fixed-top">
          <li class="nav-item separado active col-xs-4">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item separado col-xs-4">
            <a class="nav-link " href="cat.php">Catalogo</a>
          </li>
          <li class="nav-item separado col-xs-4">
            <a class="nav-link" href="contacto.php">Sucursales</a>
          </li>
        </ul>
      </div>
  </div>
    <center>
    <div class="boneta text-white">
        <img id="logo_index" class="index_logo" src="diseño/img/RMlogo.png" alt="">
        <h1 class="titulo_index">Bonetería la comercial</h1>
          <p style="">Federico Medrono #1595</p>
          <!--<p>Tel. (33) 36551420</p>
          <p>WhatsApp 3320525945</p>-->
          <p>WhatsApp <a style="text-decoration: none; color: white" href="tel:+3334610945;phone-context=boneterialacomercial.com">3320525945</a></p>
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
<div id="carouselExampleControls" class="carousel slide indexrousel" data-ride="carousel">
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
            <button class="promo_button btn-warning d-block float-left">Comprar</button>
          </div>
          <img class="d-block float-right center_slide" style="margin-right: 50vw" src="diseño/img/<?php echo $productos_data[0]['imagen'] ?>" alt="First slide">
        </div>
        <div class="d-block float-right" style="padding: 20px 20px 20px 20px">
          <div id="promo2der" class="center_slide d-block float-left text-white" style="margin-left: 50vw">
            <h1 class=""><?php echo utf8_decode($productos_data[1]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[1]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[1]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="promo_button btn-warning d-block float-left">Comprar</button>
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
            <button class="promo_button btn-warning d-block float-left">Comprar</button>
            
          </div>
          <img class="d-block float-right center_slide" style="margin-right: 50vw" src="diseño/img/<?php echo $productos_data[2]['imagen'] ?>" alt="First slide">
        </div>
        <div class="d-block float-right">
          <div id="promo2der" class="center_slide d-block float-left text-white" style="margin-left: 50vw">
            <h1 class=""><?php echo utf8_decode($productos_data[3]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[3]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[3]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="promo_button btn-warning d-block float-left">Comprar</button>
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
            <button class="promo_button btn-warning d-block float-left">Comprar</button>
            
          </div>
          <img class="d-block float-right center_slide" style="margin-right: 50vw" src="diseño/img/<?php echo $productos_data[4]['imagen'] ?>" alt="First slide">
        </div>
        <div class="d-block float-right">
          <div id="promo2der" class="center_slide d-block float-left text-white" style="margin-left: 50vw">
            <h1 class=""><?php echo utf8_decode($productos_data[5]['titulo']); ?></h1>
            <p class=" "><?php echo utf8_decode($productos_data[5]['descripcion']); ?></p>
            <label class="">¡A sólo<span class=" badge badge-warning badge-pill">$<?php echo $productos_data[5]['precio'] ?><small>MXN</small></span>!</label>
            <br>
            <button class="promo_button btn-warning d-block float-left">Comprar</button>
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


<div id="matrizMapa" class="row">
  <div class="container text-white">
    <legend style="padding-left: 10px; padding-top: 50px" class="text-big">Sucursal matriz, Zona del vestir Medrano</legend>
    <p style="padding-left: 10px" class="">Ubicados en Calle Federico Medrano 1595,Magaña, 44800 Guadalajara, Jal.</p>
  </div>
  <div class="container-fluid">
    <iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.185587386636!2d-103.31608035340793!3d20.661313545850586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b22c65c40ac9%3A0x553898df265ab714!2sCalle+Federico+Medrano+1595%2C+Maga%C3%B1a%2C+44800+Guadalajara%2C+Jal.!5e0!3m2!1ses!2smx!4v1534700338897" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>  
</div>
<br><br><br><br>



 <div class="card text-center">
  <div class="card-header">
    Bonetería la comercial
  </div>
  <div class="card-body">
    <h5 class="card-title">Estamos para servirte</h5>
    <p class="card-text">Contactanos a través de nuestro email contacto@boneterialacomercial.com o escribenos <a href="contacto.php">aquí</a></p>
    <p class="card-text">Siguenos en nuestras redes sociales</p>
    <div class="col-sm-12">
      <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
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
<script>
  var ventana = $(window).width();
 $(window).resize(function() {
  if ($(window).width() < 760) {
    var element = document.getElementById('logo_index');
        element.classList.remove('index_logo');
        element.classList.add('index_smscr_logo');
  }
 else {
    var element = document.getElementById('logo_index');
        element.classList.remove('index_smscr_logo');
        element.classList.add('index_logo');
 }
});
</script>
  <script src="https://use.fontawesome.com/ca566248d2.js"></script>


</body>
</html>

