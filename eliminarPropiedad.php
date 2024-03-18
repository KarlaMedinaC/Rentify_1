<?php 
require('conexion.php');
session_start();

$id_propiedad = $_REQUEST['id_propiedad'];

//Insertar informacion de la imagen en la base de datos
$eliminar = "DELETE FROM  imagenes WHERE id_publicacionpropiedad = '$id_propiedad'";
$eliminar3 = "DELETE FROM propiedad WHERE id_publicacionpropiedad = '$id_propiedad'";
$rta = mysqli_query($conectado, $eliminar);
$rta2 = mysqli_query($conectado, $eliminar2);
$rta3 = mysqli_query($conectado, $eliminar3);
if (!$rta && !$rta2 && !$rta3) {
    echo "<script text='text/javascript'>
            alert('!No se elimino!');
            window.location='verMisPropiedades.php';
            </script>";;
} else {
    
    echo "<script text='text/javascript'>
                window.location='verMisPropiedades.php';
                </script>";
}
mysqli_free_result($rta);
mysqli_free_result($rta2);
mysqli_free_result($rta3);



?>