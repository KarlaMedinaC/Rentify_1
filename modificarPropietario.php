<?php
require('conexion.php');
session_start();
$id_propietario = $_SESSION['id_propietario'];
$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$curp = $_POST['curp'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];

$sql = "UPDATE propietario SET nombre = '$nombre', apellidoM = '$apellidoM', apellidoP = '$apellidoP', curp = '$curp',
 telefono = '$telefono', direccion = '$direccion', email = '$correo', contrasena = '$contrasena' WHERE id_propietario = '$id_propietario'";
$resultado = mysqli_query($conectado, $sql);
if($resultado){
    echo '
        <script>
            alert("Se actualizo correctamente");
            window.location = "perfilPropietarioNormal.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, revisa la información");
        </script>
    ';
}

