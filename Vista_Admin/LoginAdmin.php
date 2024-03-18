<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "rentify";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Error al conectar a la base de datos: " . $conn->connect_error);
            }

            $username = $_POST["username"];
            $password = $_POST["password"];

            // Consulta SQL para verificar las credenciales del administrador
            $sql = "SELECT * FROM administradores WHERE Usuario = '$username' AND Contrasena = '$password'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // Credenciales válidas, iniciar sesión
                session_start();
                $_SESSION["username"] = $username;
                header("Location: AdmiAgregar.php"); // Redirigir al panel del administrador
                exit();
            } else {
                $error = "Credenciales inválidas, por favor intente nuevamente.";
            }

            $conn->close();
        }
        ?>
        <?php if (isset($error)) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión </title>
   
    <!-- Font Icon -->
    <link rel="stylesheet" href="../logNew/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../logNew/style.css">
    

     <!-- estilos menu -->
     <link rel="stylesheet" href="../menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../menuR/css/style.css">
    <link rel="stylesheet" href="../menuR/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../footer/css/ionicons.min.css">
    <link rel="stylesheet" href="../footer/css/style.css">
    <link rel="stylesheet" href="../validaciones/valirContacto/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
            <div class="container2">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="../index.php">Rentify</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="../index.php" class="nav-link">Inicio</a></li>
                                    <li class="has-children">
                                        <a href="rentaDepa.php" class="nav-link">Departamentos</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="../ventaDepa.php" class="nav-link">Venta</a></li>
                                            <li><a href="../rentaDepa.php" class="nav-link">Renta</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="ventaCasa.php" class="nav-link">Casas</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="../ventaCasa.php" class="nav-link">Venta</a></li>
                                            <li><a href="../RentaCasa.php" class="nav-link">Renta</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../about.php" class="nav-link">¿Quienes somos?</a></li>
                                    <li><a href="../contacto.php" class="nav-link">Contacto</a></li>
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
   
<script>
        function ComenVali() {
            var username, password;

            username = document.getElementById("username").value;
            password = document.getElementById("password").value;

            if (username === "" || password === "") {
                alert("Todos los campos son obligatorios");
                return false;
            } else if (username.length > 30) {
                alert("El nombre de usuario es muy largo");
                return false;
            } else if (password.length > 30) {
                alert("La contraseña es muy larga");
                return false;
            }
        }
    </script>


<body>
  


    <div class="container">
        <h1>Iniciar sesión </h1>
        <h3>Administrador</h3>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return validateForm()">
        <!--form bonito--->
     


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../logNew/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="../logNew.php" class="signup-image-link">Soy cliente</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Iniciar Sesión Administrador</h2>
                        
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Usuario" required />
                            </div>
                        

                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Contraseña" required />
                            </div>
                            <div class="form-group form-button">
                            <input type="submit" value="Iniciar sesión" onclick="return ComenVali()">
                            </div>
                            
                       
                    </div>
                </div>
            </div>
        </section>
        


        <!--Form bonito fin-->
        </form>
    </div>
    <br><br><br><br>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                alert("Por favor, completa todos los campos.");
                return false;
            }
        }
    </script>
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

    <script src="../js/search.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/script.js"></script>
    <script src="../menuR/js/jquery-3.3.1.min.js"></script>
    <script src="../menuR/js/main.js"></script>
    <script src="../menuR/js/jquery.sticky.js"></script>
    <script src="../menuR/js/owl.carousel.min.js"></script>
    <script src="../menuR/js/bootstrap.min.js"></script>
    <script src="../menuR/js/popper.min.js"></script>

</body>

</html>
