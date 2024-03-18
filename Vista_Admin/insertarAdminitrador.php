<?php
include("../conexionBDContacto/conexion.php");
$con=conectar();
$Usuario=$_POST['Usuario'];
$Contrasena=$_POST['Contrasena'];


$sql="INSERT INTO administradores VALUES('$id_Administrador','$Usuario','$Contrasena')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ./AdmiAgregar.php");
    
}else {
}
?>