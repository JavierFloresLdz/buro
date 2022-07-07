<?php
require_once 'cnn.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Datos</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Consulta tu buró de crédito GRATIS - Rocket</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/logo.png" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->

    <style type="text/css">
        body {
            background-color: lightgray;
        }

        .cinta1 {
            height: 90px;

        }

        .columna {
            width: 30%;

            float: left;

        }

        @media (max-width: 500px) {

            .columna {
                width: auto;
                float: none;
            }

        }
    </style>
</head>

<body>

    <div class="row">
        <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-8 bg-light text-black cinta1">

            <a href="index.html"><button type="button" style="margin-top: 3%; margin-left: 10%; background-color: blue;" class="btn btn-primary" data-ripple-color="light">Inicio</button></a>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-1 bg-light text-white">
            <center><a href="correo.php"><button type="button" style="font-size: small; margin-top: 15%; border: transparent; color: blue;" class="btn btn-outline-primary" data-ripple-color="light">Iniciar sesión</button></a></center>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 bg-light text-white">
            <center><a href="correo.php"><button type="button" style="margin-top: 7%; margin-right: 30%; background-color: blue;" class="btn btn-primary" data-ripple-color="light">Registrate</button></a></center>
        </div>
    </div>

    <?php
    $sql = "SELECT * FROM datos_usuario";
    $query = $cnnPDO->prepare($sql);
    $query->execute();
    $count = $query->fetchAll(PDO::FETCH_OBJ);

    if ($query->rowCount() > 0) {
        foreach ($count as $count) {

            /*
            echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem height:10%;">';
            echo '<div class="card-header"></div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Correo incorrecto</h5>';
            echo '<p class="card-text"></p>';
            echo '</div>';
            echo '</div>';
            */


            echo "<div class='container mt-3' >
			<div class='columna'>
            <div class='row'>
            <div class='card text-black mb-3' style='background-color:red;'>
            <center><div class='card-header'>
            <p>
            "
                . $count->nombre .
                "</p>
			<center><div class='card-body' style='background-color: white;'>
			<p> 
			" . $count->email . "<br>
			" . $count->celular . "<br>
			" . $count->ingreso . "
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
</body>
<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>