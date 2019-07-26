<?php 
  $pestaña = "catalogo";
  include("conexion.php");
  session_start();
  if ( !isset($_SESSION['escogido']) ) {
    $_SESSION['catalogo_actual'] = "promocion";
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
  <link rel="stylesheet" href="components/sideDrawer/sideDrawer.css">
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
<div id="cat_content" class="row" style=" margin-bottom: 14vh;">

  <div class="content col-xs-12 col-sm-6 col-md-8 col-lg-10 col-xl-10" style="margin-top:16vh; padding-top: 10px;">
    <!--<div class="row">-->
      <?php 
      if ( $_SESSION['catalogo_actual'] == 'promocion' ){
      echo "<div class='row' height=''>";
        /****************** mostrar tarjetas de promoción principal **********************/
        $productos_query = "SELECT * FROM productos WHERE categoria = 'principal' ";
        $productos = mysqli_query($conexion,$productos_query);
        $productos_rows = mysqli_num_rows($productos);
        for ($i=0; $i < $productos_rows; $i++) { 
          $productos_data = mysqli_fetch_array($productos);
        ?>

        <div id="cat_square<?php echo $i;?>" class="cat_square col-md-4 col-lg-3 col-xl-2 col-sm-10 col-xs-12">
          <br>
          <table id="cat_item<?php echo $i;?>" class="table bg-warning  cat_40vh " >
            <tbody>
              <tr>
                <td class="cat_25vh">
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
                    <form id="email<?php echo $i;?>" action="pedido_email.php" method="POST"> <!--También hay que mandarlo a pedidos.php para subir el pedido-->
                      <div class=" form-group">
                        <label  for="">Escribenos aquí por tu pedido</label>
                        <textarea class="form-control" required placeholder="¡Quiero 3 de ésta increíble prenda! una docena, Dame un par de esta prenda" id="" name="pedido_descripcion<?php echo  $i ?>" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="">¿A qué correo deseas que te contactemos?</label>
                        <input type ="email" class="form-control form-control-sm" required name="pedido_correo<?php echo  $i ?>" placeholder="email@email.com">
                        <small id="emailHelp" class="form-text text-white">Nunca compartiremos tu información con nadie</small>
                        <center><p><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i></p></center>
                      </div>
                      <div class="form-group"> 
                        <button type="submit" id="submit<?php echo  $i ?>" class="buy_button main_buy btn btn-sm btn-warning" name="pedido<?php echo  $i ?>">
                        Enviar <i class="fa fa-send" aria-hidden="true"></i>
                          
                        </button>
                      </div>
                    </form>
                </td>
              </tr>
              <tr>
                <td><h4><?php echo utf8_decode($productos_data['titulo']); ?></h4><br>
                <span class="badge badge-danger badge-pill">$<?php echo $productos_data['precio']; ?> <small>MXN</small></span>
                </td>
              </tr>
              <tr id="hidden_stuff<?php echo $i;?>" class="hidden_stuff">
                <td><?php echo utf8_decode($productos_data['descripcion']); ?></td>
              </tr>
              <tr class="hidden_stuff<?php echo $i;?> colores">
                <td>
                  <div id="comprar" name="">
                    <button id="hidden_button" class="btn btn-sm" disabled>----</button>
                    <button id="buy_button" onclick="mostrar_email(this.name);" class="buy_button main_buy btn btn-sm btn-warning" name="<?php echo  $i ?>">
                    Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      
                    </button>
                    
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        
        </div>
        <?php 
        }//Cierre del ciclo del catalogo
        echo "</div>";//cerramos el div row      
      }//fin de imprimir promocionees principales
?>
    <div class="row">
      <?php
     /****************** mostrar tarjetas del catalogo actual **********************/
      $productos_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}' ";
      $productos = mysqli_query($conexion,$productos_query);
      $productos_rows = mysqli_num_rows($productos);
      if (!isset($i)) {
        $i = 0;
      }
      $limit = $productos_rows + $i;
      for ($j=$i; $j < $limit; $j++) { 
        $productos_data = mysqli_fetch_array($productos);
      ?>
      <div id="cat_square<?php echo $j;?>" class="cat_square col-md-4 col-lg-3 col-xl-2 col-sm-6 col-xs-12">
        <br>
        <table id="cat_item<?php echo $j;?>" class="table bg-catSquare cat_40vh " >
          <tbody>
            <tr>
              <td class="cat_25vh">
                <center>
                  <img src="diseño/img/<?php echo $productos_data['imagen'] ?>" class="cat_image">
                </center>
                <!--<img src="diseño/img/caballero.jpg" class="cat_image">-->
              </td>
              <td id="email_view<?php echo $j;?>" class="email_viewH">
                  <div class="explicacion ">
                    <strong><h3>¿Te interesa este producto?</h3></strong>
                    <br>
                    <p>Dejanos un mensaje con tu pedido y en breve te responderemos</p>
                  </div>
                  <form id="email<?php echo $j;?>" action="pedido_email.php" method="POST"> <!--También hay que mandarlo a pedidos.php para subir el pedido-->
                    <div class=" form-group">
                      <label  for="">Escribenos aquí por tu pedido</label>
                      <textarea class="form-control" required placeholder="¡Quiero 3 de ésta increíble prenda! una docena, Dame un par de esta prenda" id="" name="pedido_descripcion<?php echo  $j ?>" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="">¿A qué correo deseas que te contactemos?</label>
                      <input type ="email" class="form-control form-control-sm" required name="pedido_correo<?php echo  $j ?>" placeholder="email@email.com">
                      <small id="emailHelp" class="form-text text-white">Nunca compartiremos tu información con nadie</small>
                      <center><p><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i></p></center>
                    </div>
                    <div class="form-group"> 
                      <button type="submit" id="submit<?php echo  $j ?>" class="buy_button btn btn-sm btn-warning" name="pedido<?php echo  $j ?>">
                      Enviar <i class="fa fa-send" aria-hidden="true"></i>
                        
                      </button>
                    </div>
                  </form>
              </td>
            </tr>
            <tr>
              <td><h5><?php echo utf8_decode($productos_data['titulo']); ?></h5><br>
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
  <script>
    $('.dropdown-toggle').dropdown();
  </script>
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