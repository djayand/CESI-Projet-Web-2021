<link rel="stylesheet" type="text/css" href="./css/stylefh.css">

<body>
	<div class=hdr>
		<a href="index.php">Acceuil</a>

		<?php 
		if (!isset($_COOKIE['pseudo']))
		{
		echo '<a href="login.php">Connexion</a>';
		echo '<a href="inscription.php">Inscription</a>';}
		else
		{echo '<a href="M_Unlogin.php">Se déconnecter</a>';}
		
		if (isset($_COOKIE['pseudo']))
		{
		echo '<a href="Menu.php">Menu</a>';
		echo '<a href="entreprise.php">Entreprises</a>';
		echo '<a href="membre.php">Membres</a>';
		echo '<a href="mesLM.php">Mes lettres</a>';
		echo '<a href="MesCV.php">Mes CV</a>';
		echo '<a href="Parametre.php">Paramètres</a>';
		}
		?>
		<a href="mention.php">Mentions Légales</a>
	</div>

	<div class=hdr2>
		<?php
		if (isset($_SESSION['pseudo'])) {
			echo ' Bonjour ' . $_SESSION['pseudo'] . ' ! Comment vas tu ? 😎';
		} else {
			echo " Vous n'avez pas de session en cours 😢";
		}
		?>

	</div>
</body>