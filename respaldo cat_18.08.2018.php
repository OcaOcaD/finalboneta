<?php 
  include("conexion.php");
  session_start();
  if (!isset($_SESSION['catalogo_actual'])) {
    $_SESSION['catalogo_actual'] = "promocion";
  }
 ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />
  <title>Boneta</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body id="cat_body" class="">

  <div class="navbar_oca fixed-top">
      <nav class="navbar bg-warning">
          <span id="losdeinfo_head" class="navbar-brand mb-0 h1">Bonetería la comercial</span>
      </nav>
      <ul class="nav nav-pills nav-fill bg-danger">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="cat.php">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
      </ul>
  </div>
<div id="cat_content" class="row" style="margin-bottom: 20vh;">
  <div class="side_menu col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
  <div class="logo ">
      <img id="logo_logo" src="diseño/img/logo_RM.png">
  </div>
      <form id="form_form" action="proceso_catalogo.php" method="POST">
        <div class=" list-group list-group-flush" id="list-tab" role="tablist">
          <legend style="width: 100%; color: white">Escoge un catalogo</legend>
          <hr>
          <button id="tipo0" type="input" name="tipo0" class="btn list-group-item text-left">
            Promociones
          </button>
          <button id="tipo1" type="input" name="tipo1" class="btn list-group-item text-left">
            Caballero
          </button>
          <button id="tipo2" type="input" name="tipo2" class="btn list-group-item text-left">
            Dama
          </button>
          <button id="tipo3" type="input" name="tipo3" class="btn list-group-item text-left">
            Juvenil
          </button>
          <br>
          <br>
        </div>
        
      </form>
  </div>

  <div class="content col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
    <div class="row">
      <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <legend style="width: 100%; color: white">Catalogo <?php echo $_SESSION['catalogo_actual']; ?></legend>
        <hr>
      </div>
    </div>
    <div class="row">
      <?php 
      $productos_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}' ";
      $productos = mysqli_query($conexion,$productos_query);
      $productos_rows = mysqli_num_rows($productos);

      for ($i=0; $i < $productos_rows; $i++) { 
        $productos_data = mysqli_fetch_array($productos);
      ?>
      <div id="cat_square<?php echo $i;?>" class="cat_square col-md-4 col-lg-3 col-xl-2 col-sm-6 col-xs-12">
        <br>
        <table id="cat_item<?php echo $i;?>" class="table bg-danger" >
          <tbody>
            <tr>
              <td>
                <center>
                  <img src="diseño/img/<?php echo $productos_data['imagen'] ?>" class="cat_image">
                </center>
                <!--<img src="diseño/img/caballero.jpg" class="cat_image">-->
              </td>
              <td id="email_view<?php echo $i;?>" class="email_viewH">
                  <div class="explicacion ">
                    <strong><h3>¿Te interesa este producto?</h3></strong>
                    <br>
                    <p>Dejanos un mensaje con tu pedido y en breve te responderemos</p>
                  </div>
                  <form action="pedido_email.php" method="POST">
                    <div class=" form-group">
                      <label  for="exampleFormControlTextarea1">Escribenos aquí por tu pedido</label>
                      <textarea class="form-control" required placeholder="¡Quiero 3 de ésta increíble prenda!" id="exampleFormControlTextarea1" name="pedido_descripcion<?php echo  $i ?>" rows="3"></textarea>
                    </div>
                    <div class=" form-group">
                      <label class="">¿A qué   correo deseas que te contactemos?</label>
                      <input type ="email" class="form-control form-control-sm" required name="pedido_correo<?php echo  $i ?>" placeholder="email@email.com">
                      <small id="emailHelp" class="form-text text-white">Nunca compartiremos tu información con nadie</small>
                      <center><p><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i></p></center>
                    </div>
                    <div class="form-group"> 
                      <button type="submit" id="buy_button<?php echo  $i ?>" class="buy_button btn btn-sm btn-warning" name="pedido<?php echo  $i ?>">
                      Enviar <i class="fa fa-send" aria-hidden="true"></i>
                        
                      </button>
                    </div>
                  </form>
              </td>
            </tr>
            <tr>
              <td><?php echo utf8_decode($productos_data['titulo']); ?>
              <span class="badge badge-warning badge-pill">$<?php echo $productos_data['precio']; ?> <small>MXN</small></span>
              </td>
            </tr>
            <tr id="hidden_stuff<?php echo $i;?>" class="hidden_stuff">
              <td><?php echo utf8_decode($productos_data['descripcion']); ?></td>
            </tr>
            <tr class="hidden_stuff<?php echo $i;?> colores">
              <td>
                <div id="comprar" name="">
                  <button id="hidden_button" class="btn btn-sm" disabled>----</button>
                  <button id="buy_button" onclick="mostrar_email(this.name);" class="buy_button btn btn-sm btn-warning" name="<?php echo  $i ?>">
                  Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    
                  </button>
                  
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      
      </div>
      <div class="hidden" id="promocion" name="<?php echo $_SESSION['catalogo_actual']; ?>" style="display: none;"></div>
      <div class="hidden" id="productos_rows" name="<?php echo $productos_rows; ?>" style="display: none;"></div>

      <?php 
      }//Cierre del ciclo del catalogo
       ?>
    </div>
  </div>
</div>


  <?php 
  switch ($_SESSION['catalogo_actual']) {
    case 'promocion':
      echo "<script>";
      echo "
        var element = document.getElementById('tipo0');
        element.classList.add('active');

         var element = document.getElementById('tipo1');
        element.classList.remove('active');
         var element = document.getElementById('tipo2');
        element.classList.remove('active');
         var element = document.getElementById('tipo3');
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
      ";

      echo "</script>";
      break;
    case 'juvenil':
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
    <h5 class="card-title">Trato personalizado para nuestros</h5>
    <p class="card-text">Siguenos en neustras redes sociales</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
  <!---BOOTSTRAP-->
  <script type="text/javascript" src="diseño/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="diseño/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/ca566248d2.js"></script>
  <script>
    $('.dropdown-toggle').dropdown();
  </script>
<script type="">
    function mostrar_email(numero){ //Está función expande el formulario de contactar ala tienda
      $("#cat_square"+numero).toggleClass("col-sm-6 col-sm-12");
      $("#cat_square"+numero).toggleClass("col-md-4 col-md-12");
      $("#cat_square"+numero).toggleClass("col-lg-3 col-lg-6");
      $("#cat_square"+numero).toggleClass("col-xl-2 col-xl-8");
      $("#email_view"+numero).toggleClass("email_viewS email_viewH");
    }
</script>



</body>
</html>
