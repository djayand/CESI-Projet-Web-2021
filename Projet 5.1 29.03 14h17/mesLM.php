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
				<input type="search" name="importLM" placeholder="Importez votre LM :">
				<input type="submit" name="importLM" value="Admin" />
			</form>
		</section>
		<div>
			<?php include('M_LM.php'); ?>
		</div>
	</main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>