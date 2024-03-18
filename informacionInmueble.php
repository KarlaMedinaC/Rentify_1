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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Estilos cuadro index kar -->

    <link href="cuadroIndex/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="cuadroIndex/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="cuadroIndex/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="cuadroIndex/assets/css/variables.css" rel="stylesheet">
    <link href="cuadroIndex/assets/css/main.css" rel="stylesheet">
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
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                        class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="index.html" class="nav-link">Inicio</a></li>
                                    <li><a href="log.html" class="nav-link">Iniciar sesion</a></li>
                                    <li class="has-children">
                                        <a href="renta.html" class="nav-link">Departamentos</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="venta.html" class="nav-link">Venta</a></li>
                                            <li><a href="renta.html" class="nav-link">Renta</a></li>
                                            <li><a href="#" class="nav-link">Publicar Departamento</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="venta.html" class="nav-link">Casas</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="venta.html" class="nav-link">Venta</a></li>
                                            <li><a href="renta.html" class="nav-link">Renta</a></li>
                                            <li><a href="#" class="nav-link">Publicar Casa</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html" class="nav-link">¿Quienes somos?</a></li>
                                    <li><a href="contacto.html" class="nav-link">Contacto</a></li>
                                    <li>
                                        <div class="input-group rounded">
                                            <input type="search" class="form-control rounded" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />

                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="contenedor head">
            <img src="img/logo.png">
            <div class="letras">
                <p class="colorLetraLema">Abriendo las puertas hacia un mundo de posibilidades inmobiliarias</p>
            </div>

        </div>

    </header>
    <main>
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="cuadroIndex/assets/img/portfolio/app-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="cuadroIndex/assets/img/portfolio/product-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="cuadroIndex/assets/img/portfolio/branding-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="cuadroIndex/assets/img/portfolio/books-1.jpg" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web design</li>
                                <li><strong>Client</strong>: ASU Company</li>
                                <li><strong>Project date</strong>: 01 March, 2020</li>
                                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi
                                labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque
                                itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur
                                dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
        <footer class="footer-07">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12 text-center">
                        <h2 class="footer-heading"><a href="#" class="logo">Rentify</a></h2>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="https://twitter.com/Rentity10" target="_blank" data-toggle="tooltip" data-placement="top"
                                    title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100093469331080&mibextid=ZbWKwL" target="_blank" data-toggle="tooltip" data-placement="top"
                                    title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://instagram.com/rendify10?igshid=MzNlNGNkZWQ4Mg==" target="_blank" data-toggle="tooltip" data-placement="top"
                                    title="Instagram"><span class="ion-logo-instagram"></span></a></li>
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
                            <script>document.write(new Date().getFullYear());</script> | All rights reserved
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
        <!-- Vendor JS Files -->
        <script src="cuadroIndex/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="cuadroIndex/assets/vendor/aos/aos.js"></script>
        <script src="cuadroIndex/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="cuadroIndex/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="cuadroIndex/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="cuadroIndex/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="cuadroIndex/assets/js/main.js"></script>
    </main>
</body>

</html>