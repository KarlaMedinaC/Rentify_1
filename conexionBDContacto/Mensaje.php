<?php
include("conexion.php");

$con = conectar();

$nombre = $_POST['name'];
$email = $_POST['email'];
$interes = $_POST['subject'];
$comentario = $_POST['message'];

$sql = "INSERT INTO contactorentify (nombre, email, interes, comentario) VALUES ('$nombre', '$email', '$interes', '$comentario')";
$query = mysqli_query($con, $sql);

if ($query) {
        // Éxito
        echo '<script>';
        echo 'alert("El comentario se ha guardado correctamente.");';
        echo 'window.location.href = " ../contacto.php";';
        echo '</script>';
        exit;


    } else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
