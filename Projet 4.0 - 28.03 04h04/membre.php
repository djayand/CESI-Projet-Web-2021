<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Recherche de membres</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>

	<header>
		<h1 class="grand_titre">Membres </h1>
	</header>

	<main>
		<section>
			<form method="post">
				<input type="search" name="recherche">
				<input type="submit" name="1" value="Rechercher un administrateur" />
				<input type="submit" name="2" value="Rechercher un délégué" />
				<input type="submit" name="3" value="Rechercher un étudiant" />
				<input type="submit" name="4" value="Rechercher un pilote de formation" />
			</form>
			<br>
			<form method="post">
				<input type="submit" name="5" value="Insérer un administrateur" />
				<input type="submit" name="6" value="Insérer un délégué" />
				<input type="submit" name="7" value="Insérer un étudiant" />
				<input type="submit" name="8" value="Insérer un pilote de formation" />
			</form>
			<br>
			<form method="post">
				<input type="submit" name="9" value="Modifier un administrateur" />
				<input type="submit" name="10" value="Modifier un délégué" />
				<input type="submit" name="11" value="Modifier un étudiant" />
				<input type="submit" name="12" value="Modifier un pilote de formation" />
			</form>
			<br>
			<form method="post">
				<input type="submit" name="13" value="Supprimer un administrateur" />
				<input type="submit" name="14" value="Supprimer un délégué" />
				<input type="submit" name="15" value="Supprimer un étudiant" />
				<input type="submit" name="16" value="Supprimer un pilote de formation" />
			</form>
			<br>
			<div>
				<?php
				include('M_Membre1.php');
				?>
			</div>
		</section>
	</main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>


</html>