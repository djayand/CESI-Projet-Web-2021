<link rel="stylesheet" type="text/css" href="css/stylefh.css">

<body>
	<div class=hdr>
		<a href="index.php">Acceuil</a>
		<a href="login.php">Connexion</a>
		<a href="inscription.php">Inscription</a>
		<a href="stage.php">Stage</a>
		<a href="ficheEntreprise.php">Entreprise</a>
		<a href="lm.php">Mes lettres</a>
		<a href="mention.php">Mentions Légales</a>
	</div>

	<div class=hdr2>
		<?php
		if (isset($_SESSION['pseudo'])) {
			echo 'Bonjour,' . $_SESSION['pseudo'];
		} else {
			echo "Vous n'avez pas de session en cours 😢";
		}
		?>

		<input type="button" onclick="window.location.href = 'M_Unlogin.php';" value="Se déconnecter" />
	</div>
</body>