<link rel="stylesheet" type="text/css" href="./css/stylefh.css">

<body>
	<div class=hdr>
		<a href="index.php">Acceuil</a>
		<a href="Menu.php">Menu</a>
		<a href="login.php">Connexion</a>
		<a href="inscription.php">Inscription</a>
		<a href="stage.php">Stage</a>
		<a href="ficheEntreprise.php">Fiche Entreprise</a>
		<a href="entreprise.php">Entreprises</a>
		<a href="membre.php">Pilotes</a>
		<a href="mesLM.php">Mes lettres</a>
		<a href="MesCV.php">Mes CV</a>
		<a href="Parametre.php">Paramètres</a>
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