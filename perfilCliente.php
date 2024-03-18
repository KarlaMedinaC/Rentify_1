<?php
include('conexion.php');
session_start();
$id_cliente = $_SESSION['idUsuario'];

$sql = "SELECT nombre, apellidoM, apellidoP, telefono, direccion, email, contrasena FROM cliente WHERE idUsuario = '$id_cliente'";
$resultado = mysqli_query($conectado, $sql);
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Rentify</title>
    <script>
        function PropieValiA() {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="estilopubli/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="estilopubli/css/style.scss">


    <!-- estilos menu -->
    <link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="footer/css/ionicons.min.css">
    <link rel="stylesheet" href="footer/css/style.css">
    <link rel="stylesheet" href="validaciones/valirContacto/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
</head>

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
                    <h1 class="my-0 site-logo"><a href="indexLog.php">Rentify</a></h1>
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li class="active"><a href="indexLog.php" class="nav-link">Inicio</a></li>
                                <li><a href="cerrarSesion.php" class="nav-link">Cerrar sesión</a></li>
                                <li class="has-children">
                                    <a href="ventaDepaLog.php" class="nav-link">Departamentos</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="ventaDepaLog.php" class="nav-link">Venta</a></li>
                                        <li><a href="rentaDepaLog.php" class="nav-link">Renta</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="ventaCasaLog.php" class="nav-link">Casas</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="ventaCasaLog.php" class="nav-link">Venta</a></li>
                                        <li><a href="rentaCasaLog.php" class="nav-link">Renta</a></li>
                                    </ul>
                                </li>
                                <li><a href="aboutLog.php" class="nav-link">¿Quienes somos?</a></li>
                                <li><a href="contactoLog.php" class="nav-link">Contacto</a></li>
                                <li><a href="perfilCliente.php" class="nav-link">Perfil</a></li>
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

<body class="sa">

    <div>
        <?php while ($fila = $resultado->fetch_assoc()) {

            $nombre = $fila['nombre'];
            $apellidPa = $fila['apellidoP'];
            $apellldMa = $fila['apellidoM'];
            $telefono = $fila['telefono'];
            $direccion = $fila['direccion'];
            $correo = $fila['email'];
            $contrasena = $fila['contrasena'];
        } ?>
    </div>

    <div class="inner">
        <form action="./modificarCliente.php" method="POST">
            <h3>Ver perfil</h3>
            <div class="form-wrapper">
                <label for="nombre">Nombre:</label>
                <div class="form-holder">
                    <input type="text" id="nombre" name="nombre" class="form-control" maxlength="30" value="<?php echo $nombre ?>">
                </div>

            </div>
            <div class="form-wrapper">
                </label for="apellidoPaterno">Apellido Paterno:</label>
                <div class="form-holder">
                    <input type="text" id="apellidoP" name="apellidoP" class="form-control" value="<?php echo $apellidPa ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="apellidoMaterno">Apellido Materno:</label>
                    <div class="form-holder">
                        <input type="text" id="apellidoM" name="apellidoM" class="form-control" value="<?php echo $apellldMa ?>">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="telefono">Teléfono:</label>
                    <div class="form-holder">
                        <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $telefono ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="direccion">Dirección:</label>
                    <div class="form-holder">
                        <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $direccion ?>">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="email">Correo:</label>
                    <div class="form-holder">
                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $correo ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="contrasena">Contraseña:</label>
                    <div class="form-holder">
                        <input type="password" id="contrasena" name="contrasena" class="form-control" value="<?php echo $contrasena ?>">
                    </div>
                </div>
            </div>
            <div class="form-end">
                <div class="button-holder">
                    <button type="submit" onclick="return PropieValiA()">Actualizar</button>
                </div>
            </div>

        </form>
    </div>

    <br><br><br>

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
    <script src="js/script.js"></script>
    <script src="menuR/js/jquery-3.3.1.min.js"></script>
    <script src="menuR/js/main.js"></script>
    <script src="menuR/js/jquery.sticky.js"></script>
    <script src="menuR/js/owl.carousel.min.js"></script>
    <script src="menuR/js/bootstrap.min.js"></script>
    <script src="menuR/js/popper.min.js"></script>

</body>

</html>