<?php 
include('conexion.php');
session_start();
$id_propietario = $_SESSION['id_propietario'];
$sql1="SELECT * FROM membresia";
$resultado1 = mysqli_query($conectado, $sql1);
$sql = "SELECT * FROM membresia";
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


	<!-- estilos menu -->
	<link rel="stylesheet" href="menuR/css/style.css">
    <link rel="stylesheet" href="css/esilospago.css">
	<link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
	<link rel="stylesheet" href="menuR/css/style.css">
	<link rel="stylesheet" href="menuR/fonts/icomoon/style.css">
	<link rel="stylesheet" href="footer/css/ionicons.min.css">
	<link rel="stylesheet" href="footer/css/style.css">
	<link rel="stylesheet" href="validaciones/valirContacto/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://www.paypal.com/sdk/js?client-id=AX66C6yVFXtcMo5eDQlS0Vx3deB3BWI7Y96C5x2U6j-pXtrirxscuCs728i_tGuFejD01VMpizYYztvR&currency=MXN"></script>
	<!-- Bootstrap CSS -->
    <script>
        function pagoVali() {
            var tarjeta, cvv;

            tarjeta = document.getElementById("tarjeta").value;
            cvv = document.getElementById("cvv").value;



            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarjeta = isset($_POST['tarjeta']) ? trim($_POST['tarjeta']) : '';
    $cvv = isset($_POST['cvv']) ? trim($_POST['cvv']) : '';
    $ano = isset($_POST['ano']) ? trim($_POST['ano']) : '';
    $mesExp = isset($_POST['mesExp']) ? trim($_POST['mesExp']) : '';
    $errores = [];

    if (empty($tarjeta) || !preg_match('/^\d{16}$/', $tarjeta)) {
        $errores[] = "Tu número de tarjeta debe tener exactamente 16 dígitos.";
    }
    if (empty($mesExp) || !preg_match('/^\d{2}$/', $mesExp)) {
        $errores[] = "El mes de expiración debe tener exactamente 2 dígitos.";
    }
    if (empty($ano) || !preg_match('/^\d{4}$/', $ano)) {
        $errores[] = "El año de expiración debe tener exactamente 4 dígitos.";
    }
    if (empty($cvv) || !preg_match('/^\d{3}$/', $cvv)) {
        $errores[] = "El CVV debe tener exactamente 3 dígitos.";
    }

    if (count($errores) == 0) {
        
    } else {
        
        foreach ($errores as $error) {
            echo '<script>alert("' . $error . '");</script>';
        }
    }
}
?>

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
					<h1 class="my-0 site-logo"><a href="verMisPropiedades.php">Rentify</a></h1>
				</div>
                
				<div class="col-10">
					<nav class="site-navigation text-right" role="navigation">
						<div class="container">
							<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

							<ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
								<li><a href="./cerrarSesion.php" class="nav-link">Cerrar sesion</a></li>
								
								
			
								</li>
							</ul>

						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

</header>

<body class="sa">

<?php
    if(isset($_POST['enviar'])){
        $membresia=$_POST['membresia'];
        $tarjeta=$_POST['tarjeta'];
        $sql = "INSERT INTO rigistromembresia (id_propietario, id_membresia, membresia, tarjeta) VALUES ('$id_propietario', '1', '$membresia', '$tarjeta')";


        $resultado=mysqli_query($conectado,$sql);
        if ($resultado) {
            echo"<script lenguage='JavaScript'>
            alert('El pago a sido registrado');
            location.assign('verMisPropiedades.php');
            </script>";
        }else{
            echo"<script lenguage='JavaScript'>
            alert('Upps, Hubo un error en el pago');
            location.assign('pago.php');
            </script>";

        }
        mysqli_close($conectado);
    }
    ?>
		<!-- Formulario -->
    <div class="container cash">
    
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<?php foreach ($resultado1 as $row) { ?>
    <?php
									$sql="SELECT * FROM membresia";
									$resultadoo = mysqli_query($conectado, $sql);
									while($mostrar=mysqli_fetch_assoc($resultadoo)){
											?>
    <div class="row">
        <div class="col">

        <h3 class="title">Pago</h3>

        <div class="inputBox">
                        <span>Tipo de Pago :</span>
                        <input type="hidden" id="membresia" name="membresia" value="<?php echo $row['tipo']; ?>"> 
                        <p><span><?php echo $mostrar['tipo']; ?></span></p>
                    </div>
<div class="inputBox">
                        <span>Precio de Pago :</span>
                        <p><span><?php echo $mostrar['costo']; ?></span></p>
                    </div>
<div class="inputBox">
                        <span>Número de tarjeta:</span>
                        <input type="text" name="tarjeta" id="tarjeta" placeholder="1111-2222-3333-4444" maxlength="16" title="Debe tener 16 dígitos">
                        <span class="error-message" id="tarjetaError"></span>
                    </div>
<div class="inputBox">
                        <span>Mes exp:</span>
                        <input type="text" name="mesExp" id="mesExp" placeholder="MM" maxlength="2" title="Debe tener 2 dígitos">
                        <span class="error-message" id="mesExpError"></span>
                    </div>

<div class="flex">
                        <div class="inputBox">
                            <span>Año de expiración:</span>
                            <input type="text" name="ano" id="ano" placeholder="AAAA" maxlength="4" title="Debe tener 4 dígitos">
                            <span class="error-message" id="anoError"></span>
                        </div>
<div class="inputBox">
                            <span>CVV:</span>
                            <input type="password" name="cvv" id="cvv" placeholder="*" maxlength="3" title="Debe tener 3 dígitos">
                            <span class="error-message" id="cvvError"></span>
                        </div>
                <?php
						}
						?>
            </div>

        </div>

    </div>

    <input type="submit" name="enviar" value="Realizar pago" class="submit-btn" onclick="return pagoVali()">
<?php }?>
</form>

</div>    

	</div>

  
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/makin.js"></script>
    <script>
    const tarjetaInput = document.getElementById('tarjeta');
    const mesExpInput = document.getElementById('mesExp');
    const anoInput = document.getElementById('ano');
    const cvvInput = document.getElementById('cvv');

    [tarjetaInput, mesExpInput, anoInput, cvvInput].forEach(input => {
        input.addEventListener('input', function() {
            this.value = this.value.replace(/\D/g, ''); 
        });
    });

    function pagoVali() {
        if (!/^\d{16}$/.test(tarjetaInput.value)) {
            tarjetaInput.classList.add('error');
            document.getElementById('tarjetaError').textContent = 'Debe tener 16 dígitos';
            return false;
        }

        if (!/^\d{2}$/.test(mesExpInput.value)) {
            mesExpInput.classList.add('error');
            document.getElementById('mesExpError').textContent = 'Debe tener 2 dígitos';
            return false;
        }

        if (!/^\d{4}$/.test(anoInput.value)) {
            anoInput.classList.add('error');
            document.getElementById('anoError').textContent = 'Debe tener 4 dígitos';
            return false;
        }

        if (!/^\d{3}$/.test(cvvInput.value)) {
            cvvInput.classList.add('error');
            document.getElementById('cvvError').textContent = 'Debe tener 3 dígitos';
            return false;
        }

        return true;
    }
</script>
    
</body>

</html>