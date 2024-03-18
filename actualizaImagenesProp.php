<?php
require('conexion.php');
$id_pro = $_POST["id_propiedad"];
$img_cocina = $_FILES["img_cocina"]["name"];
$img_recamaras = $_FILES["img_recamaras"]["name"];
$img_bano = $_FILES["img_bano"]["name"];
$img_patio = $_FILES["img_patio"]["name"];
$img_sala = $_FILES["img_sala"]["name"];
$img_comedor = $_FILES["img_comedor"]["name"];
$img_frente = $_FILES["img_frente"]["name"];


$tipoI = $_FILES['img_cocina']['type'];
$temp = $_FILES['img_cocina']['tmp_name'];
$tipoI1 = $_FILES['img_recamaras']['type'];
$temp1 = $_FILES['img_recamaras']['tmp_name'];
$tipoI2 = $_FILES['img_bano']['type'];
$temp2 = $_FILES['img_bano']['tmp_name'];
$tipoI3 = $_FILES['img_patio']['type'];
$temp3 = $_FILES['img_patio']['tmp_name'];
$tipoI4 = $_FILES['img_sala']['type'];
$temp4 = $_FILES['img_sala']['tmp_name'];
$tipoI5 = $_FILES['img_comedor']['type'];
$temp5 = $_FILES['img_comedor']['tmp_name'];
$tipoI6 = $_FILES['img_frente']['type'];
$temp6 = $_FILES['img_frente']['tmp_name'];

//Verfica si existe el directorio
$dirLocal = 'imagenesInms';
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir = opendir($dirLocal);

