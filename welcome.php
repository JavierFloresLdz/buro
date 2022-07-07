<?php
session_start();

if (isset($_POST['logout'])) {
  # code...

  session_destroy();

  header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <title>Bienvenido</title>
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <style>
    body {
      background-color: white;

    }

    .cinta1 {
      height: 13vh;

    }
  </style>
</head>

<body>
  <!-- Start your project here-->

  <!-- ======================================= -->
  <!-- ENCABEZADO -->
  <!-- ======================================= -->
  <header class="container-fluid bg-dark d-flex justify-content-center">
    <p class="text-light mb-0 p2 fs-3">Bienvenido</p>
  </header>

  <div class="row">
    <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-6 bg-light text-black cinta1">
      <button type="button" style="width: 100%; padding-top: 0%; margin-left:0%; background-color: transparent; border: transparent;"><img width="15%" style="margin-left:0%; padding-top: 0%;" src="img/logo.png" alt=""></button>
    </div>

    <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-4 bg-light text-black cinta1">
      <a href="user_panel.php">
        <center>
          <form method="post"><button type="button" style="width: 100%; padding-top: 7%; margin-left:0%; background-color: transparent; border: transparent;"><img width="10%" style="margin-left:0%; padding-top: 0%;" src="img/perfil.png" alt=""></button>
    </div>
    </form>
    </center>
    </a>
  </div>

  <div class="position-absolute top-0 end-0 col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 bg-transparent text-white">
    <center>
      <form method="post"><button type="submit" name="logout" style="margin-top: 1%; margin-right: 3%; background-color: red;" class="btn btn-primary" data-ripple-color="light">Cerrar Sesión</button></form>
    </center>
  </div>

  <center>
    <div class="row">

      <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6" style="padding-right: 8%; background-color: lightblue;">
        <img src="img/mujer.png" alt="" class="img-fluid">
      </div>

      <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6" style="padding-top: 1%; background-color: #EF5350;">
        <h1 style="font-weight: 900; font-size:4vw; color: lightgray;">Próximamente </h1>
        <h1 style="font-weight: 900; font-size:4vw; color: lightgray;">disponible tu SCORE</h1>
        <img src="img/score.png" alt="">
      </div>

    </div>
  </center>

  <center>
    <!-- ======================================= -->
    <!-- SERVICIOS -->
    <!-- ======================================= -->
    <section class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="./img/icono1.png" alt="icono1" width="180" height="160">
          <div>
            <h3>
              Simple e intuitivo
            </h3>
            <p>
              Te hablamos con claridad sin términos complicados.
            </p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="./img/icono2.png" alt="icono1" width="180" height="160">
          <div>
            <h3>
              100% gratis SIEMPRE
            </h3>
            <p>
              Es totalmente gratis hoy y siempre.
            </p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="./img/icono3.png" alt="icono1" width="180" height="160">
          <div>
            <h3>
              Confiable
            </h3>
            <p>
              Quédate tranquilo. Te aseguramos que tu información está protegida.
            </p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="./img/icono4.png" alt="icono1" width="180" height="160">
          <div>
            <h3>
              Rápido
            </h3>
            <p>
              Consulta tu buró en minutos. Sin procesos complicados, sin largas esperas.
            </p>
          </div>
        </div>
      </div>
    </section>
  </center>

  <footer style="background-color: rgba(137, 43, 226, 0.445);" class="page-footer bg-image">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>Rocket</h3>
          <p>En Rocket te ayudamos a saber más sobre tu situación financiera a través de la consulta gratuita de tu buró de crédito</p>

        </div>
        <div class="col-lg-3 py-3">
          <h5>Rocket</h5>
          <ul class="footer-menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de nosotros</a></li>
            <li><a href="#">Unete al equipo</a></li>
            <li><a href="#">Créditos disponibles</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Legal</h5>
          <ul class="footer-menu">
            <li><a href="#">Aviso de privacidad</a></li>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Preguntas frecuentes</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <p>Más de 3,200,000 de personas no pueden estar equivocadas</p>
        </div>
      </div>
    </div>


    <p class="text-center" id="copyright">Copyright &copy; 2022. This site design and develop by <a href="https://macodeid.com/" target="_blank">Francisco Javier Flores Ledezma</a></p>
    </div>
  </footer>



  <!-- End your project here-->
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>