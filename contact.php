<?php
include 'componentes/header.php';
include 'componentes/footer.php';
?>
<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>TermoIndustrial | Contacto</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link href="img/ico/termoIndustrial-logo.ico" rel="shortcut icon" type="image/x-icon">
	<!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/meanmenu.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

	<!-- header start -->
	<?php echo headers(); ?>
	<!-- header end -->

	<!-- breadcrumb-area-start -->
	<div class="breadcrumb-area bg-color ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb-title text-center">
						<h1>Contacto</h1>
						<div class="breadcrumb-menu">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li>Contacto</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area-end -->





	<div class="contact-bottom-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-12">
					<div class="contact-bottom-text text-center">

						<h2>Hablemos!</h2>
						<p>Escríbenos un mensaje con cualqueir duda para que podamos ayudarte, te responderemos a la brevedad.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<form id="contact-form" action="mail.php" method="post">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<input type="text" placeholder="Nombre" name="nombre">
							</div>
							<div class="col-md-6 col-sm-6">
								<input type="email" placeholder="Email" name="email">
							</div>
							<div class="col-md-12 col-sm-12">
								<input type="text" placeholder="telefono" name="telefono">
							</div>
							<div class="col-md-12">
								<textarea id="mensaje" placeholder="Siéntete libre de escribirnos cualquier cosa, dudas, consultas por productos, solicitar cotizaciones, etc. Estamos a tu disposición!" rows="6" cols="30" name="mensaje"></textarea>
							</div>
							<div class="col-md-12 text-center">
								<button id="enviar" class="btn">Enviar!</button>
							</div>
						</div>
					</form>
					<br>
					<br>
					
					<div id="cover">
						<div id="loader"></div>
					</div>
					
					<p id="form-message-response" class="form-message"></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<!-- map -->
			<div class="col-sm-12 col-md  col-6 col bg-color">
				<div class="container-fluid">
					<div class="row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4715.523983859003!2d-70.71523279276347!3d-33.30890618734389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662b8b464394893%3A0x9e7724dc50de42f2!2sLa%20Monta%C3%B1a%2059%2C%20Colina%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1567560636500!5m2!1ses-419!2scl" width="1300" height="300" frameborder="0" style="border:0;" allowfullscreen="" marginheight="0" marginwidth="0" class="well well-sm col-xs-12"></iframe>
					</div>
				</div>
			</div>
			<!-- map-end -->

		</div>
	</div>

	<br>
	<br>
	<br>
	<br>

	<!-- footer start -->
	<?php echo footers(); ?>
	<!-- footer end -->

	<script src="js/vendor/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.meanmenu.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>

</html>