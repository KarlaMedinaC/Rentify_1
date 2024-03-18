<?php
// Verificar si se recibió el ID del cliente a eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validar y sanitizar el ID del cliente
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id === false || $id === null) {
        echo "ID de cliente inválido";
        exit;
    }

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "rentify");

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Preparar la consulta para eliminar el cliente (utilizando una sentencia preparada)
    $consulta = "DELETE FROM cliente WHERE idUsuario = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        // Verificar si se afectó alguna fila (si se encontró y eliminó el cliente)
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // El cliente se eliminó correctamente
            echo "El cliente se eliminó correctamente";
        } else {
            // No se encontró el cliente con el ID proporcionado
            echo "No se encontró el cliente";
        }
    } else {
        // Error al ejecutar la consulta
        echo "Error al eliminar el cliente: " . mysqli_error($conexion);
    }

    // Cerrar la declaración preparada y la conexión a la base de datos
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>
