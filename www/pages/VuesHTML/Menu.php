<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<header>
    <?php include('header.php'); ?>	
</header>

<body>

<header>
	<h1 class="grand_titre">Menu</h1>
</header>

<main>

	<br>
	<br>
	<ul class="liste col-md-9 col-lg-9">
		<li class="barre"><input class="btn btn-secondaire" type="button" onclick="window.location.href = 'MesCV.php';" value="MES CV"/></li>
		<li class="barre"><input class="btn btn-secondaire" type="button" onclick="window.location.href = 'MesLM.php';" value="LETTRE DE MOTIVATION"/></li>
		<li class="barre"><input class="btn btn-secondaire" type="button" onclick="window.location.href = 'entreprise.php';" value="ENTREPRISES"/></li>
		<li class="barre"><input class="btn btn-secondaire" type="button" onclick="window.location.href = 'stage.php';" value="OFFRES DE STAGES"/></li>
	</ul>

</main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>


</html>