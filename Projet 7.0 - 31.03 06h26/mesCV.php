<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Mes CV</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>

	<header>
		<h1 class="grand_titre">MES CV</h1>
	</header>

	<main>
		<section>
			<form method="post">
				<input type="submit" name="rechCV" value="Recherche de vos CV" />
			</form>
			<br>
			<form method="post">
				<input type="search" name="importCV" placeholder="Importez votre CV :">
				<input type="submit" name="importCVbtn" value="Importer" />
			</form>
		</section>
		<div>
		<br><?php if (isset($_POST['rechCV'])) {
				include('M_CV1.php');
			} ?>
			<?php if (isset($_POST['importCV'])) {
				include('M_CV2.php');
			} ?>
		</div>
	</main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>