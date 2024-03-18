<?php
session_start();
include('conexion.php');
$idUsuario = $_SESSION['idUsuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rentify</title>
	<section>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilosPerfil/estilosPerfil.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="menuR/css/style.css">
	<link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
	<link rel="stylesheet" href="estilopubli/css/style.scss">
</section>


</head>
<section>
	<header>
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
				
				<div class="col-10">
					<nav class="site-navigation text-right" role="navigation">
						<div class="container">
							<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"></a></div>
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
                                      
                                    </li>
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
	</header>
</section>
<body class="sa">
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt>
                        </a>
						<?php
									$sql="SELECT * FROM cliente WHERE idUsuario = '$idUsuario'";
									$resultadoo = mysqli_query($conectado, $sql);
									while($mostrar=mysqli_fetch_assoc($resultadoo)){
										?>
								
									
                        <h1><?php echo $mostrar['nombre']; ?></h1>
						
                        <p> <?php echo $mostrar['email']; ?></p>
								<?php
									}?>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        
                        <li><a href="perfilCliente.php"> <i class="fa fa-edit"></i> Editar Perfil</a></li>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                
                <div class="panel">
                    <div class="bio-graph-heading">
                        Perfil
                    </div>
					
                    <div class="panel-body bio-graph-info">
                        <h1>Mis datos</h1>
						<?php
									$sql="SELECT * FROM cliente WHERE idUsuario = '$idUsuario'";
									$resultadoo = mysqli_query($conectado, $sql);
									while($mostrar=mysqli_fetch_assoc($resultadoo)){
											?>
											
                        <div class="row">
                            <div class="bio-row">
                                <p><span>Nombre:</span><?php echo $mostrar['nombre']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Apellido Paterno: </span><?php echo $mostrar['apellidoP']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Apellido Materno </span>: <?php echo $mostrar['apellidoM']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Direccion </span><?php echo $mostrar['direccion']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Telefono: </span><?php echo $mostrar['telefono']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email: </span><?php echo $mostrar['email']; ?></p>
                            </div>
							<div class="bio-row">
                                <p><span>Contraseña: </span><?php echo $mostrar['contrasena']; ?></p>
                            </div>
                        </div>
						<?php
						}
						?>
                    </div>
                </div>
                
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
	<script src="js/menu.js"></script>
	<script src="js/script.js"></script>
	<script src="menuR/js/jquery-3.3.1.min.js"></script>
	<script src="menuR/js/main.js"></script>
	<script src="menuR/js/jquery.sticky.js"></script>
	<script src="menuR/js/owl.carousel.min.js"></script>
	<script src="menuR/js/bootstrap.min.js"></script>
	<script src="menuR/js/popper.min.js"></script>

    </script>
</body>

</html>