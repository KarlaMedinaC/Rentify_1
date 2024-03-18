<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rentify</title>
  <link rel="icon" type="image/png" href="img/logo.png">
  <link rel="stylesheet" href="css/estilos.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="menuR/css/style.css">
  <link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
  <link rel="stylesheet" href="renta/css/estilos.css">
  <link rel="stylesheet" href="footer/css/ionicons.min.css">
  <link rel="stylesheet" href="footer/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Bootstrap CSS -->


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
                  <li class="active"><a href="index.php#cta" class="nav-link">Inicio</a></li>
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
                  <li><a href="about.php#about" class="nav-link">¿Quienes somos?</a></li>
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


  

    </div>

  </header>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page">Propiedades en venta</li>
    </ol>
  </nav>

  <br><br>
  <!-- Team Start -->
  <section class="room top" id="room">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h2>Departamentos en Venta</h2>
          <h5>Escoje tu mejor opción </h5>
        </div>

      </div>

      <div class="content grid">
        <?php
        include 'conexion.php';
        $sql = "SELECT propiedad.*, imagenes.*
         FROM propiedad INNER JOIN imagenes ON propiedad.id_publicacionpropiedad = imagenes.id_publicacionpropiedad
              WHERE propiedad.operacion = 'vender' AND propiedad.inmueble = 'departamento' AND imagenes.img_cocina !='' AND 
              propiedad.status = 'Aprobado'";
        $resultado = $conectado->query($sql);
        while ($fila = $resultado->fetch_assoc()) { ?>
          <div class="box">
            <div class="img">
              <img src="imagenesInms/<?php echo $fila['img_principal'] ?>" alt="">
            </div>
            <div class="text">
              <?php
              ?>
              <h3>Departamento en venta</h3>
              <p>Descripción</p>
              <ul>
                <li><?php echo $fila['recamaras'] ?> Recámaras</li>
                <li><?php echo $fila['banos'] ?> Baños completos</li>
                <li><?php echo $fila['m2construccion']  ?> m² de Terreno</li>
                <li><?php echo $fila['estacionamiento'] ?> Espacios de estacionamiento</li>
                <li><?php echo $fila['m2terreno'] ?> m² de Construcción</li>
              </ul>
              <br>
              <br>
              <br>
              <p><span>$</span><?php echo $fila['precio'] ?> <span></span></p>

              <br>
              <!--Boton-->
              <div class="boton-modal">
                <a href="logNew.php" class="btn1">
                  <label for="btn-modal">
                    Obtener mas Información
                  </label>
                </a>
              </div>
            </div>
          </div><?php } ?>
      </div>
    </div>
  </section>
  <!-- Team End -->

  <br>
  <br>

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
    <script src="js/main.js"></script>
    <script src="js/menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="carrusel/js/jquery.validate.min.js"></script>
    <script src="carrusel/jquery.min.js"></script>
    <script src="carrusel/js/popper.js"></script>
    <script src="carrusel/js/bootstrap.min.js"></script>
    <script src="carrusel/js/owl.carousel.min.js"></script>
    <script src="carrusel/js/main.js"></script>
    <script src="menuR/js/jquery-3.3.1.min.js"></script>
    <script src="menuR/js/main.js"></script>
    <script src="menuR/js/jquery.sticky.js"></script>
    <script src="menuR/js/owl.carousel.min.js"></script>
    <script src="menuR/js/bootstrap.min.js"></script>
    <script src="menuR/js/popper.min.js"></script>
  </section>

</body>

</html>