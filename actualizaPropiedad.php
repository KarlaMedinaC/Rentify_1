<?php
require('conexion.php');
$id_publicacion = $_POST["id_propiedad"];
$id_propietario = $_POST["id_propietario"];
$operacion = $_POST["operacion"];
$inmueble = $_POST["inmueble"];
$direccion = $_POST["direccion"];
$recamaras = $_POST["recamaras"];
$banos = $_POST["banos"];
$estacionamiento = $_POST["estacionamiento"];
$m2construccion = $_POST["m2construccion"];
$m2terreno = $_POST["m2terreno"];
$niveles = $_POST["niveles"];
$precio = $_POST["precio"];
$servicios = $_POST["servicios"];
$descripcion = $_POST["descripcion"];
$img_principal = $_FILES["img_principal"]["name"];

//Verfica si existe el directorio
$dirLocal = 'imagenesInms';
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir = opendir($dirLocal);

if ($img_principal == '') {
    $sql = "UPDATE `propiedad` SET  `status`='Pendiente', `operacion`='$operacion',`inmueble`='$inmueble',`direccion`='$direccion',`recamaras`='$recamaras',`banos`='$banos'
     ,`estacionamiento`='$estacionamiento',`m2construccion`='$m2construccion',`m2terreno`='$m2terreno',`niveles`='$niveles',`precio`='$precio',`servicios`='$servicios'
     ,`descripcion`='$descripcion' WHERE  `id_publicacionpropiedad`='$id_publicacion'";
    $resultado = mysqli_query($conectado, $sql);
    if ($resultado) {
        echo '
         <script>
            alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
    } else {
        echo '
        <script>
           alert("Intentalo de nuevo, revisa la información");
           window.location = "verMisPropiedades.php";
        </script>
     ';
    }
} else {
    $img = $_FILES['img_principal']['tmp_name'];
    $consul = "SELECT * FROM propiedad WHERE id_publicacionpropiedad = '$id_publicacion'";
    $resul = mysqli_query($conectado,$consul);
    $arrastrar = mysqli_fetch_array($resul);
    unlink($dirLocal.'/'.$arrastrar['img_principal']);

    $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
    $file = new SplFileInfo($img_principal);
    $extension = $file->getExtension();
    $nombreImagen = $nuevoNombre . '.' . $extension;

    $sql = "UPDATE `propiedad` SET `operacion`='$operacion',`inmueble`='$inmueble',`direccion`='$direccion',`recamaras`='$recamaras',`banos`='$banos'
    ,`estacionamiento`='$estacionamiento',`m2construccion`='$m2construccion',`m2terreno`='$m2terreno',`niveles`='$niveles',`precio`='$precio',`servicios`='$servicios'
    ,`descripcion`='$descripcion', `img_principal`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_publicacion'";
    $resultado = mysqli_query($conectado, $sql);

    $sql2 = "UPDATE `imagenes` SET `img_frente` = '$nombreImagen' WHERE `id_publicacionpropiedad` = '$id_publicacion'";
    $resultado2 = mysqli_query($conectado, $sql2);
    if ($resultado2) {
        $resultadoImagen = $dirLocal . '/' . $nombreImagen;
        move_uploaded_file($img, $resultadoImagen);
        echo '
        <script>
           alert("Se actualizo correctamente");
           window.location = "verMisPropiedades.php";
       </script>
    ';
    } else {
        echo '
       <script>
          alert("Intentalo de nuevo, revisa la información");
          window.location = "verMisPropiedades.php";
       </script>
    ';
    }
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
