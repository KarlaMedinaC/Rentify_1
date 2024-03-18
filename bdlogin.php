<?php
require('conexion.php');
$usr = $_POST["email"];
$pass = $_POST["password"]; 

$consulta = "SELECT * FROM `cliente` WHERE email = '$usr' and contrasena = '$pass'";

$resultado = mysqli_query($conectado, $consulta);

$filas = mysqli_fetch_array($resultado);

session_start();

if ($usr == $filas['email'] && $pass == $filas['contrasena']) {

        $_SESSION['email'] = $filas['email'];
        $_SESSION['nombre'] = $filas['nombre'];
        $_SESSION['apellido'] = $filas['apellidoP'];
        $_SESSION['idUsuario'] = $filas['idUsuario'];


        header("location:indexLog.php");


} else {

    session_unset();
    session_destroy();
    echo "<script text='text/javascript'>
   alert('Usuario y/o Contraseña incorrecta.');
   window.location='logNew.php';
   </script>";

}


mysqli_free_result($resultado);
mysqli_close($conectado);
?>