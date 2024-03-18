<?php
$idUsuario = $_POST['idUsuario'];
$id_publicacionpropiedad = $_POST['id_publicacionpropiedad'];
$mensaje = $_POST['mensaje'];

include('conexion.php');

// Preparar la consulta
$sql = "INSERT INTO conctactopropitetario (idUsuario ,id_publicacionpropiedad, mensaje) VALUES ('$idUsuario', '$id_publicacionpropiedad','$mensaje')";
$stmt = mysqli_query($conectado, $sql);




    if ($stmt) {
        // Éxito
        echo '<script>';
        echo 'alert("El comentario se ha guardado correctamente.");';
        echo 'window.location.href = "ventaDepaLog.php";';
        echo '</script>';
        exit;
        // Retraso de 3 segundos
        sleep(3);
        // Redirigir a ventaDepa.php
        header("Location: ventaDepaLog.php");
        exit; // Asegurarse de que el script se detenga después de la redirección
    }
    else{
        echo 'todo salio mal';
    }



?>

