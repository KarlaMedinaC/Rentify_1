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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Bootstrap CSS -->

	<script>
		function propiedadVali() {
			var direccion, recamaras, banos, m2construccion, m2terreno, estacionamiento, niveles, precio, servicios, descripcion;

			direccion = document.getElementById("direccion").value;
			recamaras = document.getElementById("recamaras").value;
			banos = document.getElementById("banos").value;
			m2construccion = document.getElementById("m2construccion").value;
			m2terreno = document.getElementById("m2terreno").value;
			estacionamiento = document.getElementById("estacionamiento").value;
			niveles = document.getElementById("niveles").value;
			precio = document.getElementById("precio").value;
			servicios = document.getElementById("servicios").value;
			descripcion = document.getElementById("descripcion").value;


			var fileInput = document.getElementById('img_principal');
			var filePath = fileInput.value;
			var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
			const LIMITES_IMAGENES = 7000000; // 1MB = 1 millón de bytes




			if (direccion === "" || recamaras === "" || banos === "" || m2construccion === "" || m2terreno === "" ||
				niveles === "" || precio === "" || servicios === "" || descripcion === "" || fileInput === "" || estacionamiento === "") {
				alert("Todos los campos son obligatorios");
				return false;
			} else if (direccion.length > 100) {
				alert("La dirección es muy larga");
				return false;
			} else if (recamaras.length > 11) {
				alert("Tienes un maximo de 11 recámaras");
				return false;
			} else if (isNaN(recamaras)) {
				alert("No son validos letras en el campo recámaras");
				return false;
			} else if (banos.length > 11) {
				alert("Tienes un maximo de 11 baños");
				return false;
			} else if (isNaN(banos)) {
				alert("No son validos letras en el campo baños");
				return false;
			} else if (isNaN(m2construccion)) {
				alert("No son validos letras en el campo Mt² del construcción");
				return false;
			} else if (isNaN(m2terreno)) {
				alert("No son validos letras en el campo Mt² del terreno");
				return false;
			} else if (isNaN(estacionamiento)) {
				alert("No son validos letras en el campo número de estacionamiento");
				return false;
			} else if (isNaN(niveles)) {
				alert("No son validos letras en el campo de niveles");
				return false;
			} else if (niveles.length > 11) {
				alert("Tienes un maximo de 11 pisos/niveles");
				return false;
			} else if (isNaN(precio)) {
				alert("No son válidos letras en el campo del precio de la propiedad");
				return false;
			} else if (servicios.length > 50) {
				alert("El campo servico no es válido, por favor relleno con un maximo de 50 caracteres");
				return false;
			} else if (descripcion.length > 150) {
				alert("El campo servico no es válido, por favor relleno con un maximo de 150 caracteres");
				return false;
			} else if (!allowedExtensions.exec(filePath)) {
				alert('Por favor suba archivos con extension .jpeg/.jpg/.png solamente.');
				fileInput = '';
				return false;
			} else if (fileInput.files && fileInput.files[0].size > LIMITES_IMAGENES) {
				const tamanioEnMb = LIMITES_IMAGENES / 1000000;
				alert(`El tamaño máximo de la imagen es ${tamanioEnMb} MB`);
				return false;
			} 
		}
	</script>
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
					<h1 class="my-0 site-logo"><a href="index.php">Rentify</a></h1>
				</div>
				<div class="col-10">
					<nav class="site-navigation text-right" role="navigation">
						<div class="container">
							<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

							<ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
								<li><a href="./cerrarSesion.php" class="nav-link">Cerrar sesion</a></li>
								<li><a href="verMisPropiedades.php" class="nav-link">Ver mis propiedades</a></li>
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

	<div class="inner">
		<form action="./bdPropiedades.php" method="post" enctype="multipart/form-data">
			<input type="text" value="1" hidden name="bandera">
			<input type="text" value="<?php echo $id_propietario ?>" name="id_propietario" hidden>

			<h3>Publicar Propiedad</h3>
			<div class="form-wrapper">
				<label for="">Operacion:</label>
				<div class="form-holder select">
					<select name="operacion" id="operacion" class="form-control">
						<option value="vender">Vender</option>
						<option value="rentar">Rentar</option>
					</select>
				</div>
			</div>
			<div class="form-wrapper">
				<label for="">Inmueble:</label>
				<div class="form-holder select">
					<select name="inmueble" id="inmueble" class="form-control">
						<option value="departamento">Departamento</option>
						<option value="casa">Casa</option>
					</select>
				</div>
			</div>
			<div class="form-wrapper">
				<label for="">Direccion:</label>
				<div class="form-holder">
					<input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion del Inmueble" />

				</div>
			</div>
			<div class="form-group">

			</div>
			<div class="form-group">
				<div class="form-wrapper">
					<label for="">Recamaras:</label>
					<div class="form-holder">
						<input type="text" name="recamaras" id="recamaras" class="form-control" placeholder="Numero de recamaras">
					</div>
				</div>
				<div class="form-wrapper">
					<label for="">Baños:</label>
					<div class="form-holder">
						<input type="text" name="banos" id="banos" class="form-control" placeholder="Numero de Baños">
					</div>
				</div>

			</div>
			<div class="form-group">
				<div class="form-wrapper">
					<label for="">M2 de construccion:</label>
					<div class="form-holder">
						<input type="text" name="m2construccion" id="m2construccion" class="form-control" placeholder="Metros cuadrados">
					</div>
				</div>
				<div class="form-wrapper">
					<label for="">M2 de terreno:</label>
					<div class="form-holder">
						<input type="text" name="m2terreno" id="m2terreno" class="form-control" placeholder="Metros cuadrados">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-wrapper">
					<label for="">Estacionamiento:</label>
					<div class="form-holder">
						<input type="text" name="estacionamiento" id="estacionamiento" class="form-control" placeholder="Numero de Estacionamientos">
					</div>
				</div>
				<div class="form-wrapper">
					<label for="">Niveles:</label>
					<div class="form-holder">
						<input type="text" name="niveles" id="niveles" class="form-control" placeholder="Numero de pisos">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-wrapper">
					<label for="">Precio del inmueble:</label>
					<div class="form-holder">
						<input type="text" name="precio" id="precio" class="form-control" placeholder=" $">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-wrapper">
					<label for="">Imagen Casa</label>
					<div class="form-holder">
						<input type="file" name="img_principal" id="img_principal" class="form-control" placeholder="" accept="image/png,image/jpeg">
						<div id="imagePreview"></div>
					</div>
				</div>
			</div>
			<div class="form-wrapper">
				<label for="">Servicios del Inmueble:</label>
				<div class="form-holder">
					<input type="text" name="servicios" id="servicios" class="form-control" placeholder="" rows="4">
				</div>
			</div>
			<div class="form-wrapper">
				<label for="">Descripcion Inmueble:</label>
				<div class="form-holder">
					<input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="" rows="4">
				</div>
			</div>
			<div>
			<label for="">status:</label>
				<div class="form-holder select" hidden>
					<select name="status" id="status" class="form-control">
						<option selected value="Pendiente">Pendiente</option>
						<option value="Aprobado">Aprobada</option>
					</select>
				</div>
			</div>
			<div class="form-end">
				<div class="button-holder">
					<button  onclick="return propiedadVali()">Siguiente</button>
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