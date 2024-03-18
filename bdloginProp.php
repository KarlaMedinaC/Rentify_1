<?php
require('conexion.php');

$usr = $_POST["email"];
$pass = $_POST["password"];

$consulta = "SELECT * FROM `propietario` WHERE email = '$usr' and contrasena = '$pass'";
$resultado = mysqli_query($conectado, $consulta);
$filas = mysqli_fetch_array($resultado);

session_start();

if ($usr == $filas['email'] && $pass == $filas['contrasena']) {
$id_pro = $filas['id_propietario'];
$_SESSION['email'] = $filas['email'];
$_SESSION['nombre'] = $filas['nombre'];
$_SESSION['apellido'] = $filas['apellidoP'];
$_SESSION['id_propietario'] = $filas['id_propietario'];

if ($filas > 0) {
$consulta3 = "SELECT * FROM rigistromembresia WHERE id_propietario=" . $_SESSION['id_propietario'];
$resultado3 = mysqli_query($conectado, $consulta3);

/* var_dump($resultado3); */ // Mostrar el resultado de $resultado3

if ($resultado3->num_rows >=1) {
 header('location:verMisPropiedades.php'); 
} else if($resultado3->num_rows ==0){
echo "<script text='text/javascript'> alert('El usuario no tiene membresia'); </script>";
header('location:mostrarmem.php');
}
} else {
echo "<script text='text/javascript'> alert('No existe el usuario'); </script>";
header("location:logNewPropietario.php");
}
} else {
session_unset();
session_destroy();
echo "<script text='text/javascript'> alert('Usuario y/o Contraseña incorrecta.'); window.location='logNewPropietario.php'; </script>";
}

mysqli_free_result($resultado);
mysqli_close($conectado);
?>