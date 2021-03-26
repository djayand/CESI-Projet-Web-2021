<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Recherche-Stage</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="inscription.js"></script>
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>
	<main>
		<form action="M_Subscribe.php" method="post">
			<ul class="col-md-2 col-lg-2 liste">
				<li><label class="labbel">Nom :</label></li>
				<li><input name=inom class="champ" type="text" placeholder="Félix" maxlength="20" size="20" required></li>

				<li><label class="labbel">Prénom :</label></li>
				<li><input name=iprenom class="champ" type="text" placeholder="João" maxlength="20" size="20" required></li>

				<li><label class="labbel">Adresse Mail :</label></li>
				<li><input name=iemail class="champ" type="text" placeholder="example@fai.fr" maxlength="32" size="20" required></li>

				<li><label class="labbel">Numéro de portable :</label></li>
				<li><input name=inum class="champ" type="text" placeholder="0619031903" maxlength="10" size="20" required></li>

				<li><label class="labbel">Login :</label></li>
				<li><input name=ilog class="champ" type="text" placeholder="example85" maxlength="20" size="20" required></li>

				<li><label class="labbel">Mot de passe :</label></li>
				<li><input name=imdp1 class="champ" type="password" maxlength="20" size="20" pattern=".{4,}" required></li>

				<li><label class="labbel">Confirmer mot de passe :</label></li>
				<li><input name=imdp2 class="champ" type="password" maxlength="20" size="20" pattern=".{4,}" required></li>

				<li><label class="labbel">Promo :</label></li>
				<li><select name=ipromo class="champ">
						<option value="1">A1</option>
						<option value="2" selected>A2</option>
						<option value="3">A3</option>
						<option value="4">A4</option>
						<option value="5">A5</option>
					</select></li>

				<li><label class="labbel">Centre :</label></li>
				<li><select name=icentre class="btn_inf">
						<option value="1">Aix-en-Provence</option>
						<option value="2">Angoulême</option>
						<option value="3">Arras</option>
						<option value="4">Bordeaux</option>
						<option value="5">Brest</option>
						<option value="6">Caen</option>
						<option value="7">Châteauroux</option>
						<option value="8">Dijon</option>
						<option value="9">Grenoble</option>
						<option value="10">La Rochelle</option>
						<option value="11">Le Mans</option>
						<option value="12">Lille</option>
						<option value="13">Lyon</option>
						<option value="14">Montpellier</option>
						<option value="15" selected>Nancy</option>
						<option value="16">Nantes</option>
						<option value="17">Nice</option>
						<option value="18">Orléans</option>
						<option value="19">Paris Nanterre</option>
						<option value="20">Pau</option>
						<option value="21">Reims</option>
						<option value="22">Rouen</option>
						<option value="23">Saint-Nazaire</option>
						<option value="24">Strasbourg</option>
						<option value="25">Toulouse</option>
					</select></li>
				<br>
				<li><input type="submit" value="Valider" id="envoyer" class="btn-secondaire"></li>
			</ul>
		</form>
	</main>
</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>