<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Mes LM</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>

	<header>
		<h1 class="grand_titre">MES LM</h1>
	</header>

	<main>
		<section>
			<form method="post">
				<input type="submit" name="rechLM" value="Recherche de vos lettres" />
			</form>
			<br>
			<form method="post">
				<input type="search" name="importLM" placeholder="Importez votre LM :">
				<input type="submit" name="importLMbtn" value="Importer" />
			</form>
		</section>
		<div>
		<br><?php if (isset($_POST['rechLM'])) {
				include('M_LM1.php');
			} ?>
			<?php if (isset($_POST['importLM'])) {
				include('M_LM2.php');
			} ?>
		</div>
	</main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>