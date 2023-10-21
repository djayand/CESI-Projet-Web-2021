<?php
session_start();
// Page "stage.html"
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Recherche de stage</title>
    <link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/styletable.css">
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>

	<header>
		<h1 class="grand_titre">Stages</h1>
	</header>

	<main>
		<section>
			<form method="post">
				<input type="search" name="rechercheS">
				<input type="submit" name="1" value="Rechercher"><br><br>
			</form>
			<br>
			<form method="post">
				<input type="submit" name="2" value="INSERER" />
				<input name=InsereIDS class="champ" type="text" placeholder="ID" size="2">
				<input name=Ides class="champ" type="text" placeholder="Description" maxlength="20" size="20">
				<input name=Icom class="champ" type="text" placeholder="Commentaire" maxlength="20" size="20">
				<input name=Ines class="champ" type="text" placeholder="Note étudiant" maxlength="32" size="4">
				<input name=Iduree class="champ" type="text" placeholder="Durée (semaine)" maxlength="10" size="4">
				<input name=Isalaire class="champ" type="text" placeholder="Salaire" maxlength="20" size="16">
				<input name=Idate class="champ" type="text" placeholder="Date début" maxlength="20" size="16">
				<input name=Itype class="champ" type="text" placeholder="Promo" maxlength="20" size="8">
				<input name=Inpo class="champ" type="text" placeholder="Nbre places" maxlength="20" size="20">
				<input name=ICS class="champ" type="text" placeholder="Convention" maxlength="20" size="4">
				<input name=IFV class="champ" type="text" placeholder="Fiche V" maxlength="20" size="4">
				<input name=IIDE class="champ" type="text" placeholder="ID_Etp" maxlength="20" size="4">
			</form>
			<br>
			<form method="post">
			<input type="submit" name="3" value="MODIFIER" />
				<input name=ModifieIDS class="champ" type="text" placeholder="ID" size="2">
				<input name=Mdes class="champ" type="text" placeholder="Description" maxlength="20" size="20">
				<input name=Mcom class="champ" type="text" placeholder="Commentaire" maxlength="20" size="20">
				<input name=Mnes class="champ" type="text" placeholder="Note étudiant" maxlength="32" size="4">
				<input name=Mduree class="champ" type="text" placeholder="Durée (semaine)" maxlength="10" size="4">
				<input name=Msalaire class="champ" type="text" placeholder="Salaire" maxlength="20" size="16">
				<input name=Mdate class="champ" type="text" placeholder="Date début" maxlength="20" size="16">
				<input name=Mtype class="champ" type="text" placeholder="Promo" maxlength="20" size="8">
				<input name=Mnpo class="champ" type="text" placeholder="Nbre places" maxlength="20" size="20">
				<input name=MCS class="champ" type="text" placeholder="Convention" maxlength="20" size="4">
				<input name=MFV class="champ" type="text" placeholder="Fiche V" maxlength="20" size="4">
				<input name=MIDE class="champ" type="text" placeholder="ID_Etp" maxlength="20" size="4">
			</form>
			<br>
			<form method="post">
				<input type="search" name="SupprimeIDS" placeholder="ID" size="4">
				<input type="submit" name="4" value="SUPPRIMER (Attention c'est dangereux)" />
			</form>
			<br>
			<div>
				<?php
				include('../Modeles/M_Stage.php');
				?>
			</div>
		</section>
	</main>
</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>