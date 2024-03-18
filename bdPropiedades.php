<?php
require('conexion.php');
date_default_timezone_set('UTC');
date_default_timezone_set('America/Los_Angeles');
$ran_id = rand(time(), 100000000);
$operacion = $_POST["operacion"];
$inmueble = $_POST["inmueble"];
$direccion = $_POST["direccion"];
$recamaras = $_POST["recamaras"];
$banos = $_POST["banos"];
$status = $_POST["status"];
$estacionamiento = $_POST["estacionamiento"];
$m2construccion = $_POST["m2construccion"];
$m2terreno = $_POST["m2terreno"];
$niveles = $_POST["niveles"];
$precio = $_POST["precio"];
$servicios = $_POST["servicios"];
$descripcion = $_POST["descripcion"];
$id_propietario = $_POST["id_propietario"];
$img_principal = $_FILES["img_principal"]["name"];
if (isset($_POST['subir'])) {
    echo "<pre>";
    var_dump($_FILES['imagenes']['name']);
    echo "</pre>";
}

//Verfica si existe el directorio
$dirLocal = 'imagenesInms';
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir = opendir($dirLocal);

//insertar
if (isset($img_principal) && $img_principal != "") {
    $tipoI = $_FILES['img_principal']['type'];

    if (strlen($_FILES['img_principal']['name'] > 1)) {
        $fileName = $_FILES['img_principal']['name'];
        $sourceImagen = $_FILES['img_principal']['tmp_name'];
        $tamanoImagen = $_FILES['img_principal']['size'];

            //renombrando cada foto

            $nuevoNombre = substr(md5(uniqid(rand())), 0, 15);
            $file = new SplFileInfo($fileName);
            $extension = $file->getExtension();
            $nombreImagen = $nuevoNombre . '.' . $extension;

            //Insertar informacion de la imagen en la base de datos
            $insertar = "INSERT INTO `propiedad` (`id_publicacionpropiedad`, `id_propietario`, `operacion`, `inmueble`, `direccion`, `recamaras`, `banos`, `estacionamiento`, `m2construccion`, `m2terreno`, `niveles`, `precio`, `servicios`, `descripcion`, `img_principal`, `status`) 
                    VALUES ('$ran_id', '$id_propietario', '$operacion', '$inmueble', '$direccion', '$recamaras', '$banos', '$estacionamiento', '$m2construccion', '$m2terreno', '$niveles', '$precio', '$servicios', '$descripcion', '$nombreImagen','$status')";
            $rta = mysqli_query($conectado, $insertar);


            if (!$rta) {
                echo "<script text='text/javascript'>
                        alert('!No se inserto!');
                        window.location='completar_propiedades.php';
                        </script>";
            } else {
                //Mover archivo a una ubicación permanente
                $resultadoImagen = $dirLocal . '/' . $nombreImagen;
                move_uploaded_file($sourceImagen, $resultadoImagen);
                echo "<script text='text/javascript'>
                            window.location='imagenes_propiedad.php?id_propiedad=$ran_id';
                            </script>";
                $insercion_img = "INSERT INTO imagenes(img_frente, id_publicacionpropiedad)VALUES('$nombreImagen', '$ran_id')";
                mysqli_query($conectado, $insercion_img);
            }
            mysqli_free_result($rta);
    }
}

mysqli_close($conectado);
