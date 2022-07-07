<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Consulta tu buró de crédito GRATIS - Rocket</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
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
    <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-8 bg-light text-black cinta1">
      <button type="button" style="padding-top: 2.5%; margin-left:10%; background-color: transparent; border: transparent;"><img src="img/rocket.png" alt=""></button>

    </div>
    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-1 bg-light text-white">
      <center><a href="correo.php"><button type="button" style="font-size: small; margin-top: 15%; border: transparent; color: slateblue;" class="btn btn-outline-primary" data-ripple-color="light">Iniciar sesión</button></a></center>
    </div>
    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 bg-light text-white">
      <center><a href="correo.php"><button type="button" style="margin-top: 7%; margin-right: 30%; background-color: slateblue;" class="btn btn-primary" data-ripple-color="light">Comienza ahora, es gratis</button></a></center>
    </div>
  </div>

  <center>
    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding-top: 6%; background-color:lightgray;">

        <?php
        require_once 'cnn.php';
        ?>

        <!--/.Card -->
        <?php
        $sql = "SELECT * FROM datos_usuario";
        $query = $cnnPDO->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
          foreach ($results as $result) {
            echo "<div class='container col-xl-4'>
                                <div class='width=33.3%'>
                                <div class='row'>
                                <div class='card'>
                                <center><div class='card-body'>
                                
                                <p> 
                                " . $result->nombre . "<br>
                                " . $result->email . "<br>
                                " . $result->celular . "<br>
                                " . $result->ingreso . "
                                </p>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                ";
          }
        }
        ?>
      </div>
    </div>
  </center>




  <!-- End your project here-->
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>