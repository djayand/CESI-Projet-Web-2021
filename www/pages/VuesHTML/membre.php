<?php
session_start();
// Page "membre.html"
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Recherche de membres</title>
    <link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
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
				<input type="search" name="rechercheM" placeholder="Nom, Prénom">
				<input type="submit" name="1" value="Admin" />
				<input type="submit" name="2" value="Délégué" />
				<input type="submit" name="3" value="Etudiant" />
				<input type="submit" name="4" value="Pilote de formation" />
			</form>
			<br>
			<form method="post">
				<input type="submit" name="5" value="INSERER" />
				<input name=InsereIDM class="champ" type="text" placeholder="ID" size="2">
				<input name=Inom class="champ" type="text" placeholder="Nom" maxlength="20" size="20">
				<input name=Iprenom class="champ" type="text" placeholder="Prénom" maxlength="20" size="20">
				<input name=Imail class="champ" type="text" placeholder="E-Mail" maxlength="32" size="20" >
				<input name=Inum class="champ" type="text" placeholder="Numéro Tel" maxlength="10" size="20" >
				<input name=Ilog class="champ" type="text" placeholder="Login" maxlength="20" size="20">
				<input name=Imdp class="champ" type="password" placeholder="********" maxlength="20" size="20" pattern=".{4,}">
				<select name=Irole class="champ">
					<option value="1">Administrateur</option>
					<option value="2">Délégué</option>
					<option value="3">Etudiant</option>
					<option value="4">Pilote</option>
				</select>
			</form>
			<br>
			<form method="post">
				<input type="submit" name="6" value="MODIFIER" />
				<input name=ModifieIDM class="champ" type="text" placeholder="ID" size="2" >
				<input name=Mnom class="champ" type="text" placeholder="Nom" maxlength="20" size="20" >
				<input name=Mprenom class="champ" type="text" placeholder="Prénom" maxlength="20" size="20" >
				<input name=Mmail class="champ" type="text" placeholder="E-Mail" maxlength="32" size="20" >
				<input name=Mnum class="champ" type="text" placeholder="Numéro Tel" maxlength="10" size="20">
				<input name=Mlog class="champ" type="text" placeholder="Login" maxlength="20" size="20" >
				<input name=Mmdp class="champ" type="password" placeholder="********" maxlength="20" size="20" pattern=".{4,}" >
				<select name=Mrole class="champ">
					<option value="1">Administrateur</option>
					<option value="2">Délégué</option>
					<option value="3">Etudiant</option>
					<option value="4">Pilote</option>
				</select>
			</form>
			<br>
			<form method="post">
				<input type="search" name="SupprimeID" placeholder="ID" size="4">
				<input type="submit" name="7" value="SUPPRIMER (Attention c'est dangereux)" />
			</form>
			<br>
			<div>
				<?php
				include('../Modeles/M_Membre.php');
				?>
			</div>
		</section>
	</main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>


</html>