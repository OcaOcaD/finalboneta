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
  <title>Boneta</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body id="cat_body">

  <div class="navbar_oca fixed-top">
      <nav class="navbar navbar-light bg-light">
          <span id="losdeinfo_head" class="navbar-brand mb-0 h1">Boneta</span>
      </nav>
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
<div id="cat_content" class="row">
  <div class="side_menu col-md-2">
    <div class="row">
      <div class="logo">
        <img id="logo_logo" src="diseño/img/boneta.png">
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form id="form_form" action="proceso_catalogo.php" method="POST">
          <div class="list-group list-group-flush" id="list-tab" role="tablist">
            <button type="input" name="tipo0" class="btn list-group-item text-left active">
              Promociones
            </button>
            <button type="input" name="tipo1" class="btn list-group-item text-left">
              Caballero
            </button>
            <button type="input" name="tipo2" class="btn list-group-item text-left">
              Dama
            </button>
            <button type="input" name="tipo3" class="btn list-group-item text-left">
              Juvenil
            </button>
            <br>
            <br>
          </div>
          
        </form>
      </div>
    </div>

  </div>

  <div class="content col-md-10">
    <div class="row">
      <?php 
        if (isset($_SESSION['catalogo_actual']) && $_SESSION['catalogo_actual']) {
          //echo $_SESSION['catalogo_actual'];
        }else{
          echo "nel pastel";
        }
       ?>
    </div>
    <div class="row">
      <?php 
      $productos_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}' ";
      $productos = mysqli_query($conexion,$productos_query);
      $productos_rows = mysqli_num_rows($productos);

      for ($i=0; $i < $productos_rows; $i++) { 
        $productos_data = mysqli_fetch_array($productos);
      ?>
      <div id="cat_square" class="col-md-3">
        <br>
        <table class="table bg-danger cat_item" >
          <tbody>
            <tr>
              <td>
                <a href="diseño/img/caballero.jpg">
                  <img src="diseño/img/caballero.jpg" class="cat_image">
                </a>
                <!--<img src="diseño/img/caballero.jpg" class="cat_image">-->
              </td>
              <td id="email_view" class="email_viewH" rowspan="4">
                    <label>Dame tu correo </label>
                  <input type="text" name="">
                  <input type="submit" value="Enviar" name="">
              </td>
            </tr>
            <tr>
              <td><?php echo utf8_encode($productos_data['titulo']); ?>
              <span class="badge badge-warning badge-pill">$<?php echo $productos_data['precio']; ?> <small>MXN</small></span>
              </td>
            </tr>
            <tr class="hidden_stuff">
              <td><?php echo $productos_data['descripcion']; ?></td>
            </tr>
            <tr class="hidden_stuff colores">
              <td>
                <div id="comprar" name="">
                  <button id="hidden_button" class="btn btn-sm" disabled>----</button>
                  <button id="buy_button" class="btn btn-sm btn-warning">
                  Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    
                  </button>
                  
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <!--<center> <button id="lorecolo" class="btn btn-primary">lore</button></center>-->

        
      </div>
      <?php 
      }//Cierre del ciclo del catalogo
       ?>
    </div>
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

<script type="text/javascript">

  $( document ).ready(function() {
    $("#buy_button").click(function(){
      $("#cat_square").toggleClass("col-md-3 col-md-6");
      $("#email_view").toggleClass("email_viewS email_viewH");
      
    });
  });
</script>


</body>
</html>
