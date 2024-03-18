<?php
if (isset($_POST["buscarr"])) {
    $buscarr = $_POST["buscarr"];
    if ($buscarr == "quienes somos"|| $buscarr == "Quienes somos" || $buscarr == "Quienessomos" || $buscarr == "quienessomos") {
        header("location:about.php#about");
    }else if ($buscarr == "contacto" || $buscarr == "Contacto" || $buscarr == "contactar") {
        header("location:contacto.php#contactos");
    }else if ($buscarr == "Departamentos" || $buscarr == "departamentos" || $buscarr == "departamento" || $buscarr == "Departamento" || $buscarr == "renta departamentos" || $buscarr == "venta departamentos") {
        header("location:rentaDepa.php#room");
    } else if ($buscarr == "Casas" || $buscarr == "casas" || $buscarr == "Casa" || $buscarr == "casa" || $buscarr == "renta casas" || $buscarr == "venta casas"|| $buscarr == "renta casa" || $buscarr == "venta casa") {
        header("location:ventaCasa.php#rooms");
    }else if ($buscarr == "Como funciona" ||$buscarr == "¿Como funciona?" ||$buscarr == "¿como funciona?" ||$buscarr == "como funciona") {
        header("location:index.php#faqa");
    }else {
        header("location:index.php#cta");
    }
}
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="manifest" href="manifest.json" />

    <section>
        <!-- estilos footer -->
        <link rel="stylesheet" href="footer/css/ionicons.min.css">
        <link rel="stylesheet" href="footer/css/style.css">
        <!-- estilos menu -->
        <link rel="stylesheet" href="menuR/css/style.css">
        <link rel="stylesheet" href="logNew/style.css">
        <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">


        <!-- Bootstrap CSS Carrusel -->
        <link rel="stylesheet" href="carrusel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="carrusel/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="carrusel/css/style.css">
        <link rel="stylesheet" href="contact/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

        <!-- Estilos cuadro index kar -->

        <link href="cuadroIndex/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="cuadroIndex/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="cuadroIndex/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="cuadroIndex/assets/css/variables.css" rel="stylesheet">
        <link href="cuadroIndex/assets/css/main.css" rel="stylesheet">
    </section>
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
            <div class="container2">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="index.php">Rentify</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="index.php" class="nav-link">Inicio</a></li>
                                    <li><a href="logNew.php" class="nav-link">Iniciar sesion</a></li>
                                    <li class="has-children">
                                        <a href="rentaDepa.php" class="nav-link">Departamentos</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="ventaDepa.php" class="nav-link">Venta</a></li>
                                            <li><a href="rentaDepa.php" class="nav-link">Renta</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="ventaCasa.php" class="nav-link">Casas</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="ventaCasa.php" class="nav-link">Venta</a></li>
                                            <li><a href="RentaCasa.php" class="nav-link">Renta</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.php" class="nav-link">¿Quienes somos?</a></li>
                                    <li><a href="contacto.php" class="nav-link">Contacto</a></li>
                                    <li>
                                        <form action="index.php" method="post">
                                            <input name="buscarr" type="search" placeholder="Buscar . . .">
                                        </form>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>




    </header>
    <br><br><br>
    <!--Cuadro Index 1 kar -->

    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-out">

            <div class="row g-5">

                <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                    <h3>Bienvenido a <em>Rentify</em> </h3>
                    <p>Rentify brinda a las familias la facilidad de obtener un lugar seguro, digno y cálido para
                        vivir.
                        En un mercado tan competitivo y dinámico como el inmobiliario, tomar la decisión de comprar
                        una propiedad puede resultar abrumador. Pero ¡no te preocupes! Estamos aquí para ayudarte a
                        encontrar el hogar perfecto y convertir ese proceso en una experiencia emocionante y
                        satisfactoria.</p>
                    <a class="cta-btn align-self-start" href="about.php">¿Quiénes somos?</a>
                </div>

                <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                    <div class="img">
                        <img src="cuadroIndex/assets/img/casa.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>

        </div>
    </section>
    <main>

        <!--Carrusel-->
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section mb-5 pb-md-4">Estados donde nos encontramos</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">
                            <div class="item">
                                <div class="work">
                                    <div class="img">
                                        <img class="img" src="carrusel/images/cdmx.png" alt="">
                                        <a href="#" class="">
                                        </a>
                                    </div>
                                    <div class="text pt-3">
                                        <h3><a href="#">Ciudad de México</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img">
                                        <img class="img" src="carrusel/images/Guadalajara.jpeg" alt="">
                                        <a href="#" class="">
                                        </a>
                                    </div>
                                    <div class="text pt-3 ">
                                        <h3><a href="#">Guadalajara</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img">
                                        <img class="img" src="carrusel/images/monterrey.jpg" alt="">
                                        <a href="#" class="">
                                        </a>
                                    </div>
                                    <div class="text pt-3 ">
                                        <h3><a href="#">Nuevo León</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img">
                                        <img class="img" src="carrusel/images/chiapas.jpeg" alt="">
                                        <a href="#" class="">
                                        </a>
                                    </div>
                                    <div class="text pt-3 ">
                                        <h3><a href="#">Chiapas</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img">
                                        <img class="img" src="carrusel/images/michoacan.jpg" alt="">
                                        <a href="#" class="">
                                        </a>
                                    </div>
                                    <div class="text pt-3 ">
                                        <h3><a href="#">Michoacan</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img">
                                        <img class="img" src="carrusel/images/queretaro.jpg" alt="">
                                        <a href="#" class="">
                                        </a>
                                    </div>
                                    <div class="text pt-3 ">
                                        <h3><a href="#">Queretaro</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content px-xl-5">
                            <h3>Preguntas <strong>Frecuentes</strong></h3>
                            <p>

                            </p>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        ¿Comó funciona?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Busca tu nuevo hogar en Rentify. Entra, navega, busca y contacta con cientos de
                                        anunciantes.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        ¿Necesitas un nuevo inmueble?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Rentify puede ayudarte con la búsqueda de cualquier inmueble en venta o en renta.
                                        Gran variedad de inmuebles.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        ¿Cómo puedo obtener más información sobre una propiedad en particular?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Una vez que encuentres una propiedad de tu interés, puedes hacer clic en el
                                        listado para acceder a la página individual de la propiedad. Allí encontrarás
                                        información detallada, como descripción, características, fotografías, servicios
                                        cercanos y un formulario de #contacto del propietario.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->



                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        ¿Cuáles son los servicios que ofrecen en su página web de bienes raíces?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        En nuestra página web de bienes raíces, ofrecemos una amplia gama de servicios
                                        relacionados con la compra, venta y alquiler de propiedades.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("cuadroIndex/assets/img/services-2.jpg");'>&nbsp;</div>
                </div>

            </div>
        </section>
        <!-- Termina seccion de preguntas frecuentes---------------->
        <br><br><br><br>
        <!--footer-->
        <footer class="footer-07">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12 text-center">
                        <h2 class="footer-heading"><a href="index.php" class="logo">Rentify</a></h2>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="https://twitter.com/Rentity10" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100093469331080&mibextid=ZbWKwL" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://instagram.com/rendify10?igshid=MzNlNGNkZWQ4Mg==" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 text-center">
                        <h3 class="footer-heading logo">Contacto</h3>
                        <p class="footer-contact">Teléfono: +52 56 2076 0335</p>
                        <p class="footer-contact">Correo: rentify10@outlook.com</p>
                        <p class="footer-contact">Dirección: Universidad Tecnológica de Nezahualcóyotl, Cto.
                            Rey Nezahualcóyotl 57000, Méx.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <p class="copyright">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> | All rights reserved
                            <a href="./Vista_Admin/LoginAdmin.php" target="_blank">
                                <p>Administrador</p>
                            </a>
                            </a>
                        </p>
                        <a href="">
                            <p>Aviso de privacidad</p>
                        </a>
                    </div>
                </div>
            </div>
        </footer>


        <section>
            <script src="js/search.js"></script>
            <script src="js/main.js"></script>
            <script src="js/menu.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="carrusel/js/jquery.validate.min.js"></script>
            <script src="carrusel/jquery.min.js"></script>
            <script src="carrusel/js/popper.js"></script>
            <script src="carrusel/js/bootstrap.min.js"></script>
            <script src="carrusel/js/owl.carousel.min.js"></script>
            <script src="carrusel/js/main.js"></script>
            <script src="menuR/js/main.js"></script>
            <script src="menuR/js/jquery.sticky.js"></script>
            <script src="menuR/js/owl.carousel.min.js"></script>
            <script src="menuR/js/bootstrap.min.js"></script>
            <script src="menuR/js/popper.min.js"></script>

            <!-- Vendor JS Files -->
            <script src="cuadroIndex/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="cuadroIndex/assets/vendor/aos/aos.js"></script>
            <script src="cuadroIndex/assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="cuadroIndex/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="cuadroIndex/assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="cuadroIndex/assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="cuadroIndex/assets/js/main.js"></script>
            <script>
             navigator.serviceWorker.register("public/sw.js")
           </script>

        </section>

    </main>

</body>

</html>