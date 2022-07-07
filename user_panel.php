<?php
session_start();

$correo = $_SESSION['correo'];

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM datos_usuario WHERE email='$correo'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

if (isset($_POST['logout'])) {
  # code...

  session_destroy();

  header("Location:index.html");
}
?>
<!-- ACTUALIZAR -->
<?php
require_once 'cnn.php';
//Valida que el usuario hizo clik en el Boton 
if (isset($_POST['actualizar'])) {
  //Trae datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $ingreso = $_POST['ingreso'];
  $password = $_POST['psw'];

  //Validar que las cajas no esten vacias
  if (!empty($nombre) && !empty($email) && !empty($celular) && !empty($ingreso) && !empty($password)) {
    //Actualizamos los datos en la tabla de la db  
    $sql = $cnnPDO->prepare(
      'UPDATE datos_usuario SET nombre = :nombre, email = :correo, celular = :celular, ingreso = :ingreso, psw = :password WHERE email = :correo'
    );

    //Asignar las variables a los campos de la tabla
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':correo', $correo);
    $sql->bindParam(':celular', $celular);
    $sql->bindParam(':ingreso', $ingreso);
    $sql->bindParam(':password', $password);

    //Ejecutar la variable $sql
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
  }
  //header("location:index.html"); 
  header("location:index.html");
}
?>


<!-- Códigos de ELIMINAR -->

<?php
require_once 'cnn.php';
//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar'])) {
  //se guarda en las variables$us y $ps
  $correo = $_POST['email'];

  //Query de consulta
  $query = $cnnPDO->prepare('DELETE from datos_usuario WHERE email =:correo');

  //Manejo de parámetros
  $query->bindParam(':correo', $correo);

  //Execución del query
  $query->execute();

  //header("location:index.html"); 
  header("location:index.html");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Mi cuenta</title>
  <!-- MDB icon -->
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
      height: 90px;

    }
  </style>
</head>

<body>
  <!-- Start your project here-->

  <div class="row">
    <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-6 bg-light text-black cinta1">
      <button type="button" style="width: 100%; padding-top: 0%; margin-left:0%; background-color: transparent; border: transparent;"><img width="15%" style="margin-left:0%; padding-top: 0%;" src="img/logo.png" alt=""></button>
    </div>

    <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-4 bg-light text-black cinta1">
      <a href="welcome.php">
        <center>
          <form method="post"><button type="button" style="margin-top: 3.5%; margin-right: 30%; background-color: blue;" class="btn btn-primary" data-ripple-color="light">Inicio</button></form>
        </center>
      </a>
    </div>

    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 bg-light text-white">
      <center>
        <form method="post"><button type="submit" name="logout" style="margin-top: 7%; margin-right: 30%; background-color: red;" class="btn btn-primary" data-ripple-color="light">Cerrar Sesión</button></form>
      </center>
    </div>
  </div>

  <center>
    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding-top: 6%; background-color:lightblue;">

        <form action="update.php" method="POST">
          <div class="login-page">
            <div class="form">



              <table>
                <tr>
                  <td>
                    <h2 style="color: blue">Editar mis datos</h2>
                  </td>
                </tr>
                <tr>
                  <td><input style="width: 100%;" readonly type="text" name="email" placeholder="Email" value="<?php echo $_SESSION['correo'] ?>" /></td>
                </tr>
                <tr>
                  <td><input style="width: 100%;" required type="text" name="nombre" placeholder="Nombre completo" value="<?php echo $row['nombre']  ?>" /></td>
                </tr>
                <tr>
                  <td><input style="width: 100%;" required type="text" name="celular" placeholder="Número de celular" value="<?php echo $row['celular']  ?>" /></td>
                </tr>
                <tr>
                  <td><input style="width: 100%;" required type="text" name="ingreso" placeholder="Ingreso mensual" value="<?php echo $row['ingreso']  ?>" /></td>
                </tr>
                <tr>
                  <td><input style="width: 100%;" required type="text" name="psw" placeholder="Contraseña" value="<?php echo $row['password']  ?>" /></td>
                </tr>




                <tr>
                  <td><input type="submit" class="btn btn-primary btn-block" value="Actualizar"></td>
                </tr>
              </table>
        </form>

        <form method="post">
          <div class="login-page">
            <div class="form">
              <table>
                <tr>
                  <td>
                    <input readonly type="hidden" type="text" name="email" placeholder="Email" value="<?php echo $_SESSION['correo'] ?>" />
                  </td>
                </tr>
                <tr>
                  <td><a href="index.html"> <button type="submit" name="eliminar" style="background-color: #FF1744">ELIMINAR MI CUENTA</button></a></td>
                </tr>
              </table>
        </form>

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