<?php
$conexion = mysqli_connect("localhost", "root", "", "rentify");

// Verificar si se recibió el ID del propietario a eliminar
if (isset($_GET['id'])) {
    $id_propietario = $_GET['id'];

    // Obtener las imágenes asociadas al propietario
    $consulta_imagenes = "SELECT img_cocina, img_recamaras, img_bano, img_patio, img_sala, img_comedor, img_frente FROM imagenes WHERE id_publicacionpropiedad IN (SELECT id_publicacionpropiedad FROM propiedad WHERE id_propietario = $id_propietario)";
    $ejecutarConsultaImagenes = mysqli_query($conexion, $consulta_imagenes);

    if (!$ejecutarConsultaImagenes) {
        echo "Error al obtener las imágenes: " . mysqli_error($conexion);
        exit;
    }

    // Eliminar las imágenes asociadas al propietario
    while ($filaImagen = mysqli_fetch_array($ejecutarConsultaImagenes)) {
        foreach ($filaImagen as $imagen) {
            // Eliminar el archivo de imagen si existe
            if (!empty($imagen) && file_exists($imagen)) {
                unlink($imagen);
            }
        }
    }

    // Eliminar el video asociado al propietario
    $consulta_video = "SELECT video FROM video WHERE id_publicacionpropiedad IN (SELECT id_publicacionpropiedad FROM propiedad WHERE id_propietario = $id_propietario)";
    $ejecutarConsultaVideo = mysqli_query($conexion, $consulta_video);

    if (!$ejecutarConsultaVideo) {
        echo "Error al obtener el video: " . mysqli_error($conexion);
        exit;
    }

    // Eliminar el archivo de video si existe
    if ($filaVideo = mysqli_fetch_assoc($ejecutarConsultaVideo)) {
        $video = $filaVideo['video'];
        if (!empty($video) && file_exists($video)) {
            unlink($video);
        }
    }

    // Eliminar el propietario
    $consulta_eliminar = "DELETE FROM propietario WHERE id_propietario = $id_propietario";
    $ejecutarConsultaEliminar = mysqli_query($conexion, $consulta_eliminar);

    if (!$ejecutarConsultaEliminar) {
        echo "Error al eliminar el propietario: " . mysqli_error($conexion);
        exit;
    }

    echo "Propietario eliminado correctamente";
}
?>
