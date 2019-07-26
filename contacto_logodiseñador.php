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
    <title>Sucursales</title>
    <link rel="stylesheet" href="diseño/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="diseño/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body id="contact_body" class="index_body">
  <div class="navbar_oca fixed-top">
        <nav class="navbar bg-warning"style="height: 35px;">
            <span id="" class="navbar-brand mb-0 h1">Bonetería la comercial</span>
        </nav>
        <ul class="nav nav-pills nav-fill bg-danger">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="cat.php">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contacto.php">Sucursales</a>
          </li>
        </ul>
    </div>
  <div class="row" style="margin-top: 18vh; margin-bottom: 10vh;">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <div class="container text-white" ">

        <legend class="titulo_contacto">Sucursal matriz</legend>
        <p style="margin-left: 10px;">Federico Medrono #1595</p>
        <iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.185587386636!2d-103.31608035340793!3d20.661313545850586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b22c65c40ac9%3A0x553898df265ab714!2sCalle+Federico+Medrano+1595%2C+Maga%C3%B1a%2C+44800+Guadalajara%2C+Jal.!5e0!3m2!1ses!2smx!4v1534700338897" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p>Tel. (33) 36551420</p>
        <p>WhatsApp 3320525945</p>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <div class="container text-white">
        <legend class="titulo_contacto">Sucursal Boneta</legend>
        <p style="margin-left: 10px;">Ubicada en Calle Los Ángeles 283, Las Conchas, 44460 Guadalajara, Jal.</p>
        <iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d466.6464187565189!2d-103.3426675!3d20.6626067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b21c364aaa6f%3A0xdf44ed93167fcc2a!2sBoneteria+Boneta!5e0!3m2!1ses!2smx!4v1534700139731" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p>Tel. (33) 36551420</p>
        <p>WhatsApp 3320525945</p>

      </div>
    </div>
  </div>
  <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <center>
            <img src="diseño/img/logo_RM.png" class="contacto_logo"  >
            <legend class="titulo_contacto">Bonetería la comercial</legend>
          </center>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <div class="col-md-12">
            <table id="contactanos" class="table" >
              <tbody>
                <tr>
                  <td>
                    <form action="contacto_email.php" method="POST">
                      <div class=" form-group">
                        <label  for="comentario" class="text-white">Dudas, comentarios, quejas</label>
                        <textarea class="form-control" required placeholder="Escribenos aquí tu comentario" id="comentario" name="contacto_descripcion" rows="3"></textarea>
                      </div>
                      <div class=" form-group">
                        <label class="text-white">Introduce tu correo electronico</label>
                        <input type ="email" class="form-control form-control-sm" required name="contacto_correo" placeholder="email@email.com">
                        <small id="emailHelp" class="form-text text-white">Nunca compartiremos tu información con nadie</small>
                        <center><p><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i></p></center>
                      </div>
                      <div class="form-group"> 
                        <button type="submit" id="buy_button" class="buy_button btn btn-sm btn-warning" name="pedido">
                        Enviar <i class="fa fa-send" aria-hidden="true"></i>
                          
                        </button>
                      </div>
                    </form>
                  </td>
                </tr>                
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>


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



  </body>
  </html>
