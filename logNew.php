<?php require('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rentify</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="logNew/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="logNew/style.css">

    <!-- estilos menu -->
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="footer/css/ionicons.min.css">
    <link rel="stylesheet" href="footer/css/style.css">
    <link rel="stylesheet" href="validaciones/valirContacto/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="contenedor head">
            <br><br><br><br>

        </div>

    </header>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="logNew/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="logNewPropietario.php" class="signup-image-link">Ya soy socio</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Iniciar Sesión Como Cliente</h2>
                        <form method="post" action="./bdlogin.php" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Correo" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Contraseña" required />
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="form-submit">Iniciar sesión </button>
                            </div>
                            <a href="registroCliente.php" class="signup-image-link">Registrarse</a>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <br><br><br><br>


    </div>
    <!--footer-->
    <footer class="footer-07">
        <div class="container3">
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
                        </script> | Todos los derechos reservados
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
    <script src="js/script.js"></script>
    <script src="menuR/js/jquery-3.3.1.min.js"></script>
    <script src="menuR/js/main.js"></script>
    <script src="menuR/js/jquery.sticky.js"></script>
    <script src="menuR/js/owl.carousel.min.js"></script>
    <script src="menuR/js/bootstrap.min.js"></script>
    <script src="menuR/js/popper.min.js"></script>


</body>

</html>