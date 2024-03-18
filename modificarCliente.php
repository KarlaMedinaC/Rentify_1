<?php
require('conexion.php');
session_start();
$id_cliente = $_SESSION['idUsuario'];
$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];

$sql = "UPDATE cliente SET nombre = '$nombre', apellidoM = '$apellidoM', apellidoP = '$apellidoP',
 telefono = '$telefono', direccion = '$direccion', email = '$correo', contrasena = '$contrasena' WHERE idUsuario = '$id_cliente'";
$resultado = mysqli_query($conectado, $sql);
if($resultado){
    echo '
        <script>
            alert("Se actualizo correctamente");
            window.location = "perfilCliente.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, revisa la información");
        </script>
    ';
}