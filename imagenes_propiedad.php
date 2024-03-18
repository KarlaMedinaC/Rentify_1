<?php
require('conexion.php');

session_start();
$id_propietario = $_SESSION['id_propietario'];
$id_propiedad = $_REQUEST['id_propiedad'];

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Rentify</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="estilopubli/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="estilopubli/css/style.scss">


	<!-- estilos menu -->
	<link rel="stylesheet" href="menuR/css/style.css">
	<link rel="stylesheet" href="menuR/fonts/icomoon/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script>
		function propiedadVali() {
			var img_cocina, img_recamaras, img_bano, img_patio, img_sala, img_comedor;

			img_cocina = document.getElementById('img_cocina');
			img_recamaras = document.getElementById('img_recamaras');
			img_bano = document.getElementById('img_bano');
			img_patio = document.getElementById('img_patio');
			img_sala = document.getElementById('img_sala');
			img_comedor = document.getElementById('img_comedor');
			var filePath1 = img_cocina.value;
			var filePath2 = img_recamaras.value;
			var filePath3 = img_bano.value;
			var filePath4 = img_patio.value;
			var filePath5 = img_sala.value;
			var filePath6 = img_comedor.value;
			var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
			const LIMITES_IMAGENES = 7000000; // 1MB = 1 millón de bytes
			const tamanioEnMb = LIMITES_IMAGENES / 1000000;

			if (filePath1 === '' || filePath2 === "" || filePath3 === "" || filePath4 === "" || filePath5 === "" || filePath6 === "") {
				alert("Todos los campos son obligatorios");
				return false;
			} else if (!allowedExtensions.exec(filePath1)) {
				alert('Por favor revise la imagen de la cocina debe tener contar con extensiones .jpeg/.jpg/.png solamente.');
				filePath1 = '';
				return false;
			} else if (!allowedExtensions.exec(filePath2)) {
				alert('Por favor revise la imagen de las recámaras debe tener contar con extensiones .jpeg/.jpg/.png solamente.');
				filePath2 = '';
				return false;
			} else if (!allowedExtensions.exec(filePath3)) {
				alert('Por favor revise la imagen del baño debe tener contar con extensiones .jpeg/.jpg/.png solamente.');
				filePath3 = '';
				return false;
			} else if (!allowedExtensions.exec(filePath4)) {
				alert('Por favor revise la imagen del  patio debe tener contar con extensiones .jpeg/.jpg/.png solamente.');
				filePath4 = '';
				return false;
			} else if (!allowedExtensions.exec(filePath5)) {
				alert('Por favor revise la imagen de la sala debe tener contar con extensiones .jpeg/.jpg/.png solamente.');
				filePath5 = '';
				return false;
			} else if (!allowedExtensions.exec(filePath6)) {
				alert('Por favor revise la imagen del comedor debe tener contar con extensiones .jpeg/.jpg/.png solamente.');
				filePath6 = '';
				return false;
			} else if (img_cocina.files && img_cocina.files[0].size > LIMITES_IMAGENES) {
				alert(`El tamaño máximo para la imagen de cocina es ${tamanioEnMb} MB`);
				return false;
			} else if (img_recamaras.files && img_recamaras.files[0].size > LIMITES_IMAGENES) {
				alert(`El tamaño máximo para la imagen de recámaras es ${tamanioEnMb} MB`);
				return false;
			} else if (img_bano.files && img_bano.files[0].size > LIMITES_IMAGENES) {
				alert(`El tamaño máximo para la imagen del baño es ${tamanioEnMb} MB`);
				return false;
			} else if (img_patio.files && img_patio.files[0].size > LIMITES_IMAGENES) {
				alert(`El tamaño máximo para la imagen del patio es ${tamanioEnMb} MB`);
				return false;
			} else if (img_sala.files && img_sala.files[0].size > LIMITES_IMAGENES) {
				alert(`El tamaño máximo para la imagen de la sala es ${tamanioEnMb} MB`);
				return false;
			} else if (img_comedor.files && img_comedor.files[0].size > LIMITES_IMAGENES) {
				alert(`El tamaño máximo para la imagen del comedor es ${tamanioEnMb} MB`);
				return false;
			}
		}
	</script>
</head>

<body class="sa">
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
								<li><a href="cerrarSesion.php" class="nav-link">Cerrar sesion</a></li>

							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" style="background-image: url('/images/bg-registration-form-3.jpg');">
		<div class="inner">
			<form action="./bdImagenes.php" method="post" enctype="multipart/form-data">
				<input type="text" value="1" hidden name="bandera">
				<input type="text" value="<?php echo $id_propiedad ?>" name="idPropiedad" hidden>
				<h3>Ingresa Imagenes de la Propiedad</h3>
				<div class="form-group">
					<div class="form-wrapper">
						<label for="">Imagen Cocina:</label>
						<div class="form-holder">
							<input type="file" name="img_cocina" id="img_cocina" class="form-control" placeholder=" $" accept="image/png,image/jpeg">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Imagen Recamaras:</label>
						<div class="form-holder">
							<input type="file" name="img_recamaras" id="img_recamaras" class="form-control" placeholder=" $" accept="image/png,image/jpeg">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="form-wrapper">
						<label for="">Imagen Baño:</label>
						<div class="form-holder">
							<input type="file" name="img_bano" id="img_bano" class="form-control" placeholder=" $" accept="image/png,image/jpeg">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Imagen Patio:</label>
						<div class="form-holder">
							<input type="file" name="img_patio" id="img_patio" class="form-control" placeholder=" $" accept="image/png,image/jpeg">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="form-wrapper">
						<label for="">Imagen sala:</label>
						<div class="form-holder">
							<input type="file" name="img_sala" id="img_sala" class="form-control" placeholder=" $" accept="image/png,image/jpeg">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Imagen comedor:</label>
						<div class="form-holder">
							<input type="file" name="img_comedor" id="img_comedor" class="form-control" placeholder=" $" accept="image/png,image/jpeg">
						</div>
					</div>
				</div>
				<div class="button-holder">
					<button type="submit" onclick="return propiedadVali()">Siguiente</button>
				</div>
		</div>

		</form>
	</div>
	</div>
	<script src="js/search.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/script.js"></script>
	<script src="menuR/js/jquery-3.3.1.min.js"></script>
	<script src="menuR/js/main.js"></script>
	<script src="menuR/js/jquery.sticky.js"></script>
	<script src="menuR/js/owl.carousel.min.js"></script>
	<script src="menuR/js/bootstrap.min.js"></script>
	<script src="menuR/js/popper.min.js"></script>
	<script src="validaciones/validar.js"></script>

</body>

</html>