if (!(strpos($tipoI, 'jpg') || strpos($tipoI, 'png') || strpos($tipoI, 'jpeg')) && !(strpos($tipoI1, 'jpg') || strpos($tipoI1, 'png') || strpos($tipoI1, 'jpeg')) && !(strpos($tipoI2, 'jpg') || strpos($tipoI2, 'png') || strpos($tipoI2, 'jpeg')) && !(strpos($tipoI3, 'jpg') || strpos($tipoI3, 'png') || strpos($tipoI3, 'jpeg')) && !(strpos($tipoI4, 'jpg') || strpos($tipoI4, 'png') || strpos($tipoI4, 'jpeg')) && !(strpos($tipoI5, 'jpg') || strpos($tipoI5, 'png') || strpos($tipoI5, 'jpeg')) && !(strpos($tipoI6, 'jpg') || strpos($tipoI6, 'png') || strpos($tipoI6, 'jpeg'))) {
    echo "<script text='text/javascript'>
                alert('!Solo se adminten imagenes en jpg y png!');
                window.location='verMisPropiedades.php';
                </script>";
} else {
    if ($img_cocina != '') {
        $consul = "SELECT * FROM imagenes WHERE id_publicacionpropiedad = '$id_pro'";
        $resul = mysqli_query($conectado, $consul);
        $arrastrar = mysqli_fetch_assoc($resul);
        unlink($dirLocal . '/' . $arrastrar['img_cocina']);

        $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
        $file = new SplFileInfo($img_cocina);
        $extension = $file->getExtension();
        $nombreImagen = $nuevoNombre . '.' . $extension;


        


        $sql = "UPDATE `imagenes` SET `img_cocina`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado = mysqli_query($conectado, $sql);

        if ($resultado) {
            $resultadoImagen = $dirLocal . '/' . $nombreImagen;
        move_uploaded_file($temp, $resultadoImagen);
            echo '
         <script>
          alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
        } else {
            echo '
        <script>
          alert("Intentalo de nuevo, revisa la información 1");
        window.location = "verMisPropiedades.php";
        </script>
    ';
        }
    }

    if ($img_recamaras != '') {
        $consul = "SELECT * FROM imagenes WHERE id_publicacionpropiedad = '$id_pro'";
        $resul = mysqli_query($conectado, $consul);
        $arrastrar = mysqli_fetch_assoc($resul);
        unlink($dirLocal . '/' . $arrastrar['img_recamara']);

        $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
        $file = new SplFileInfo($img_recamaras);
        $extension = $file->getExtension();
        $nombreImagen = $nuevoNombre . '.' . $extension;
        $sql = "UPDATE `imagenes` SET `img_recamaras`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado = mysqli_query($conectado, $sql);

        if ($resultado) {
            $resultadoImagen = $dirLocal . '/' . $nombreImagen;
            move_uploaded_file($temp1, $resultadoImagen);
            echo '
         <script>
          alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
        } else {
            echo '
        <script>
          alert("Intentalo de nuevo, revisa la información 1");
        window.location = "verMisPropiedades.php";
        </script>
    ';
        }
    }

    if ($img_bano != '') {
        $consul = "SELECT * FROM imagenes WHERE id_publicacionpropiedad = '$id_pro'";
        $resul = mysqli_query($conectado, $consul);
        $arrastrar = mysqli_fetch_assoc($resul);
        unlink($dirLocal . '/' . $arrastrar['img_bano']);

        $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
        $file = new SplFileInfo($img_bano);
        $extension = $file->getExtension();
        $nombreImagen = $nuevoNombre . '.' . $extension;
        $sql = "UPDATE `imagenes` SET `img_bano`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado = mysqli_query($conectado, $sql);

        if ($resultado) {
            $resultadoImagen = $dirLocal . '/' . $nombreImagen;
            move_uploaded_file($temp2, $resultadoImagen);
            echo '
         <script>
          alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
        } else {
            echo '
        <script>
          alert("Intentalo de nuevo, revisa la información 1");
        window.location = "verMisPropiedades.php";
        </script>
    ';
        }
    }

    if ($img_patio != '') {
        $consul = "SELECT * FROM imagenes WHERE id_publicacionpropiedad = '$id_pro'";
        $resul = mysqli_query($conectado, $consul);
        $arrastrar = mysqli_fetch_assoc($resul);
        unlink($dirLocal . '/' . $arrastrar['img_patio']);

        $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
        $file = new SplFileInfo($img_patio);
        $extension = $file->getExtension();
        $nombreImagen = $nuevoNombre . '.' . $extension;


        $sql = "UPDATE `imagenes` SET `img_patio`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado = mysqli_query($conectado, $sql);

        if ($resultado) {
            $resultadoImagen = $dirLocal . '/' . $nombreImagen;
            move_uploaded_file($temp3, $resultadoImagen);
            echo '
         <script>
          alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
        } else {
            echo '
        <script>
          alert("Intentalo de nuevo, revisa la información 1");
        window.location = "verMisPropiedades.php";
        </script>
    ';
        }
    }

    if ($img_sala != '') {
        $consul = "SELECT * FROM imagenes WHERE id_publicacionpropiedad = '$id_pro'";
        $resul = mysqli_query($conectado, $consul);
        $arrastrar = mysqli_fetch_assoc($resul);
        unlink($dirLocal . '/' . $arrastrar['img_sala']);

        $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
        $file = new SplFileInfo($img_sala);
        $extension = $file->getExtension();
        $nombreImagen = $nuevoNombre . '.' . $extension;
        $sql = "UPDATE `imagenes` SET `img_sala`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado = mysqli_query($conectado, $sql);

        if ($resultado) {
            $resultadoImagen = $dirLocal . '/' . $nombreImagen;
            move_uploaded_file($temp4, $resultadoImagen);
            echo '
         <script>
          alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
        } else {
            echo '
        <script>
          alert("Intentalo de nuevo, revisa la información 1");
        window.location = "verMisPropiedades.php";
        </script>
    ';
        }
    }

    if ($img_comedor != '') {
        $consul = "SELECT * FROM imagenes WHERE id_publicacionpropiedad = '$id_pro'";
        $resul = mysqli_query($conectado, $consul);
        $arrastrar = mysqli_fetch_assoc($resul);
        unlink($dirLocal . '/' . $arrastrar['img_comedor']);

        $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
        $file = new SplFileInfo($img_comedor);
        $extension = $file->getExtension();
        $nombreImagen = $nuevoNombre . '.' . $extension;
        $sql = "UPDATE `imagenes` SET `img_comedor`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado = mysqli_query($conectado, $sql);

        if ($resultado) {
            $resultadoImagen = $dirLocal . '/' . $nombreImagen;
            move_uploaded_file($temp5, $resultadoImagen);
            echo '
         <script>
          alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
        } else {
            echo '
        <script>
          alert("Intentalo de nuevo, revisa la información 1");
        window.location = "verMisPropiedades.php";
        </script>
    ';
        }
    }

    if ($img_frente != '') {
        $consul = "SELECT * FROM imagenes WHERE id_publicacionpropiedad = '$id_pro'";
        $resul = mysqli_query($conectado, $consul);
        $arrastrar = mysqli_fetch_assoc($resul);
        unlink($dirLocal . '/' . $arrastrar['img_frente']);

        $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
        $file = new SplFileInfo($img_frente);
        $extension = $file->getExtension();
        $nombreImagen = $nuevoNombre . '.' . $extension;
        $sql = "UPDATE `imagenes` SET `img_frente`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado = mysqli_query($conectado, $sql);

        $sql2 = "UPDATE `propiedad` SET `img_principal`='$nombreImagen' WHERE  `id_publicacionpropiedad`='$id_pro'";
        $resultado2 = mysqli_query($conectado, $sql2);

        if ($resultado) {
            $resultadoImagen = $dirLocal . '/' . $nombreImagen;
            move_uploaded_file($temp6, $resultadoImagen);
            echo '
         <script>
          alert("Se actualizo correctamente");
            window.location = "verMisPropiedades.php";
        </script>
     ';
        } else {
            echo '
        <script>
          alert("Intentalo de nuevo, revisa la información 1");
        window.location = "verMisPropiedades.php";
        </script>
    ';
        }
    }
}
/*
    //Actualiza todas *******************
    $sql = "UPDATE `imagenes` SET `img_cocina`='$img_cocina',`img_recamaras`='$img_recamaras',
    `img_bano`='$img_bano',`img_patio`='$img_patio',`img_sala`='$img_sala',`img_comedor`='$img_comedor',
    `img_frente`='$img_frente' WHERE  `id_imagenes`='$id_imagenes'";
    $resultado = mysqli_query($conectado, $sql);
    if ($resultado) {
        move_uploaded_file($temp, 'imagenesInms/' . $img_cocina);
        move_uploaded_file($temp1, 'imagenesInms/' . $img_recamaras);
        move_uploaded_file($temp2, 'imagenesInms/' . $img_bano);
        move_uploaded_file($temp3, 'imagenesInms/' . $img_patio);
        move_uploaded_file($temp4, 'imagenesInms/' . $img_sala);
        move_uploaded_file($temp5, 'imagenesInms/' . $img_comedor);
        move_uploaded_file($temp6, 'imagenesInms/' . $img_frente);
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
*/


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
