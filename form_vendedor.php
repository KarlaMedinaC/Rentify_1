<?php
session_start();

$id_usuario = $_SESSION['idUsuario'];
$id = $_REQUEST['id_propiedad'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- estilos menu -->
    <link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="formulario/css/estilos-form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Rentify</title>
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
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="index.html">Rentify</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                                        <span class="icon-menu h3"></span>
                                    </a>
                                </div>

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
                                    <li><a href="perfilClienteNormal.php" class="nav-link">Perfil</a></li>
                                    <li>
                                        <!-- <div class="input-group rounded">
                                            <input type="search" class="form-control rounded" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />-->

                            </div>
                            </li>
                            </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>
        </header>
        <div class="contenedor head">
    <div class="contenedor-form">
        <form action="insertar_form.php" method="post" class="form" onsubmit="return validarMensaje()">
            <h2>Contactar al propietario</h2>
            <br>
            <p>
                Coloca tu mensaje y en breve el propietario se pondrá en contacto contigo <br>
                <br>
            </p>
            <label for="mensaje">Escribe tu mensaje:</label>
            
            <textarea id="mensaje" name="mensaje" class="box2 estilo-nuevo"></textarea>

            <input type="number" name="idUsuario" id="idUsuario" value="<?php echo $id_usuario; ?>" hidden>
            <input type="number" name="id_publicacionpropiedad" id="id_publicacionpropiedad" value="<?php echo $id; ?>" hidden>
            <input type="submit" value="Enviar" class="submit">
        </form>
    </div>
</div>

<script>
    function validarMensaje() {
        var mensaje = document.getElementById("mensaje").value;

        if (mensaje.trim() === "") {
            alert("No se ha el ingresado un mensaje");
            return false;
        }

        return true;
    }
</script>




    <section>
        <script src="js/search.js"></script>
        <script src="js/main.js"></script>
        <script src="js/menu.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="menuR/js/jquery-3.3.1.min.js"></script>
        <script src="menuR/js/main.js"></script>
        <script src="menuR/js/jquery.sticky.js"></script>
        <script src="menuR/js/owl.carousel.min.js"></script>
        <script src="menuR/js/bootstrap.min.js"></script>
        <script src="menuR/js/popper.min.js"></script>
    </section>

</body>

</html>