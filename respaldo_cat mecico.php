<?php 
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

  <div class="navbar_oca">
      <ul class="nav nav-pills nav-fill  fixed-top">
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
<br><br>
<div class="row">
  <div class="side_menu col-md-2">
    <div class="row">
      <div class="logo">
        <img style="width: 15vw; position: fixed; padding-left: 3vw; padding-top: 1vw" src="diseño/img/boneta.png">
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form action="category_choose.php" method="POST">
          <div class="list-group list-group-flush" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Promociones</a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Caballero</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Dama</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Infantil / Juvenil</a>
          </div>
          
        </form>
      </div>
      <br>
      <div class="col-12">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Ropa para Caballero</div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Ropa para dama</div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Ropa para dama</div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Ropa para dama</div>
        </div>
      </div>
    </div>


  </div>
  <div class="content col-md-10">
    <div class="row">
      <?php 
       ?>
      <div class="col-md-3">
        <br>
        <table class="table table-hover bg-danger cat_item" >
          <tbody>
            <tr>
              <td>
                <img src="diseño/img/caballero.jpg" class="cat_image">
              </td>
            </tr>
            <tr>
              <td>Calzoncillo para hombre MAXIMAX
              <span class="badge badge-info badge-pill">$200</span>

              </td>
            </tr>
            <tr class="hidden_stuff">
              <td>Lorem ipsum dolor sit amet brand cracler</td>
            </tr>
            <tr class="hidden_stuff colores">
              <td>
                Colores:<br>
                <span class="badge bg-warning badge-pill">  </span>
                <span class="badge bg-danger badge-pill">  </span>
                <span class="badge bg-success badge-pill">  </span>

              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
      <div class="col-md-3 col-xs-12 col-sm-6">
        <table class="table table-hover table-dark">
          
          <tbody>
            <tr>
              <td>IMAGE</td>
            </tr><tr>
              <td>Heading</td>
            </tr><tr>
              <td>Precio</td>
            </tr><tr>
              <td>Descripción</td>
            </tr><tr>
              <td>Colores</td>
            </tr>
          </tbody>
        </table>
        
      </div>
      <div class="col-md-3">
        <table class="table table-hover table-dark">
          
          <tbody>
            <tr>
              <td>IMAGE</td>
            </tr><tr>
              <td>Heading</td>
            </tr><tr>
              <td>Precio</td>
            </tr><tr>
              <td>Descripción</td>
            </tr><tr>
              <td>Colores</td>
            </tr>
          </tbody>
        </table>
        
      </div>
      <div class="col-md-3">
        <table class="table table-hover table-dark">
          
          <tbody>
            <tr>
              <td>IMAGE</td>
            </tr><tr>
              <td>Heading</td>
            </tr><tr>
              <td>Precio</td>
            </tr><tr>
              <td>Descripción</td>
            </tr><tr>
              <td>Colores</td>
            </tr>
          </tbody>
        </table>
        
      </div>
    </div>
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
    
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");

//An image to overlay
$overlay.append($image);

//Add overlay
$("body").append($overlay);

  //click the image and a scaled version of the full size image will appear
  $("#photo-gallery a").click( function(event) {
    event.preventDefault();
    var imageLocation = $(this).attr("href");

    //update overlay with the image linked in the link
    $image.attr("src", imageLocation);

    //show the overlay
    $overlay.show();
  } );

  $("#overlay").click(function() {
    $( "#overlay" ).hide();
  });

  </script>

</body>
</html>
