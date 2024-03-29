<?php
session_start();
// Page "entreprise.html"
?>

<!DOCTYPE html>
<html lang="fr">

<html>

<head>
	<meta charset="utf-8">
	<title>Recherche d'entreprises</title>
    <link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
</head>

<header>
	<?php include('header.php'); ?>
</header>

<body>

	<header>
		<h1 class="grand_titre">Entreprises</h1>
	</header>

	<main>
		<section>
			<form method="post">
				<input type="search" name="rechercheE">
				<input type="submit" name="1" value="Rechercher"><br><br>
			</form>
			<br>
			<form method="post">
				<input type="submit" name="2" value="INSERER"/>
				<input name=InsereIDE class="champ" type="text" placeholder="ID" size="4">
				<input name=Inom class="champ" type="text" placeholder="Nom" maxlength="20" size="20">
				<input name=Isa class="champ" type="text" placeholder="Secteur activité" maxlength="20" size="20">
				<input name=Ieval class="champ" type="text" placeholder="Evaluation" maxlength="32" size="4" >
				<input name=IconfP class="champ" type="text" placeholder="Confiance Pilote" maxlength="10" size="4" >
				<input name=INB class="champ" type="text" placeholder="Nb Stage" maxlength="10" size="4" >
				<input name=Ipays class="champ" type="text" placeholder="Pays" maxlength="20" size="16">
				<input name=Iville class="champ" type="text" placeholder="Ville" maxlength="20" size="16">
				<input name=ICP class="champ" type="text" placeholder="CP" maxlength="20" size="8">
				<input name=Irue class="champ" type="text" placeholder="Rue" maxlength="20" size="20">
				<input name=In class="champ" type="text" placeholder="Numéro de Rue" maxlength="20" size="4">
			</form>
			<br>
			<form method="post">
			<input type="submit" name="2" value="MODIFIER"/>
				<input name=ModifierIDE class="champ" type="text" placeholder="ID" size="4">
				<input name=Mnom class="champ" type="text" placeholder="Nom" maxlength="20" size="20">
				<input name=Msa class="champ" type="text" placeholder="Secteur activité" maxlength="20" size="20">
				<input name=Meval class="champ" type="text" placeholder="Evaluation" maxlength="32" size="4" >
				<input name=MconfP class="champ" type="text" placeholder="Confiance Pilote" maxlength="10" size="4" >
				<input name=MNB class="champ" type="text" placeholder="Nb Stage" maxlength="10" size="4" >
				<input name=Mpays class="champ" type="text" placeholder="Pays" maxlength="20" size="16">
				<input name=Mville class="champ" type="text" placeholder="Ville" maxlength="20" size="16">
				<input name=MCP class="champ" type="text" placeholder="CP" maxlength="20" size="8">
				<input name=Mrue class="champ" type="text" placeholder="Rue" maxlength="20" size="20">
				<input name=Mn class="champ" type="text" placeholder="Numéro de Rue" maxlength="20" size="4">
			</form>
			<br>
			<form method="post">
				<input type="search" name="SupprimeIDE" placeholder="ID" size="4">
				<input type="submit" name="4" value="SUPPRIMER (Attention c'est dangereux)" />
			</form>
			<br>
			<div>
				<?php
				include('../Modeles/M_Entreprise.php');
				?>
			</div>
		</section>
	</main>
</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>