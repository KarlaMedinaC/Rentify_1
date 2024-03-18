<?php
require('conexion.php');
date_default_timezone_set('UTC');
date_default_timezone_set('America/Los_Angeles');

$bandera = $_POST["bandera"];
//Verfica si existe el directorio
$dirLocal = 'imagenesInms';
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir = opendir($dirLocal);

if ($bandera == 1) {
    $id_propiedad = $_POST["idPropiedad"];
    $img_cocina = $_FILES["img_cocina"]["name"];
    $img_recamaras = $_FILES["img_recamaras"]["name"];
    $img_bano = $_FILES["img_bano"]["name"];
    $img_patio = $_FILES["img_patio"]["name"];
    $img_sala = $_FILES["img_sala"]["name"];
    $img_comedor = $_FILES["img_comedor"]["name"];

    //insertar

    if (isset($img_cocina) && $img_cocina != "" && isset($img_recamaras) && $img_recamaras != "" && isset($img_bano) && $img_bano != "" && isset($img_patio) && $img_patio != "" && isset($img_sala) && $img_sala != "" && isset($img_comedor) && $img_comedor != "") {


        $img1 = $_FILES['img_cocina']['tmp_name'];
        $img2 = $_FILES['img_recamaras']['tmp_name'];
        $img3 = $_FILES['img_bano']['tmp_name'];
        $img4 = $_FILES['img_patio']['tmp_name'];
        $img5 = $_FILES['img_sala']['tmp_name'];
        $img6 = $_FILES['img_comedor']['tmp_name'];

        //renombrando cada foto
        $nuevoNombre1 = substr(md5(uniqid(rand())), 0, 15);
        $nuevoNombre2 = substr(md5(uniqid(rand())), 0, 15);
        $nuevoNombre3 = substr(md5(uniqid(rand())), 0, 15);
        $nuevoNombre4 = substr(md5(uniqid(rand())), 0, 15);
        $nuevoNombre5 = substr(md5(uniqid(rand())), 0, 15);
        $nuevoNombre6 = substr(md5(uniqid(rand())), 0, 15);

        $file1 = new SplFileInfo($img_cocina);
        $extension1 = $file1->getExtension();
        $file2 = new SplFileInfo($img_recamaras);
        $extension2 = $file2->getExtension();
        $file3 = new SplFileInfo($img_bano);
        $extension3 = $file3->getExtension();
        $file4 = new SplFileInfo($img_patio);
        $extension4 = $file4->getExtension();
        $file5 = new SplFileInfo($img_sala);
        $extension5 = $file5->getExtension();
        $file6 = new SplFileInfo($img_comedor);
        $extension6 = $file6->getExtension();

        $nombreImagen1 = $nuevoNombre1 . '.' . $extension1;
        $nombreImagen2 = $nuevoNombre2 . '.' . $extension2;
        $nombreImagen3 = $nuevoNombre3 . '.' . $extension3;
        $nombreImagen4 = $nuevoNombre4 . '.' . $extension4;
        $nombreImagen5 = $nuevoNombre5 . '.' . $extension5;
        $nombreImagen6 = $nuevoNombre6 . '.' . $extension6;


        $actualizar = "UPDATE imagenes SET `img_cocina` = '$nombreImagen1', `img_recamaras` = '$nombreImagen2', 
            `img_bano` = '$nombreImagen3', `img_patio` = '$nombreImagen4', `img_sala` = '$nombreImagen5', `img_comedor` = '$nombreImagen6' 
             WHERE `id_publicacionpropiedad` = '$id_propiedad'";
        $rta = mysqli_query($conectado, $actualizar);

        if (!$rta) {
            echo "<script text='text/javascript'>
            alert('!No se inserto!');
            window.location='index.php';
            </script>";
        } else {
            move_uploaded_file($img1, $dirLocal.'/' . $nombreImagen1);
            move_uploaded_file($img2, $dirLocal.'/' . $nombreImagen2);
            move_uploaded_file($img3, $dirLocal.'/' . $nombreImagen3);
            move_uploaded_file($img4, $dirLocal.'/' . $nombreImagen4);
            move_uploaded_file($img5, $dirLocal.'/' . $nombreImagen5);
            move_uploaded_file($img6, $dirLocal.'/' . $nombreImagen6);
            echo "<script text='text/javascript'>
                window.location='verMisPropiedades.php';
                </script>";
        }
        mysqli_free_result($rta);
    }


    mysqli_close($conectado);
}
