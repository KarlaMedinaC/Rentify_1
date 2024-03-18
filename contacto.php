<!DOCTYPE html>
<html lang="en">
<?php
include(".//conexionBDContacto/conexion.php");

$con = conectar();

$sql = "SELECT * FROM contactorentify";
$query = mysqli_query($con, $sql);
?>

<script>
    function ComenVali() {
        var nombre, email, subject, message;

        nombre = document.getElementById("name").value;
        email = document.getElementById("email").value;
        subject = document.getElementById("subject").value;
        message = document.getElementById("message").value;

        expresion = /\w+@\w+\.+[a-z]/;



        if (nombre === "" || email === "" || subject === "" || message === "") {
            alert("Todos los campos son obligatorios");
            return false;
        } else if (nombre.length > 30) {
            alert("El nombre es muy largo");
            return false;
        } else if (!expresion.test(email)) {
            alert("El correo no es valido");
            return false;
        } else if (subject.length > 30) {
            alert("El nombre es muy largo");
            return false;
        } else if (message.length < 10) {
            alert("Tu comentari es muy corto");
            return false;
        }

    }
</script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="contact/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- estilos menu -->
    <link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="footer/css/ionicons.min.css">
    <link rel="stylesheet" href="footer/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contacto</li>
        </ol>
    </nav>
    <section class="ftco-section" id="contactos">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3>Contactanos</h3>
                                    <p class="mb-4">Llena el formulario y uno de nuestros asesores se pondrá en contacto
                                        contigo lo más pronto posible.</p>



                                    <form action="./conexionBDContacto/Mensaje.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="form-control" name="subject" id="subject">

                                                        <option value="">Seleccionar Interés</option>
                                                        <option value="reclamo">Reclamo</option>
                                                        <option value="felicitacion">Felicitación</option>
                                                        <option value="consulta">Consulta</option>
                                                        <option value="sugerencia">Sugerencia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Comentario"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Enviar mensaje" class="btn btn-primary" onclick="return ComenVali()">

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100  img">
                                    <img class="info-wrap w-100  img" src="imagenesDeptos/images/img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <section>
        <script src="js/search.js"></script>
        <script src="contact/js/jquery.min.js"></script>
        <script src="contact/js/popper.js"></script>
        <script src="contact/js/bootstrap.min.js"></script>
        <script src="contact/js/jquery.validate.min.js"></script>
        <script src="contact/js/main.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/script.js"></script>
        <script src="menuR/js/jquery-3.3.1.min.js"></script>
        <script src="menuR/js/main.js"></script>
        <script src="menuR/js/jquery.sticky.js"></script>
        <script src="menuR/js/owl.carousel.min.js"></script>
        <script src="menuR/js/bootstrap.min.js"></script>
        <script src="menuR/js/popper.min.js"></script>
    </section>
</body>

</html>