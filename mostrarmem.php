<?php include("conexion.php");
$sql = "SELECT * FROM membresia";
$resultado = mysqli_query($conectado, $sql);
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
	<script src="https://www.paypal.com/sdk/js?client-id=AX66C6yVFXtcMo5eDQlS0Vx3deB3BWI7Y96C5x2U6j-pXtrirxscuCs728i_tGuFejD01VMpizYYztvR&currency=MXN"></script>
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
								<li><a href="mostrarmem.php" class="nav-link">Membresias</a></li>
								
			
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
	<main>
		<div class=" row-cols-1 row-cols-md-3 mb-3 text-center">
			<?php foreach ($resultado as $row) { ?>
				<div class="col">
					<div class="card mb-4 rounded-3 shadow-sm">
						<div class="card-header py-3">
							<h4 class="my-0 fw-normal"><?php echo $row['tipo']; ?></h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title"><?php echo number_format($row['costo'], 2, '.', ','); ?></h1>
							<ul class="list-unstyled mt-3 mb-4">
								<li>Disfruta de los servicios que ofrecemos</li>
								<li>Podras publicar tus propiedades</li>
								<li>una vez hecho el pago</li>
								
							</ul>
							<?php echo "<a href='pago.php' class='btn btn-primary rounded-pill px-3'>Pagar</a>"; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

	</main>
	<script src="js/search.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/script.js"></script>
	<script src="menuR/js/jquery-3.3.1.min.js"></script>
	<script src="menuR/js/main.js"></script>
	<script src="menuR/js/jquery.sticky.js"></script>
	<script src="menuR/js/owl.carousel.min.js"></script>
	<script src="menuR/js/bootstrap.min.js"></script>
	<script src="menuR/js/popper.min.js"></script>
	<script
    src="https://www.paypal.com/sdk/js?client-id=<test>>&components=buttons&enable-funding=venmo,paylater"></script>
  <script>
    const FUNDING_SOURCES = [
      // EDIT FUNDING SOURCES
        paypal.FUNDING.PAYPAL,
        paypal.FUNDING.PAYLATER,
        paypal.FUNDING.CARD
    ];
    FUNDING_SOURCES.forEach(fundingSource => {
      paypal.Buttons({
        fundingSource,

        style: {
          layout: 'vertical',
          shape: 'rect',
          color: (fundingSource == paypal.FUNDING.PAYLATER) ? 'gold' : '',
        },

        createOrder: async (data, actions) => {
          try {
            const response = await fetch("http://localhost:9597/orders", {
              method: "POST"
            });

            const details = await response.json();
            return details.id;
          } catch (error) {
            console.error(error);
            // Handle the error or display an appropriate error message to the user
          }
        },

        
        createSubscription: (data, actions) => {
          return actions.subscription.create({
            plan_id: "P-3RX065706M3469222L5IFM4I",
          });
        };


        onApprove: async (data, actions) => {
          try {
            const response = await fetch(`http://localhost:9597/orders/${data.orderID}/capture`, {
              method: "POST"
            });

            const details = await response.json();
            // Three cases to handle:
            //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
            //   (2) Other non-recoverable errors -> Show a failure message
            //   (3) Successful transaction -> Show confirmation or thank you message

            // This example reads a v2/checkout/orders capture response, propagated from the server
            // You could use a different API or structure for your 'orderData'
            const errorDetail = Array.isArray(details.details) && details.details[0];

            if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
              return actions.restart();
              // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
            }

            if (errorDetail) {
              let msg = 'Sorry, your transaction could not be processed.';
              msg += errorDetail.description ? ' ' + errorDetail.description : '';
              msg += details.debug_id ? ' (' + details.debug_id + ')' : '';
              alert(msg);
            }

            // Successful capture! For demo purposes:
            console.log('Capture result', details, JSON.stringify(details, null, 2));
            const transaction = details.purchase_units[0].payments.captures[0];
            alert('Transaction ' + transaction.status + ': ' + transaction.id + 'See console for all available details');
          } catch (error) {
            console.error(error);
            // Handle the error or display an appropriate error message to the user
          }
        },
      }).render("#paypal-button-container");
    })
  </script>
</body>

</html>