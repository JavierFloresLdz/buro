<?php

include("conexion.php");
$con = conectar();

$correo = $_POST['email'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$ingreso = $_POST['ingreso'];
$password = $_POST['psw'];

$sql = "UPDATE datos_usuario SET  nombre='$nombre',celular='$celular',ingreso='$ingreso',password='$password' WHERE email='$correo'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: user_panel.php");
}
