<?php 
  session_start();
 ?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Boneta</title>
  <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="diseño/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123951903-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123951903-1');
</script>
</head>
<body>
  <div class="navbar_oca">
        <ul class="nav nav-pills nav-fill navbar-light bg-dark">
          <li class="nav-item bg-warning text-white">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item bg-warning text-white dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catalogo</a>
            <div class="dropdown-menu">
              <a class="dropdown-item active" href="catalogo.php">Caballero</a>
              <a class="dropdown-item" href="catalogo.php">Dama</a>
              <a class="dropdown-item" href="catalogo.php">Infantil</a>
              <a class="dropdown-item" href="catalogo.php">Juvenil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Ropa de temporada</a>
            </div>
          </li>
          <li class="nav-item bg-warning text-white">
            <a class="nav-link" href="#">Cónocenos</a>
          </li>
          <li class="nav-item bg-warning text-white">
            <a class="nav-link disabled" href="#">Contacto</a>
          </li>
        </ul>
    </div>

<div class="container">
  <br>
  <h1>
    La mejor ropa para ésta temporada de calor
  </h1>
  <div class="row">
      <form action="proceso_catalogo.php" method="POST">
        <button type="submit" class="bg-warning white" name="tipo0">
          <div id="caballero_card" class="col-md-3 col-xs-12">
              <div class="card">
                <img class="card-img-top" src="diseño/img/caballero.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">La mejor ropa para caballero en ésta temporada</p>
                </div>
              </div>
          </div>
          
        </button>
      
      
          <div id="caballero_card" class="col-md-3 col-xs-12">
              <div class="card">
                <img class="card-img-top" src="diseño/img/caballero.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">La mejor ropa para caballero en ésta temporada</p>
                </div>
              <button class="btn btn-small bg-warning text-dark" type="submit" name="tipo1">Caballero</button>
              </div>
          </div>
      
      
          <div id="caballero_card" class="col-md-3 col-xs-12">
              <div class="card">
                <img class="card-img-top" src="diseño/img/caballero.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">La mejor ropa para caballero en ésta temporada</p>
                </div>
              <button class="btn btn-small bg-warning text-dark" type="submit" name="tipo2">Caballero</button>
              </div>
          </div>
      
      
        <a type="submit">
          <div id="caballero_card" class="col-md-3 col-xs-12">
              <div class="card">
                <img class="card-img-top" src="diseño/img/caballero.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">La mejor ropa para caballero en ésta temporada</p>
                </div>
              <button class="btn btn-small bg-warning text-dark" type="submit" name="tipo3">Caballero</button>
              </div>
          </div>
          
        </a>
      </form>
    </div>

    <hr>

    <?php 
        if (isset($_SESSION['catalogo_actual']) && $_SESSION['catalogo_actual'] ) {
          include("galeria.php");
          echo $_SESSION['catalogo_actual'];
        }else{
          echo "<h2>No te pierdas de nuestras increíbles promociones</h2>";

        }
     ?>

    <!--   catalogo según den clic -->




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
