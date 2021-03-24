<body>
	<ul class=hdr>
		<li><a href="index.php">Acceuil</a></li>
		<li><a href="login.php">Connexion</a></li>
		<li><a href="inscription.php">Inscription</a></li>
	</ul>

	<?php
	if (isset($_SESSION['pseudo'])) {
		echo 'Bonjour,' . $_SESSION['pseudo'];
	} else {
		echo "Vous n'avez pas de session en cours 😢";
	}
	?>

<input class="btn btn-primary" type="button" onclick="window.location.href = 'M_Unlogin.php';" value="Se déconnecter"/>

</body>