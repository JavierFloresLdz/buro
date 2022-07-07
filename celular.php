<?php

session_start();

$correo = $_SESSION['correo'];
$pass = $_SESSION['psw'];

if (isset($_POST['guardar_celular'])) {
    # code...

    $cel = $_POST['celular'];
    $_SESSION['celular'] = $cel;

    //Validando que el correo se ingresó

    if (empty($cel)) {
        # code...

        echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem height:10%;">';
        echo '<div class="card-header">Upss!</div>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Número de celular incorrecto</h5>';
        echo '<p class="card-text">Por favor, escribe tu número de celular.</p>';
        echo '</div>';
        echo '</div>';
    } else {
        # code...

        header("Location:nombre.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Paso 3</title>
    <link rel="icon" href="img/favicon.png" type="image/png" />
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
            height: 11vh;

        }

        h2 {
            display: inline-block;
            color: #000;
            background: #fff;
            mix-blend-mode: multiply;
            position: relative;
        }

        h2:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, red, blue);
            mix-blend-mode: screen;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body>

    <!-- Start your project here-->

    <!-- ======================================= -->
    <!-- ENCABEZADO -->
    <!-- ======================================= -->
    <header class="container-fluid bg-dark d-flex justify-content-center">
        <p class="text-light mb-0 p2 fs-3">Registro</p>
    </header>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light text-black cinta1">
            <a href="index.html"><button type="button" style="width: 100%; padding-top: 1%; margin-left:0%; background-color: transparent; border: transparent;"><img width="6%" style="margin-left:0%; padding-top: .3%;" src="img/logo.png" alt=""></button></a>
        </div>

    </div>

    <center>

        <form method="post" action="">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light text-black cinta1">
                    <h5 style="color: blue; font-size: medium; font-weight: 100;">Paso 3 de 5</h5>
                    <h2>Para un mejor servicio</h2>
                    <h6 style="color:blue; font-size: 4vh; font-weight: 400; padding-top: 3%;">Ingresa tu número de celular</h6>
                    <h6 style="color: red; padding-right: 0%; padding-top: 4%; font-weight: 400;">Por favor ingresa tu número celular</h6>
                    <input type="number" name="celular" style="width: 33%;" class="form-control" placeholder="Número de celular" />

                    <button type="submit" name="guardar_celular" style="width: 33%; margin-top: 4%; background-color: red;" class="btn btn-primary" data-ripple-color="light">Continuar</button>

                </div>
            </div>

        </form>
    </center>



</body>

</html>