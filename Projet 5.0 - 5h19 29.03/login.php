<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<header>
    <?php include('header.php'); ?>	
</header>

<body>
	<header>
		<h1 class="grand_titre">Connexion<input class="btn-tertiaire" type="button" onclick="window.location.href = 'inscription.php';" value="S'inscrire" /></h1>
	</header>
	<main>
		<section>
			<h2 class="moyen_titre">Identification</h2>
			<form action="M_login.php" method="post" class="col-md-2 col-lg-2 liste">
				<label class="labbel">Identifiant :</label></li>
				<input class="champ" name="pseudo" type="text" placeholder="Votre Login :" maxlength="32" size="20" required></li>

				<label class="labbel">Mot de passe</label></li>
				<input class="champ" name="pass" type="password" maxlength="32" size="20" pattern=".{4,}" required></li><br>

				<input type="submit" value="Valider" id="envoyer" class="btn-secondaire"></li><br>

				<input class="lien" type="button" onclick="window.location.href = 'https://www.youtube.com/watch?v=uo-y_ok1Kns';" value="Mot de passe oublié" /></li>
			</form>
		</section>
	</main>
</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>