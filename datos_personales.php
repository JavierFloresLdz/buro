<?php

    $correo_gotten=$_GET['correo'];
    $password_gotten=$_GET['psw'];
    $celular_gotten=$_GET['celular'];

    if (isset($_POST['guardar_personales'])) 
    {
        # code...

        $arrastrando_nombre=$_POST['nombre'];
        $arrastrando_primer=$_POST['primerapellido'];
        $arrastrando_segundo=$_POST['segundoapellido'];
        $arrastrando_dia=$_POST['dia'];
        $arrastrando_mes=$_POST['mes'];
        $arrastrando_año=$_POST['año'];
        $arrastrando_fecha=$arrastrando_dia.'/'.$arrastrando_mes.'/'.$arrastrando_año;


        //Validando que el correo se ingresó

        if (empty($arrastrando_nombre) or empty($arrastrando_primer) or empty($arrastrando_segundo) or empty($arrastrando_dia) or empty($arrastrando_mes) or empty($arrastrando_año)) {
            # code...

            echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem height:10%;">';
            echo '<div class="card-header">Upss!</div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Campo(s) vacio(s)</h5>';
            echo '<p class="card-text">Has dejado algun campo vacio, verificalo por favor.</p>';
            echo '</div>';
            echo '</div>';

        }else {
            # code...
            
            header("Location:domicilio.php?correo=$correo_gotten&psw=$password_gotten&celular=$celular_gotten&nombre=$arrastrando_nombre&primerapellido=$arrastrando_primer&segundoapellido=$arrastrando_segundo&fecha=$arrastrando_fecha");

        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cohete</title>
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
                    <h5 style="color: lightgray; font-size: medium; font-weight: 100;">Paso 4 de 6</h5>
                    <h2>Queremos conocerte</h2>
                    <h6 style="color:dimgray; font-size: 4vh; font-weight: 400; padding-top: 3%;">Sólo te pedimos la información mínima <br />
                        para poder consultar tu búro. ¡No te <br />
                        preocupes! Tus datos siempre estrán <br />
                        protegidos.
                    </h6>

                    <h6 style="color: dimgray; padding-right: 25%; padding-top: 4%; font-weight: 400;"> Nombre</h6>
                    <input type="text" name="nombre"  style="width: 33%;" class="form-control" placeholder="Ej. Juan Francisco" />

                    <h6 style="color: dimgray; padding-right: 25%; padding-top: 4%; font-weight: 400;">Primer apellido</h6>
                    <input type="text" name="primerapellido" style="width: 33%;" class="form-control" placeholder="Ej. Gallegos" />

                    <h6 style="color: dimgray; padding-right: 24%; padding-top: 4%; font-weight: 400;">Segundo apellido</h6>
                    <input type="text" name="segundoapellido" style="width: 33vw;" class="form-control" placeholder="Ej. Cuellar" />

                    <h6 style="color: dimgray; padding-right: 22%; padding-top: 4%; font-weight: 400;">Fecha de nacimiento</h6>
                    
                    <select class="select" name="dia" data-placeholder="Día" style="margin-right: 1%;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>

                      </select>

                      <select class="select" name="mes" data-placeholder="Mes" style="margin-right: 21%;">
                        <option value="01">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                      </select>

                      <input type="text" name="año" style="width: 100px;" class="form-control" placeholder="Ej. 1985" />
                      
                      <br>

                    <button type="submit" name="guardar_personales" style="width: 33%; margin-top: 4%; background-color: slateblue;" class="btn btn-primary" data-ripple-color="light">Continuar</button>
                    
                </div>
            </div>

        </form>
    </center>
    
    <?php
    echo $correo_gotten.' ';
    echo $password_gotten.' ';
    echo $celular_gotten.' ';
    ?>
    
</body>
</html>