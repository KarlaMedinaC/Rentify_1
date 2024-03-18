<?php require('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rentify</title>
    <script>
        function ClienteVali() {
            var nombre, apellidoP, apellidoM, telefono, direccion, email, contrasena;

            nombre = document.getElementById("nombre").value;
            apellidoP = document.getElementById("apellidoP").value;
            apellidoM = document.getElementById("apellidoM").value;
            telefono = document.getElementById("telefono").value;
            direccion = document.getElementById("direccion").value;
            email = document.getElementById("email").value;
            contrasena = document.getElementById("contrasena").value;

            expresion = /\w+@\w+\.+[a-z]/;



            if (nombre === "" || apellidoP === "" || apellidoM === "" || telefono === "" || direccion === "" || email === "" || contrasena === "") {
                alert("Todos los campos son obligatorios");
                return false;
            } else if (nombre.length > 30) {
                alert("El nombre es muy largo");
                return false;
            } else if (apellidoP.length > 30) {
                alert("Los apellidos son muy largos");
                return false;
            } else if (apellidoM.length > 30) {
                alert("Los apellidos son muy largos");
                return false;
            } else if (telefono.length != 10) {
                alert("Tu telefono solo deben ser 10 digitos");
                return false;
            } else if (isNaN(telefono)) {
                alert("El telefono no es valido");
                return false;
            } else if (direccion.length > 30) {
                alert("Tu dirección esta mal");
                return false;
            } else if (email.length > 100) {
                alert("El correo es muy largo");
                return false;
            } else if (!expresion.test(email)) {
                alert("El correo no es valido");
                return false;
            } else if (contrasena.length != 12) {
                alert("La contraseña deber solo 12 caracteres");
                return false;
            }
        }
    </script>

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
                                        <a href="ventaDepa.php" class="nav-link">Departamentos</a>
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
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registro Cliente</h2>
                        <form action="./bdCliente.php" method="post" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="apellidoP" id="apellidoP" placeholder="Apellido Paterno">
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="apellidoM" id="apellidoM" placeholder="Apellido Materno">
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="telefono" id="telefono" placeholder="Telefono">
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="direccion" id="direccion" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="contrasena"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="contrasena" id="contrasena" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><a href="registroPropietario.php" class="term-service">Quiero vender o poner en renta</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Registrar" onclick="return ClienteVali()">
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="logNew/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="logNew.php" class="signup-image-link">Ya soy cliente</a>
                    </div>
                </div>
            </div>
        </section>

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
    <script src="js/script.js"></script>
    <script src="menuR/js/jquery-3.3.1.min.js"></script>
    <script src="menuR/js/main.js"></script>
    <script src="menuR/js/jquery.sticky.js"></script>
    <script src="menuR/js/owl.carousel.min.js"></script>
    <script src="menuR/js/bootstrap.min.js"></script>
    <script src="menuR/js/popper.min.js"></script>

</body>

</html>