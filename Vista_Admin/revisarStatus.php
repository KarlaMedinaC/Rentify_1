<?php
include('../conexion.php');
$id_propiedad = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- estilos menu -->
    <link rel="stylesheet" href="..//menuR/css/style.css">
    <link rel="stylesheet" href="..//menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../carrusels/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
</head>

<body>
    <header class="header" id="inicio">
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
                        <h1 class="my-0 site-logo"><a href="index.html">Rentify</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="./AdmiAgregar.php" class="nav-link">Administrador</a></li>
                                    <li><a href="./propietarios.php" class="nav-link">Propietarios</a></li>
                                    <li><a href="./membresia.php" class="nav-link">membresias</a></li>
                                    <li><a href="./propiedades.php" class="nav-link">Propiedades</a></li>
                                    <li><a href="./usuarios.php" class="nav-link">Usuarios</a></li>
                                    <li><a href="./comentario.php" class="nav-link">Comentario De Usuarios</a></li>
                                    <li><a href="../cerrarSesion.php" class="nav-link">Cerrar sesión</a></li>
                                    <!-- <div class="input-group rounded">
                                            <input type="search" class="form-control rounded" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />

                                        </div>-->
                                </ul>


                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <!-- Team Start -->
        <section class="room top" id="room">
            <div class="container">
                <div class="heading_top flex1">
                    <div class="heading">

                        <h2></h2>
                        <?php
                        $sql = "SELECT * FROM propiedad WHERE id_publicacionpropiedad = '$id_propiedad'";
                        $sql2 = "SELECT * FROM imagenes WHERE id_publicacionpropiedad= '$id_propiedad'";


                        $resultado = mysqli_query($conectado, $sql);
                        $resultado2 = mysqli_query($conectado, $sql2);
                        while ($fila = $resultado->fetch_assoc()) {
                            while ($fila2 = $resultado2->fetch_assoc()) { ?>
                                <h1>Detalles del Inmueble</h1>
                                <h2></h2>
                                <div class="d-flex justify-content-evenly press">
                                    <div class="container-carousel">
                                        <div class="carruseles" id="slider">
                                            <section class="slider-section">
                                                <img src="../imagenesInms/<?php echo $fila2['img_frente'] ?>">
                                            </section>
                                            <section class="slider-section">
                                                <img src="../imagenesInms/<?php echo $fila2['img_recamaras'] ?>">
                                            </section>
                                            <section class="slider-section">
                                                <img src="../imagenesInms/<?php echo $fila2['img_sala'] ?>">
                                            </section>
                                            <section class="slider-section">
                                                <img src="../imagenesInms/<?php echo $fila2['img_cocina'] ?>">
                                            </section>
                                            <section class="slider-section">
                                                <img src="../imagenesInms/<?php echo $fila2['img_bano'] ?>">
                                            </section>
                                            <section class="slider-section">
                                                <img src="../imagenesInms/<?php echo $fila2['img_patio'] ?>">
                                            </section>
                                            <section class="slider-section">
                                                <img src="../imagenesInms/<?php echo $fila2['img_comedor'] ?>">
                                            </section>
                                        </div>
                                        <div class="btn-left"><i class='bx bx-chevron-left'></i></div>
                                        <div class="btn-right"><i class='bx bx-chevron-right'></i></div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="desccripcion">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Descripción: <?php echo $fila['descripcion'] ?></li>
                                        <li><b>Precio: $<?php echo $fila['precio'] ?></b></li>
                                        <li><b>Terreno:</b> <?php echo $fila['m2terreno'] ?>m²</li>
                                        <li><b>Contrucción:</b> <?php echo $fila['m2construccion'] ?>m²</li>
                                        <li><b>Recámaras: </b><?php echo $fila['recamaras'] ?></li>
                                        <li><b>Baños:</b> <?php echo $fila['banos'] ?></li>
                                        <li><b>Direccion:</b> <?php echo $fila['direccion'] ?></li>
                                        <li>Servicios</li>
                                        <li><?php echo $fila['servicios'] ?></li>
                                    </ul>
                                    <!--Boton-->
                                    <div class="boton-modal">
                                        <a href="propiedadesPendi.php" class="a">
                                            <label for="btn-modal">
                                                Cancelar
                                            </label>
                                        </a>
                                        <a href="aprobado.php?id_propiedad=<?php echo $id_propiedad ?>" class="a">
                                            <label for="btn-modal">
                                                Aprobar
                                            </label>
                                        </a>
                                    </div>
                                </div>

                        <?php }
                        } ?>
                    </div>

                </div>
            </div>

            </div>

            </div>
            </div>
        </section>
        <!-- Team End -->

        
        <script>
            const btnLeft = document.querySelector(".btn-left"),
                btnRight = document.querySelector(".btn-right"),
                slider = document.querySelector("#slider"),
                sliderSection = document.querySelectorAll(".slider-section");


            btnLeft.addEventListener("click", e => moveToLeft())
            btnRight.addEventListener("click", e => moveToRight())

            setInterval(() => {
                moveToRight()
            }, 3000);


            let operacion = 0,
                counter = 0,
                widthImg = 100 / sliderSection.length;

            function moveToRight() {
                if (counter >= sliderSection.length - 1) {
                    counter = 0;
                    operacion = 0;
                    slider.style.transform = `translate(-${operacion}%)`;
                    slider.style.transition = "none";
                    return;
                }
                counter++;
                operacion = operacion + widthImg;
                slider.style.transform = `translate(-${operacion}%)`;
                slider.style.transition = "all ease .6s"

            }

            function moveToLeft() {
                counter--;
                if (counter < 0) {
                    counter = sliderSection.length - 1;
                    operacion = widthImg * (sliderSection.length - 1)
                    slider.style.transform = `translate(-${operacion}%)`;
                    slider.style.transition = "none";
                    return;
                }
                operacion = operacion - widthImg;
                slider.style.transform = `translate(-${operacion}%)`;
                slider.style.transition = "all ease .6s"


            }
        </script>

        <section>
            <script src="../js/search.js"></script>
            <script src="../js/main.js"></script>
            <script src="../js/menu.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="../carrusel/js/jquery.validate.min.js"></script>
            <script src="../carrusel/jquery.min.js"></script>
            <script src="../carrusel/js/popper.js"></script>
            <script src="../carrusel/js/bootstrap.min.js"></script>
            <script src="../carrusel/js/owl.carousel.min.js"></script>
            <script src="../carrusel/js/main.js"></script>
            <script src="../menuR/js/jquery-3.3.1.min.js"></script>
            <script src="../menuR/js/main.js"></script>
            <script src="../menuR/js/jquery.sticky.js"></script>
            <script src="../menuR/js/owl.carousel.min.js"></script>
            <script src="../menuR/js/bootstrap.min.js"></script>
            <script src="../menuR/js/popper.min.js"></script>
        </section>

</body>

</html>