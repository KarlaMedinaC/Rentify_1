<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="icon" type="..//image/png" href="..//img/logo.png">
    <link rel="stylesheet" href="..//css/estilos.css">
    <link href='..//https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <section>
        <!-- estilos footer -->
        <link rel="stylesheet" href="..//footer/css/ionicons.min.css">
        <link rel="stylesheet" href="..//footer/css/style.css">
        <!-- estilos menu -->
        <link rel="stylesheet" href="..//menuR/css/style.css">
        <link rel="stylesheet" href="..//menuR/fonts/icomoon/style.css">


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

    </header>
    <!--Cuadro Index 1 kar -->

    <section id="cta" class="cta">
    <h1 class="p-3 mb-2 bg-dark text-white">Usuarios</h1>
    <div class="border p-5">
        <form method="GET" action="">
            <div class="form-group">
                <label for="buscarNombre">Buscar por Nombre:</label>
                <input type="text" class="form-control" id="buscarNombre" name="buscarNombre" placeholder="Ingrese el nombre">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Num.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Teléfonos</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect("localhost", "root", "", "rentify");
                
                // Verificar si se envió el formulario de búsqueda
                if (isset($_GET['buscarNombre'])) {
                    $nombre = $_GET['buscarNombre'];
                    // Consulta modificada para buscar por nombre
                    $consulta = "SELECT * FROM cliente WHERE nombre LIKE '%$nombre%'";
                } else {
                    // Consulta original sin filtro
                    $consulta = "SELECT * FROM cliente";
                }
                
                $ejecutarConsulta = mysqli_query($conexion, $consulta);
                $verFilas = mysqli_num_rows($ejecutarConsulta);
                
                if (!$ejecutarConsulta) {
                    echo "ERROR EN LA CONSULTA";
                } else {
                    if ($verFilas < 1) {
                        echo "<tr><td colspan='9'>Sin registros</td></tr>";
                    } else {
                        while ($fila = mysqli_fetch_array($ejecutarConsulta)) {
                            echo '<tr>
                                    <td>'.$fila[0].'</td>
                                    <td>'.$fila[1].'</td>
                                    <td>'.$fila[2].'</td>
                                    <td>'.$fila[3].'</td>
                                    <td>'.$fila[4].'</td>
                                    <td>'.$fila[5].'</td>
                                    <td>'.$fila[6].'</td>
                                    
                                </tr>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<script>
function eliminarCliente(id) {
    if (confirm("¿Estás seguro de que deseas eliminar este cliente?")) {
        // Realizar una petición AJAX para eliminar el cliente
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Actualizar la página o realizar alguna acción adicional después de eliminar el cliente
                location.reload(); // Actualizar la página para reflejar los cambios
            }
        };
        xhttp.open("GET", "../EliminarRegistros/eliminar_cliente.php?id=" + id, true);
        xhttp.send();
    }
}
</script>



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