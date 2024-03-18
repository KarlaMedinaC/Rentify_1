<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <section>
        <!-- estilos footer -->
        <link rel="stylesheet" href="footer/css/ionicons.min.css">
        <link rel="stylesheet" href="footer/css/style.css">
        <!-- estilos menu -->
        <link rel="stylesheet" href="menuR/css/style.css">
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


    <header>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="verMisPropiedades.php"></a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li><a href="./cerrarSesion.php" class="nav-link">Cerrar sesion</a></li>
								<li><a href="publicarPropiedad.php" class="nav-link">Publicar Propiedad</a></li>
                                <li><a href="verMisPropiedades.php" class="nav-link">Ver mis propiedades</a></li>
								<li><a href="perfilPropietarioNormal.php" class="nav-link">Perfil</a></li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div>


        </div>

    </header>
    <!--Cuadro Index 1 kar -->

    <section id="cta" class="cta">
    <h1 class="p-3 mb-2 bg-dark text-white">Comentarios</h1>
    <div class="border p-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Num.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Telefonos</th>
                    <th scope="col">Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Establecer la conexión a la base de datos
                $conexion = mysqli_connect("localhost", "root", "", "rentify");

                // Verificar la conexión
                if (!$conexion) {
                    die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }

                // Obtener el parámetro id de la propiedad desde la URL
                $id_propiedad = $_GET['id'];

                // Consulta SQL para obtener los comentarios de la propiedad específica
                $sql = "SELECT cliente.idUsuario, cliente.nombre, cliente.apellidoM, cliente.apellidoP, cliente.telefono, conctactopropitetario.mensaje
                        FROM cliente
                        INNER JOIN conctactopropitetario ON cliente.idUsuario = conctactopropitetario.idUsuario
                        WHERE conctactopropitetario.id_publicacionpropiedad = '$id_propiedad'";

                // Ejecutar la consulta
                $resultado = mysqli_query($conexion, $sql);

                // Comprobar si se ejecutó la consulta correctamente
                if ($resultado === false) {
                    die("Error al ejecutar la consulta: " . mysqli_error($conexion));
                }

                // Comprobar si se obtuvieron resultados
                if (mysqli_num_rows($resultado) > 0) {
                    // Imprimir filas de datos
                    $contador = 1;
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo '<tr>
                                <td>' . $contador . '</td>
                                <td>' . $fila['nombre'] . '</td>
                                <td>' . $fila['apellidoP'] . '</td>
                                <td>' . $fila['apellidoM'] . '</td>
                                <td>' . $fila['telefono'] . '</td>
                                <td>' . $fila['mensaje'] . '</td>
                              </tr>';
                        $contador++;
                    }
                } else {
                    echo '<tr><td colspan="6">No se encontraron resultados.</td></tr>';
                }

                // Cerrar la conexión a la base de datos
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
    </div>
</section>






    <!-- Termina seccion de preguntas frecuentes---------------->

    <!--footer-->



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

    </section>

    </main>

</body>

</html>