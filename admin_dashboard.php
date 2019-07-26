<?php 
  include("conexion.php");
  session_start();
  if (isset($_SESSION['userauth']) && $_SESSION['userauth'] != true || !isset($_SESSION['userauth']) ) {
    header("location:index.php");
  }
  if (!isset($_SESSION['catalogo_actual'])) {
    $_SESSION['catalogo_actual'] = "promocion";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />
  <title>Admin dashboard</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body id="cat_body">
  <div class="navbar_oca fixed-top">
      <nav class="navbar bg-warning">
          <span style="height: 30px" class="navbar-brand mb-0 h1">Admin dashboard</span>
      </nav>
      <ul class="nav nav-pills nav-fill bg-danger">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="cat.php">Catalogo</a>
        </li>
      </ul>
  </div>
<!-------------->
<!-------------->
<!-------------->
<div id="cat_content" class="row">
  <div class="side_menu col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2" style="margin-top: 15vh;">
    <div class="logo">
      <img id="logo_logoRM" src="diseño/img/logo_RM.png">
    </div>
      <form id="form_form" action="admin_catalogo.php" method="POST">
        <div class=" list-group list-group-flush" id="list-tab" role="tablist">
          <legend style="width: 100%; color: white; padding-left: 5px;>Escoge un catalogo</legend>
          <hr>
          <button id="principal" type="input" name="tipo6" class="btn list-group-item text-left">
            Principal
          </button>
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
            Niños
          </button>
          <button id="tipo4" type="input" name="tipo4" class="btn list-group-item text-left">
            Escolar
          </button>
          <button id="tipo5" type="input" name="tipo5" class="btn list-group-item text-left">
            Bebés
          </button>
          <br>
          <br>
        </div>
        
      </form>
    </div>
  <div class="content col-xs-12 col-sm-6 col-md-8 col-lg-10 col-xl-10" style="margin-top: 15vh; padding-top: 10px;">
    <div class="row">
      <div class="container ">
        <legend style="width: 100%; color: white; padding-top: 50px">Catalogo <?php echo $_SESSION['catalogo_actual']; ?></legend>
        <hr>
      </div>
    </div>
    <div class="row">
      <div id="new_article" class="cat_square col-md-4 col-lg-3 col-xl-2 col-sm-6 col-xs-12">
<br>    <table class="add_new table bg-danger">
          <tbody>
            <tr>
              <td>
                <div id="add_article" name="" class="col-md-12">
                    <button id="hidden_button_new" class="btn btn-sm" disabled>----</button>
                    <button id="new_button" onclick="nuevo_articulo();" class="new_button btn btn-sm btn-warning" name="new_article">
                    Agregar articulo <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>

                </div>
              </td>
              <td id="add_form" class="email_viewH">
                <div id="add_formform" name="">
                  <form action="article_procedure.php" method="POST" enctype="multipart/form-data">
                    <legend>Agregar Articulo</legend>   
                    <hr>
                        <div class="form-group row">
                          <label for="input_title" class="col-xs-12 col-sm-12 col-md-2 col-lg-4 col-xl-4 col-form-label">Titulo</label>
                          <div class="container col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                            <input type="text" class="form-control" id="input_title" name="input_title" placeholder="Titulo">
                          </div>
                        </div>
                        <div class="form-group-file row">
                          <label for="input_image" class="col-xs-12 col-sm-12 col-md-2 col-lg-4 col-xl-4 col-form-label">Imagen</label>
                          <div class="container col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                            <input type="file" class="form-control" id="input_image" name="input_image" placeholder="Imagen">
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="input_description" class="col-xs-12 col-sm-12 col-md-2 col-lg-4 col-xl-4 col-form-label">Descripcion</label>
                            <div class="container col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                              <textarea class="form-control" required placeholder="Escribenos aquí tu comentario" id="input_description" name="input_descripcion" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                          <div id="" class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <label for="" class="col-form-label">Precio</label>
                          </div>
                          <div id="input_price" class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <input type="text" class="form-control" id="input_price" name="input_price" placeholder="000.00">
                          </div>
                          <div id="" class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <label for="" class="col-form-label">Categoría</label>
                          </div>
                          <div id="input_type" class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <select class="form-control" id="input_type" name="input_type">
                              <option>principal</option>
                              <option>promocion</option>
                              <option>caballero</option>
                              <option>dama</option>
                              <option>niños</option>
                              <option>escolar</option>
                              <option>bebés</option>
                            </select>
                          </div>
                        </div>

                        <div id="add_newitem" name="confirm_editing">
                          <button id="hidden_button" class="btn btn-sm" disabled>----</button>
                          <button id="add_newitem" class="confirm_button btn btn-sm btn-warning" name="add_newitem">
                          Agregar <i class="fa fa-check" aria-hidden="true"></i>
                          </button>                          
                        </div>
                  </form>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <!--<center> <button id="lorecolo class="btn btn-primary">lore</button></center>-->
      </div>
      <?php 
      $productos_query = "SELECT * FROM productos WHERE categoria = '{$_SESSION['catalogo_actual']}' ";
      $productos = mysqli_query($conexion,$productos_query);
      $productos_rows = mysqli_num_rows($productos);
      for ($i=0; $i < $productos_rows; $i++) { 
        $productos_data = mysqli_fetch_array($productos);
      ?>
      <div id="cat_square<?php echo $i;?>" class="cat_square col-md-4 col-lg-3 col-xl-2 col-sm-6 col-xs-12">
        <br>
        <table id="cat_item<?php echo $i;?>" class="table bg-danger cat_40vh " >
          <tbody>
            <tr>
              <td>
                <center>
                  <img src="diseño/img/<?php echo $productos_data['imagen'] ?>" class="cat_image">
                </center>
              </td>
              <td id="update_form<?php echo $i;?>" class="email_viewH">
                <div id="delete" name="">
                  <form action="article_procedure.php" method="POST" enctype="multipart/form-data">
                    <legend>Editar Articulo</legend>   
                    <hr>
                        <div class="form-group row">
                          <label for="input_title<?php echo $i ?>" class="col-xs-2 col-sm-2 col-md-2 col-lg-4 col-xl-4 col-form-label">Nuevo titulo</label>
                          <div class="container col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                            <input value="<?php echo utf8_decode($productos_data['titulo']); ?>" type="text" class="form-control" id="input_title<?php echo $i ?>" name="input_title<?php echo $i ?>" >
                          </div>
                        </div>
                        <div class="form-group-file row">
                          <label for="input_image" class="col-xs-2 col-sm-2 col-md-2 col-lg-4 col-xl-4 col-form-label">Nueva Imagen</label>
                          <div class="container col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                            <input type="file" class="form-control" id="input_image<?php echo $i ?>" name="input_image<?php echo $i ?>" placeholder="Nueva imagen">
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                          <label for="input_description" class="col-xs-2 col-sm-2 col-md-2 col-lg-4 col-xl-4 col-form-label">Nueva descripcion</label>
                          <div class="container col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                            <textarea value="echo utf8_decode($productos_data['descripcion']);" class="form-control" required placeholder="<?php echo utf8_decode($productos_data['descripcion']);?>" id="input_description<?php echo $i ?>" name="input_descripcion<?php echo $i ?>" rows="3"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input_price" class="col-xs-2 col-sm-2 col-md-2 col-lg-4 col-xl-4 col-form-label">Nuevo Precio</label>
                          <div class="container col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                            <input value="<?php echo $productos_data['precio']; ?>" type="text" class="form-control" id="input_price<?php echo $i ?>" name="input_price<?php echo $i ?>" placeholder="Nuevo precio">
                          </div>
                        </div>  
                        <div id="confirm" name="confirm_editing">
                          <input type="text" class="email_viewH" name="edit_article" value="<?php $i ?>">
                          <button id="hidden_button" class="btn btn-sm" disabled>----</button>
                          <button id="confirm_editing<?php echo $i ?>" class="confirm_button btn btn-sm btn-warning" name="confirm_editing<?php echo $i ?>">
                          Confirmar <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>                          
                        </div>
                  </form>
                </div>
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
            <tr class="hidden_stuff<?php echo $i;?>">
              <td>
                <div id="editar" name="">
                  <button id="hidden_button" class="btn btn-sm" disabled>----</button>
                  <button id="edit_button" onclick="mostrar_email(this.name);" class="edit_button btn btn-sm btn-warning" name="<?php echo  $i ?>">
                  Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  </button>
                </div>
              </td>
              <td id="email_view<?php echo $i;?>" class="email_viewH">
                <div id="delete" name="">
                  <form action="article_procedure.php" method="POST">
                    <button id="hidden_button" class="btn btn-sm" disabled>----</button>
                    <button id="delete_button" type="submit" class="delete_button btn btn-sm btn-danger" name="delete_art<?php echo  $i ?>">
                    Eliminar <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                  </form>
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
    <div class="col-xs-12 relative-bottom">
      <div class="admin">
        <form action="logout.php" method="POST">
          <button type="submit" class="btn btn-danger btn-sm">
            Salir
            <i class="fa fa-sign-out" aria-hidden="true"></i>  

          </button>
            
        </form>
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
         var element = document.getElementById('tipo4');
        element.classList.remove('active');
         var element = document.getElementById('tipo5');
        element.classList.remove('active');
        var element = document.getElementById('principal');
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
      $("#hidden_stuff"+numero).toggleClass("hidden_stuff blocked_div");
      $("#cat_item"+numero).toggleClass("cat_40vh cat_60vh");



      $("#email_view"+numero).toggleClass("email_viewS email_viewH");
      $("#update_form"+numero).toggleClass("email_viewS email_viewH");
    }
</script>
<script> 
  function nuevo_articulo(){ //Está función expande el formulario de contactar ala tienda
    $("#new_article").toggleClass("col-sm-6 col-sm-12");
    $("#new_article").toggleClass("col-md-4 col-md-12");
    $("#new_article").toggleClass("col-lg-3 col-lg-6");
    $("#new_article").toggleClass("col-xl-2 col-xl-8");
    //$("#hidden_stuff").toggleClass("hidden_stuff blocked_div");
    $("#add_form").toggleClass("email_viewS email_viewH");
    $("#new_button").toggleClass("bg-warning bg-danger");
  }
</script>

</body>
</html>
