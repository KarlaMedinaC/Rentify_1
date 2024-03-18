<?php
require('../conexion.php');
$id_publicacion = $_REQUEST["id_propiedad"];


$sql = "UPDATE `propiedad` SET `status`='Aprobado' WHERE  `id_publicacionpropiedad`='$id_publicacion'";
$resultado = mysqli_query($conectado, $sql);
if ($resultado) {
    echo '
         <script>
            alert("Se Aprobo la propiedad");
            window.location = "./propiedadesPendi.php";
        </script>
     ';
} else {
    echo '
        <script>
           alert("Intentalo de nuevo más tarde");
           window.location = "./propiedadesPendi.php";
        </script>
     ';
}



// $sql = "UPDATE propiedad SET `operacion` = '$operacion', `inmueble` = '$inmueble', `direccion` = '$direccion', `recamaras` = '$recamaras',
//  `banos` = '$banos', `estacionamiento` = '$estacionamiento', `m2construccion` = '$m2construccion', `m2terreno` = '$m2terreno', `niveles` = '$niveles'
//  , `precio` = '$precio', `servicios` = '$servicios', `descripcion` = '$descripcion', `img_principal` = '$img_principal'  WHERE  `id_publicacionpropiedad` = '$id_publicacionpropiedad'";
// $resultado = mysqli_query($conectado, $sql);
// if($resultado){
//     echo '
//         <script>
//             alert("Se actualizo correctamente");
//             window.location = "verMisPropiedades.php";
//         </script>
//     ';
// }else{
//     echo '
//         <script>
//             alert("Intentalo de nuevo, revisa la información");
//         </script>
//     ';
// }
