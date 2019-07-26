<?php 
  $pestaña = "catalogo";
  include("utilities/Product.php");
  include("conexion.php");
  session_start();
  if ( !isset( $_GET['c'] ) ) {
    $catalogo_actual = "promocion";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />
  <title>Catalogo</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="cat.css">
  <link rel="stylesheet" href="components/sideDrawer/sideDrawer.css">
  <link rel="stylesheet" href="components/catShower/catShower.css">
  <link rel="stylesheet" href="components/catShower/promos/promos.css">
  <link rel="stylesheet" href="components/catShower/showProducts/showProducts.css">
</head>
<body id="cat_body" class="">
  <?php 
    if ( isset($_SESSION['pedidoenviado']) && $_SESSION['pedidoenviado'] == true ) {
      echo "<script>
              window.alert('Pedido enviado');
            </script>
      ";
      unset($_SESSION['pedidoenviado']);
    }else if( isset($_SESSION['pedidoenviado']) && $_SESSION['pedidoenviado'] == false ){
      echo "<script>
              window.alert('Fallo al enviar pedido');
            </script>
      ";
      unset($_SESSION['pedidoenviado']);
    }
    ?>
  <?php //include("components/oldvar/oldvar.php") ?>
  <div class="navbar_oca fixed-top">

      <ul class="nav nav-pills nav-fill bg-danger">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="cat.php">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Sucursales</a>
        </li>
      </ul>
  </div>
  <div class="cat__content">
      <?php include("components/sideDrawer/sideDrawer.php"); ?>
      <?php include("components/catShower/catShower.php"); ?>
      

  </div>



  <?php 
  switch ($_SESSION['catalogo_actual']) {
    case 'promocion':
      echo "<script>";
      echo "
        var element = document.getElementById('tipo0');
        element.classList.add('active');
        element = document.getElementById('tipo1');
        element.classList.remove('active');
        element = document.getElementById('tipo2');
        element.classList.remove('active');
        element = document.getElementById('tipo3');
        element.classList.remove('active');
        element = document.getElementById('tipo4');
        element.classList.remove('active');
        element = document.getElementById('tipo5');
        element.classList.remove('active');
        element = document.getElementById('principal');
        element.classList.remove('active');
      ";

      echo "</script>";
      break;
    case 'caballero':
      echo "<script>";
      echo "
        var element = document.getElementById('tipo1');
        element.classList.add('active');

         var element = document.getElementById('tipo0');
        element.classList.remove('active');
         var element = document.getElementById('tipo2');
        element.classList.remove('active');
         var element = document.getElementById('tipo3');
        element.classList.remove('active');
         var element = document.getElementById('tipo4');
        element.classList.remove('active');
         var element = document.getElementById('tipo5');
        element.classList.remove('active');
        var element = document.getElementById('principal');
        element.classList.remove('active');
      ";

      echo "</script>";
      break;
    case 'dama':
      echo "<script>";
      echo "
        var element = document.getElementById('tipo2');
        element.classList.add('active');

         var element = document.getElementById('tipo0');
        element.classList.remove('active');
         var element = document.getElementById('tipo1');
        element.classList.remove('active');
         var element = document.getElementById('tipo3');
        element.classList.remove('active');
         var element = document.getElementById('tipo4');
        element.classList.remove('active');
         var element = document.getElementById('tipo5');
        element.classList.remove('active');
        var element = document.getElementById('principal');
        element.classList.remove('active');
      ";

      echo "</script>";
      break;
    case 'niños':
      echo "<script>";
      echo "
        var element = document.getElementById('tipo3');
        element.classList.add('active');

         var element = document.getElementById('tipo0');
        element.classList.remove('active');
         var element = document.getElementById('tipo1');
        element.classList.remove('active');
         var element = document.getElementById('tipo2');
        element.classList.remove('active');
         var element = document.getElementById('tipo4');
        element.classList.remove('active');
         var element = document.getElementById('tipo5');
        element.classList.remove('active');
        var element = document.getElementById('principal');
        element.classList.remove('active');
      ";

      echo "</script>";
      break;
    case 'escolar':
      echo "<script>";
      echo "
        var element = document.getElementById('tipo4');
        element.classList.add('active');

         var element = document.getElementById('tipo0');
        element.classList.remove('active');
         var element = document.getElementById('tipo1');
        element.classList.remove('active');
         var element = document.getElementById('tipo2');
        element.classList.remove('active');
         var element = document.getElementById('tipo3');
        element.classList.remove('active');
         var element = document.getElementById('tipo5');
        element.classList.remove('active');
        var element = document.getElementById('principal');
        element.classList.remove('active');
      ";

      echo "</script>";
      break;
    case 'bebés':
      echo "<script>";
      echo "
        var element = document.getElementById('tipo5');
        element.classList.add('active');

         var element = document.getElementById('tipo0');
        element.classList.remove('active');
         var element = document.getElementById('tipo1');
        element.classList.remove('active');
         var element = document.getElementById('tipo2');
        element.classList.remove('active');
         var element = document.getElementById('tipo3');
        element.classList.remove('active');
         var element = document.getElementById('tipo4');
        element.classList.remove('active');
        var element = document.getElementById('principal');
        element.classList.remove('active');
      ";
      case 'principal':
      echo "<script>";
      echo "
        var element = document.getElementById('principal');
        element.classList.add('active');

         var element = document.getElementById('tipo0');
        element.classList.remove('active');
         var element = document.getElementById('tipo1');
        element.classList.remove('active');
         var element = document.getElementById('tipo2');
        element.classList.remove('active');
         var element = document.getElementById('tipo3');
        element.classList.remove('active');
         var element = document.getElementById('tipo4');
        element.classList.remove('active');
         var element = document.getElementById('tipo5');
        element.classList.remove('active');
      ";

      echo "</script>";
      break;

  }
   ?>
 <div class="card text-center">
  <div class="card-header">
    Bonetería la comercial
  </div>
  <div class="card-body">
    <h5 class="card-title">Servicio de la mejor calidad para nuestros clientes</h5>
    <p class="card-text">Siguenos en nuestras redes sociales</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>
  <div class="card-footer text-muted">
    <label>Desarrollado por</label><br><label> luisdonaldogarciacastro@gmail.com</label>
  </div>
</div> 
  <!---BOOTSTRAP-->
  <script type="text/javascript" src="diseño/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="diseño/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/ca566248d2.js"></script>

<script type="">
    function mostrar_email(numero){ //Está función expande el formulario de contactar ala tienda
      $("#cat_square"+numero).toggleClass("col-sm-6 col-sm-12");
      $("#cat_square"+numero).toggleClass("col-md-4 col-md-12");
      $("#cat_square"+numero).toggleClass("col-lg-3 col-lg-6");
      $("#cat_square"+numero).toggleClass("col-xl-2 col-xl-8");
      $("#cat_item"+numero).toggleClass("cat_40vh cat_60vh");
      $("#email_view"+numero).toggleClass("email_viewS email_viewH")  ;
    }
</script>
<script>
  var ventana = $(window).width();
 $(window).resize(function() {
  if ($(window).width() < 780) {
    var element = document.getElementById('logo_categorias');
        element.classList.remove('logo');
        element.classList.add('logo_smscr');
    var element = document.getElementById('logo_logo');
        element.classList.remove('logo_logo');
        element.classList.add('logo_smscr_logo');
        
  }
 else {
    var element = document.getElementById('logo_categorias');
        element.classList.add('logo');
        element.classList.remove('logo_smscr');
    var element = document.getElementById('logo_logo');
        element.classList.add('logo_logo');
        element.classList.remove('logo_smscr_logo');
 }
});
</script>



</body>
</html>