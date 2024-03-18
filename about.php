<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>

    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="footer/css/ionicons.min.css">
    <link rel="stylesheet" href="footer/css/style.css">
    <!-- estilos menu -->
    <link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <header class="header" id="inicio">
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
                            <h1 class="my-0 site-logo"><a href="index.php">Rentify</a></h1>
                        </div>
                        <div class="col-10">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                        <li class="active"><a href="index.php#cta" class="nav-link">Inicio</a></li>
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
                                                <li><a href="rentaCasa.php" class="nav-link">Renta</a></li>
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
        <main>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">¿Quienes somos?</li>
                </ol>
            </nav>
            <br>
            <section id="about" class="about">
                <div class="container">

                    <div class="row content">
                        <div class="col-lg-6">
                            <h2>¿Quienes somos?</h2>
                            <h3>Rentify es una página web de venta y compra de departamentos que ofrece a los usuarios
                                la
                                posibilidad de encontrar su hogar ideal o invertir en bienes raíces. Como plataforma,
                                Rentify se
                                dedica a facilitar la conexión entre compradores y vendedores, proporcionando una amplia
                                selección
                                de propiedades en diferentes ubicaciones y rangos de precios.</h3>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <p>
                                En Rentify, nos distinguimos por nuestro compromiso con la satisfacción del cliente.
                                Nuestro
                                equipo
                                de atención al cliente está disponible para responder preguntas, brindar asistencia
                                durante
                                todo
                                el
                                proceso de compra y garantizar que la experiencia sea lo más fluida posible.
                            </p>
                            <p class="fst-italic">
                                Nuestro objetivo en Rentify es ofrecer una experiencia intuitiva y segura para aquellos
                                que
                                desean
                                encontrar su próximo departamento. Con la ayuda de herramientas y filtros avanzados, los
                                usuarios
                                pueden explorar una variedad de opciones, incluyendo detalles sobre la ubicación,
                                tamaño,
                                precio
                                y
                                características de cada propiedad.
                            </p>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= About List Section ======= -->
            <section id="about-list" class="about-list">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1">

                            <div class="icon-box mt-5">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Misión</h4>
                                <p>Nuestra misión en Rentify es facilitar el proceso de venta y renta de departamentos,
                                    brindando a
                                    nuestros usuarios una plataforma confiable y eficiente para encontrar su hogar ideal
                                    o
                                    maximizar
                                    sus inversiones inmobiliarias. Nos esforzamos por ofrecer una experiencia
                                    excepcional a
                                    través
                                    de una amplia selección de propiedades, herramientas intuitivas y un servicio al
                                    cliente
                                    de
                                    calidad.</p>
                            </div>
                            <div class="icon-box mt-5">
                                <i class='bx bx-globe-alt'></i>
                                <h4>Visión</h4>
                                <p>En Rentify, tenemos la visión de ser la plataforma líder en línea para la venta y
                                    renta
                                    de
                                    departamentos, reconocida por nuestra excelencia en servicio, innovación tecnológica
                                    y
                                    compromiso con la satisfacción del cliente. Aspiramos a ser el punto de referencia
                                    en el
                                    mercado
                                    inmobiliario, proporcionando soluciones integrales y siendo la opción preferida
                                    tanto
                                    para
                                    compradores y vendedores como para inversionistas.</p>
                            </div>
                        </div>
                        <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/about-list-img.jpg");'></div>
                    </div>

                </div>
            </section>

            <!--footer-->
            <footer class="footer-07">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-12 text-center">
                            <h2 class="footer-heading"><a href="indexLog.php" class="logo">Rentify</a></h2>
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

            <script src="js/search.js"></script>
            <script src="js/menu.js"></script>
            <script src="js/lightbox.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="menuR/js/jquery-3.3.1.min.js"></script>
            <script src="menuR/js/main.js"></script>
            <script src="menuR/js/jquery.sticky.js"></script>
            <script src="menuR/js/owl.carousel.min.js"></script>
            <script src="menuR/js/bootstrap.min.js"></script>
            <script src="menuR/js/popper.min.js"></script>

        </main>
</body>

</html>