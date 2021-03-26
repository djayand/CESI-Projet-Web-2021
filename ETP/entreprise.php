<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Recherche d'entreprises</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>

	<header>
		<h1 class="grand_titre">Entreprises</h1>
	</header>

	<main>
		<section>
			<form method="post">
				<input type="search" name="recherche">
				<input type="submit" name="s" value="Rechercher"><br><br>
			</form>

			<div>
				<?php
				include('M_Entreprise.php');
				?>
			</div>

		</section>
	</main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>


</html>