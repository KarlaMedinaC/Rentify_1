<?php
require('conexion.php');

session_start();
$id_propiedad = $_REQUEST['id'];
$id_propietario = $_SESSION['id_propietario'];
$consultaPropiedad = "SELECT propiedad.id_publicacionpropiedad, propiedad.id_propietario, propiedad.operacion,
propiedad.inmueble, propiedad.direccion,propiedad.recamaras, propiedad.banos, propiedad.estacionamiento, propiedad.m2construccion, 
propiedad.m2terreno, propiedad.niveles,propiedad.precio, propiedad.servicios, propiedad.descripcion, propiedad.img_principal, 
imagenes.img_cocina, imagenes.img_recamaras, imagenes.img_bano, imagenes.img_patio, imagenes.img_sala, imagenes.img_comedor, imagenes.img_frente
        FROM propiedad INNER JOIN imagenes ON propiedad.id_publicacionpropiedad = imagenes.id_publicacionpropiedad
        WHERE propiedad.id_propietario = '$id_propietario' AND propiedad.id_publicacionpropiedad = '$id_propiedad'";
$resultado = mysqli_query($conectado, $consultaPropiedad);

$fila = $resultado->fetch_array();
$operacion = $fila['operacion'];
$operacion2 = $fila['inmueble'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Rentify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="estilopubli/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="estilopubli/css/style.scss">
    <link rel="stylesheet" href="actualiza/css/estilos.css">


    <!-- estilos menu -->
    <link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <<script>
        function propiedadVali() {
        var direccion, recamaras, banos, m2construccion, m2terreno, estacionamiento, niveles, precio, servicios,
        descripcion;


        direccion = document.getElementById("direccion").value;
        recamaras = document.getElementById("recamaras").value;
        banos = document.getElementById("banos").value;
        m2construccion = document.getElementById("m2construccion").value;
        m2terreno = document.getElementById("m2terreno").value;
        estacionamiento = document.getElementById("estacionamiento").value;
        niveles = document.getElementById("niveles").value;
        precio = document.getElementById("precio").value;
        servicios = document.getElementById("servicios").value;
        descripcion = document.getElementById("descripcion").value;

        var fileInput = document.getElementById('img_principal');
        var filePath = fileInput.value;
        var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
        const LIMITES_IMAGENES = 7000000; // 1MB = 1 millón de bytes


        if (direccion === "" || recamaras === "" || banos === "" || m2construccion === "" || m2terreno === "" ||
        niveles === "" || precio === "" || servicios === "" || descripcion === "" || fileInput === "" || estacionamiento === "") {
        alert("Todos los campos son obligatorios");
        return false;
        } else if (direccion.length > 100) {
        alert("La dirección es muy larga");
        return false;
        } else if (recamaras.length > 11) {
        alert("Tienes un maximo de 11 recámaras");
        return false;
        } else if (isNaN(recamaras)) {
        alert("No son validos letras en el campo recámaras");
        return false;
        } else if (banos.length > 11) {
        alert("Tienes un maximo de 11 baños");
        return false;
        } else if (isNaN(banos)) {
        alert("No son validos letras en el campo baños");
        return false;
        } else if (isNaN(m2construccion)) {
        alert("No son validos letras en el campo Mt² del construcción");
        return false;
        } else if (isNaN(m2terreno)) {
        alert("No son validos letras en el campo Mt² del terreno");
        return false;
        } else if (isNaN(estacionamiento)) {
        alert("No son validos letras en el campo número de estacionamiento");
        return false;
        } else if (isNaN(niveles)) {
        alert("No son validos letras en el campo de niveles");
        return false;
        } else if (niveles.length > 11) {
        alert("Tienes un maximo de 11 pisos/niveles");
        return false;
        } else if (isNaN(precio)) {
        alert("No son válidos letras en el campo del precio de la propiedad");
        return false;
        } else if (servicios.length > 50) {
        alert("El campo servico no es válido, por favor relleno con un maximo de 50 caracteres");
        return false;
        } else if (descripcion.length > 150) {
        alert("El campo servico no es válido, por favor relleno con un maximo de 150 caracteres");
        return false;
        } else if(filePath != ''){
        if (!allowedExtensions.exec(filePath)) {
        alert('Por favor suba archivos con extension .jpeg/.jpg/.png solamente.');
        fileInput = '';
        return false;
        } else if (fileInput.files && fileInput.files[0].size > LIMITES_IMAGENES) {
        const tamanioEnMb = LIMITES_IMAGENES / 1000000;
        alert(`El tamaño máximo de la imagen es ${tamanioEnMb} MB`);
        return false;
        }
        }
        }
        </script>
</head>

<body class="sa">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <h1 class="my-0 site-logo"><a href="verMisPropiedades.php">Rentify</a></h1>
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li><a href="./cerrarSesion.php" class="nav-link">Cerrar sesion</a></li>
                                <li><a href="publicarPropiedad.php" class="nav-link">Publicar Propiedad</a></li>
                                <li><a href="verMisPropiedades.php" class="nav-link">Ver mis propiedades</a></li>
                                <li><a href="perfilPropietario.php" class="nav-link">Perfil</a></li>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="wrapper" style="background-image: url('/images/bg-registration-form-3.jpg');">
        <div class="inner">
            <form action="actualizaPropiedad.php" method="post" enctype="multipart/form-data">
                <div class="form-wrapper">
                    <label for="">Operacion:</label>
                    <div class="form-holder select">
                        <input type="text" name="id_propiedad" id="id_propiedad" value="<?php echo $id_propiedad  ?>" hidden>
                        <input type="text" name="id_propietario" id="id_propietario" value="<?php echo $id_propietario  ?>" hidden>
                        <select name="operacion" id="operacion" class="form-control">
                            <option value="vender" <?php if ($operacion == "vender") {
                                                        echo "selected";
                                                    } ?>>Vender</option>
                            <option value="rentar" <?php if ($operacion == "rentar") {
                                                        echo "selected";
                                                    } ?>>Rentar</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Inmueble:</label>
                    <div class="form-holder select">
                        <select name="inmueble" id="inmueble" class="form-control">
                            <option value="departamento" <?php if ($operacion2 == "departamento") {
                                                                echo "selected";
                                                            } ?>>Departamento</option>
                            <option value="casa" <?php if ($operacion2 == "casa") {
                                                        echo "selected";
                                                    } ?>>Casa</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Direccion:</label>
                    <div class="form-holder">
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion del Inmueble" value="<?php echo $fila['direccion'] ?>">
                    </div>
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Recamaras:</label>
                        <div class="form-holder">
                            <input type="text" name="recamaras" id="recamaras" class="form-control" placeholder="Numero de recamaras" value="<?php echo $fila['recamaras'] ?>">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Baños:</label>
                        <div class="form-holder">
                            <input type="text" name="banos" id="banos" class="form-control" placeholder="Numero de Baños" value="<?php echo $fila['banos'] ?>">
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">M2 de construccion:</label>
                        <div class="form-holder">
                            <input type="text" name="m2construccion" id="m2construccion" class="form-control" placeholder="Metros cuadrados" value="<?php echo $fila['m2construccion'] ?>">
                        </div>
                    </div>
                    <div class=" form-wrapper">
                        <label for="">M2 de terreno:</label>
                        <div class="form-holder">
                            <input type="text" name="m2terreno" id="m2terreno" class="form-control" placeholder="Metros cuadrados" value="<?php echo $fila['m2terreno'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Estacionamiento:</label>
                        <div class="form-holder">
                            <input type="text" name="estacionamiento" id="estacionamiento" class="form-control" placeholder="Numero de Estacionamientos" value="<?php echo $fila['estacionamiento'] ?>">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Niveles:</label>
                        <div class="form-holder">
                            <input type="text" name="niveles" id="niveles" class="form-control" placeholder="Numero de pisos" value="<?php echo $fila['niveles'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Precio del inmueble:</label>
                        <div class="form-holder">
                            <input type="text" name="precio" id="precio" class="form-control" placeholder=" $" value="<?php echo $fila['precio'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Imagen Principal:</label>
                    <div class="form-holder">
                        <input type="file" name="img_principal" id="img_principal" class="form-control" placeholder="" rows="4" accept="image/png,image/jpeg">
                        <img src="imagenesInms/<?php echo $fila['img_principal'] ?>" alt="">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Servicios del Inmueble:</label>
                    <div class="form-holder">
                        <input type="text" name="servicios" id="servicios" class="form-control" placeholder="" rows="4" value="<?php echo $fila['servicios'] ?>">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Descripcion Inmueble:</label>
                    <div class="form-holder">
                        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="" rows="4" value="<?php echo $fila['descripcion'] ?>">
                    </div>
                </div>

                <div class="button-holder">
                    <button onclick="return propiedadVali()">Actualizar</button>
                </div>
                <a href="editarImagenesProp.php?id_propiedad=<?php echo $fila['id_publicacionpropiedad']; ?>" class="btn1">Editar Imagenes</a>
            </form>
        </div>

        </form>
    </div>
    </div>
    <script src="js/search.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/script.js"></script>
    <script src="menuR/js/jquery-3.3.1.min.js"></script>
    <script src="menuR/js/main.js"></script>
    <script src="menuR/js/jquery.sticky.js"></script>
    <script src="menuR/js/owl.carousel.min.js"></script>
    <script src="menuR/js/bootstrap.min.js"></script>
    <script src="menuR/js/popper.min.js"></script>
    <script src="validaciones/validar.js"></script>

</body>

</html>