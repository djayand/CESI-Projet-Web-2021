<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Recherche de stage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<header>
    <?php include('header.php'); ?>	
</header>

<body>
<main>
	<section>
		<h1 class="grand_titre">STAGE</h1>
		<div class="aspect_btn">
			<input class="btn btn-primary" type="button" onclick="window.location.href = 'Login.php';" value="Commencer"/>
		</div>
	</section>

	<article class="bordure">
		<h2 class="moyen_titre">Le Projet</h2>
		<p class="col-xs-4 col-sm-4 col-md-12 col-lg-12 texte">
		Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales.<br>

		Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.<br>

		Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.<br><br>
		</p>
		<div>
		
		<?php
        /* Connexion à une base MySQL avec l'invocation de pilote */
        $dsn = 'mysql:dbname=ldh;host=127.0.0.1';
        $user = 'root';
        $password = 'joaofelix';

        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }

        $sql =  'SELECT * FROM entreprise';

        // Affichage HTML
        echo
        "<table border='2'>
        <tr>
        <th>ID de l'entreprise</th>
        <th>Nom de l'entreprise</th>
        <th>Secteur d'activité</th>
        <th>Evaluation entreprise</th>
        <th>Confiance du pilote</th>
        <th>Nbre de stages validés</th>
        </tr>";

        // Récupérations valeurs
        foreach ($dbh->query($sql) as $row) {
            echo "<tr>";
            echo "<td>" . $row['ID_Entreprise'] . "</td>";
            echo "<td>" . $row['Nom_entreprise'] . "</td>";
            echo "<td>" . $row['Secteur_activite'] . "</td>";
            echo "<td>" . $row['Evaluation_entreprise'] . "</td>";
            echo "<td>" . $row['Confiance_pilote'] . "</td>";
            echo "<td>" . $row['NB_stage_validee'] . "</td>";
        }
        echo "</table>";
        ?>
		
		</div>

	</article>
</main>

<footer>
	<?php include('footer.php'); ?>
</footer>

</body>
</html>