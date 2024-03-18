<?php
// Verificar si se recibió el ID del comentario a eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validar y sanitizar el ID del comentario
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id === false || $id === null) {
        echo "ID de comentario inválido";
        exit;
    }

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "rentify");

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Preparar la consulta para eliminar el comentario (utilizando una sentencia preparada)
    $consulta = "DELETE FROM contactorentify WHERE id_contactorentify = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        // Verificar si se afectó alguna fila (si se encontró y eliminó el comentario)
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // El comentario se eliminó correctamente
            echo "El comentario se eliminó correctamente";
        } else {
            // No se encontró el comentario con el ID proporcionado
            echo "No se encontró el comentario";
        }
    } else {
        // Error al ejecutar la consulta
        echo "Error al eliminar el comentario: " . mysqli_error($conexion);
    }

    // Cerrar la declaración preparada y la conexión a la base de datos
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>
