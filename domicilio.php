<?php

    $correo_gotten=$_GET['correo'];
    $password_gotten=$_GET['psw'];
    $celular_gotten=$_GET['celular'];
    $nombre_gotten=$_GET['nombre'];
    $primer_gotten=$_GET['primerapellido'];
    $segundo_gotten=$_GET['segundoapellido'];
    $fecha_gotten=$_GET['fecha'];

    if (isset($_POST['guardar_personales'])) 
    {
        # code...

       $arrastrando_calle=$_POST['calle'];
       $arrastrando_postal=$_POST['postal'];
       $arrastrando_colonia=$_POST['colonia'];
       $arrastrando_municipio=$_POST['municipio'];
       $arrastrando_estado=$_POST['estado'];

        //Validando que los datos se ingresaron

        if (empty($arrastrando_calle) or empty($arrastrando_postal) or empty($arrastrando_colonia) or empty($arrastrando_municipio) or empty($arrastrando_estado)) {
            # code...

            echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem height:10%;">';
            echo '<div class="card-header">Upss!</div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Campo(s) vacio(s)</h5>';
            echo '<p class="card-text">Has dejado algun un campo vacio, verificalo por favor.</p>';
            echo '</div>';
            echo '</div>';

        }else {
            # code...

            require_once 'cnn.php';

            
            
            header("Location:index.php");

        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coehete</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <style>
         body {
            background-color:white;
            
            }
            .cinta1{
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
    background: linear-gradient(to right,cyan, purple);
    mix-blend-mode: screen; 
    position: absolute;
    top: 0;
    left: 0;
}
    </style>
</head>
<body>

    <!-- Start your project here-->

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light text-black cinta1">
            <a href="index.html"><button type="button" style="padding-top: 1%; margin-left:2%; background-color: transparent; border: transparent;"><img src="img/rocket.png" alt=""></button></a>
        </div>
        
    </div>

    <center>
       
        <form method="post" action="">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light text-black cinta1">
                    <h5 style="color: lightgray; font-size: medium; font-weight: 100;">Paso 5 de 6</h5>
                    <h2>Cuéntanos un poco más</h2>
                    <h6 style="color:dimgray; font-size: 4vh; font-weight: 400; padding-top: 3%;">Recuerda que lo que está en Rocket, se<br />
                        queda en Rocket.
                    </h6>
                    <h6 style="color: dimgray; padding-right: 25%; padding-top: 4%; font-weight: 400;">Calle y número</h6>
                    <input type="text" name="calle" style="width: 33%;" class="form-control" placeholder="Ingresa tus datos" />

                    <h6 style="color: dimgray; padding-right: 25.5%; padding-top: 4%; font-weight: 400;">Código postal</h6>
                    <input type="text" name="postal" style="width: 33%;" class="form-control" placeholder="Ingresa tus datos" />

                    <h6 style="color: dimgray; padding-right: 29%; padding-top: 4%; font-weight: 400;">Colonia</h6>
                    <input type="text" name="colonia" style="width: 33%;" class="form-control" placeholder="Ingresa tus datos" />

                    <h6 style="color: dimgray; padding-right: 22%; padding-top: 4%; font-weight: 400;">Alcaldía o Municipio</h6>
                    <input type="text" name="municipio" style="width: 33%;" class="form-control" placeholder="Ingresa tus datos" />

                    <h6 style="color: dimgray; padding-right: 29%; padding-top: 4%; font-weight: 400;">Estado</h6>
                    <input type="text" name="estado" style="width: 33%;" class="form-control" placeholder="Ingresa tus datos" />

                    <button type="submit" name="guardar_domiclio" style="width: 33%; margin-top: 4%; background-color: slateblue;" class="btn btn-primary" data-ripple-color="light">Continuar</button></a>
                    
                </div>
            </div>

        </form>
    </center>
    
    <?php
    echo $correo_gotten.' ';
    echo '<br>';
    echo $password_gotten.' ';
    echo '<br>';
    echo $celular_gotten.' ';
    echo '<br>';
    echo $nombre_gotten.' ';
    echo '<br>';
    echo $primer_gotten.' ';
    echo '<br>';
    echo $segundo_gotten.' ';
    echo '<br>';
    echo $fecha_gotten.' ';
    ?>
    
</body>
</html>