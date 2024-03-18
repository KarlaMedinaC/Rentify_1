<?php
require('conexion.php');
session_start();
$id_propietario = $_SESSION['id_propietario'];

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Rentify</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="img/logo.png">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="estilopubli/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="estilopubli/css/style.scss">

	<!-- estilos footer -->
	<link rel="stylesheet" href="footer/css/ionicons.min.css">
	<link rel="stylesheet" href="footer/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">


	<!-- estilos menu -->
	<link rel="stylesheet" href="menuR/css/style.css">
	<link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
	<link rel="stylesheet" href="menuR/css/style.css">
	<link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
	<link rel="stylesheet" href="footer/css/ionicons.min.css">
	<link rel="stylesheet" href="footer/css/style.css">
	<link rel="stylesheet" href="validaciones/valirContacto/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
					<h1 class="my-0 site-logo"><a href="verMisPropiedades.php">Rentify</a></h1>
				</div>
				<div class="col-10">
					<nav class="site-navigation text-right" role="navigation">
						<div class="container">
							<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

							<ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
								<li><a href="./cerrarSesion.php" class="nav-link">Cerrar sesion</a></li>
								<li><a href="publicarPropiedad.php" class="nav-link">Publicar Propiedad</a></li>
								<li><a href="perfilPropietarioNormal.php" class="nav-link">Perfil</a></li>
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

<body class="sa">
	<br><br>
	<section class="intro">
		<div class="gradient-custom-2 h-100">
			<div class="mask d-flex align-items-center h-100">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="table-responsive">
								<table class="table table-dark table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">Numero de propiedad</th>
											<th scope="col">Id de la propiedad</th>
											<th scope="col">Operacion</th>
											<th scope="col">Inmueble</th>
											<th scope="col">Direccion</th>
											<th scope="col">Imagen de mi propiedad</th>
											<th scope="col">Comentarios</th>
											<th scope="col">Funciones</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$consultaU = "SELECT propiedad.id_publicacionpropiedad, propiedad.operacion, propiedad.inmueble,
										propiedad.direccion, propiedad.img_principal
										FROM `propiedad`INNER JOIN imagenes ON propiedad.id_publicacionpropiedad = imagenes.id_publicacionpropiedad
										WHERE `propiedad`.`id_propietario` = '$id_propietario'";
										$resultadoU = mysqli_query($conectado, $consultaU);
										$cont = 1;
										while ($row = mysqli_fetch_assoc($resultadoU)) {
										?>
											<tr>
												<th scope="row"><?php echo $cont++ ?></th>
												<td><?php echo $row['id_publicacionpropiedad']; ?></td>
												<td><?php echo $row['operacion']; ?></td>
												<td><?php echo $row['inmueble']; ?></td>
												<td><?php echo $row['direccion']; ?></td>
												<td><img class="imgPrincipalProp" src="imagenesInms/<?php echo $row['img_principal'];  ?>"></td>
												<td><a href="./ComentariosDePropiedad.php?id=<?php echo $row["id_publicacionpropiedad"]; ?>">
														<button>Ver comentarios</button></a></td>
												<td><a href="./detallesPropiedad.php?id=<?php echo $row["id_publicacionpropiedad"]; ?>"><button>Editar</button></a>
													<a href="eliminarPropiedad.php?id_propiedad=<?php echo $row['id_publicacionpropiedad'] ?>"><button>Eliminar</button></a>
												</td>
											</tr>
										<?php
										}
										mysqli_free_result($resultadoU);
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		

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