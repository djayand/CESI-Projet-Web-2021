<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Colorlib Templates">
	<meta name="author" content="Colorlib">
	<meta name="keywords" content="Colorlib Templates">
	<!-- Icons font CSS-->
	<link href="../../ressources/colorlib-regform-3/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="../../ressources/colorlib-regform-3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Vendor CSS-->
	<link href="../../ressources/colorlib-regform-3/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="../../ressources/colorlib-regform-3/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	<!-- Main CSS-->
	<link href="../../ressources/colorlib-regform-3/css/main.css" rel="stylesheet" media="all">
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>
	<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
		<div class="wrapper wrapper--w780">
			<div class="card card-3">
				<div class="card-body">
					<h2 class="title">Connectez vous :</h2>
					<form method="POST" action="../Modeles/M_Login.php">
						<div class="input-group">
							<input class="input--style-3" type="text" placeholder="Login" name="pseudo">
						</div>
						<div class="input-group">
							<input class="input--style-3" type="password" placeholder="************" name="pass">
						</div>
						<div class="p-t-10">
							<button class="btn btn--pill btn--green" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Jquery JS-->
	<script src="../../ressources/colorlib-regform-3/vendor/jquery/jquery.min.js"></script>
	<!-- Vendor JS-->
	<script src="../../ressources/colorlib-regform-3/vendor/select2/select2.min.js"></script>
	<script src="../../ressources/colorlib-regform-3/vendor/datepicker/moment.min.js"></script>
	<script src="../../ressources/colorlib-regform-3/vendor/datepicker/daterangepicker.js"></script>
	<!-- Main JS-->
	<script src="../../ressources/colorlib-regform-3/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>