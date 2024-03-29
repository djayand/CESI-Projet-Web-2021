<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
    <script src="script.js"></script>
</head>

<header>
    <?php include('header.php'); ?>	
</header>

<body>
    <header>
        <h1>Nom de l'entreprise</h1>
    </header>

    <main>
        <p>
            Une entreprise également appelée firme, compagnie société et familièrement boite ou business est une
            organisation ou une unité institutionnelle, mue par un projet décliné en stratégie, en politiques et en
            plans d'action, dont le but est de produire et de fournir des biens ou des services à destination d'un
            ensemble de clients, en réalisant un équilibre de ses comptes de charges et de produits.
        </p>

        <div>
            NOTE MOYENNE TUTEUR
        </div>

        <div>
            NOTE MOYENNE ELEVE
        </div>
        <section>
            <h2>LES STAGE</h2>
            <article>
                <h3>DATE DU STAGE : </h3>
                <div>NOTE: </div>
                <p>
                    Un stage est le plus souvent une période de formation, d'apprentissage ou de perfectionnement qui
                    dure quelques jours à plusieurs mois dans un lieu approprié :

                    en entreprise pour formation initiale ou continue ;
                    au collège, au lycée ou au-delà pour se perfectionner ou pour découvrir le monde de l'entreprise ;
                    en administration, pour formation initiale ou continue ou préparation aux concours.
                </p>
            </article>
        </section>
    </main>

</body>

<footer>
	<?php include('footer.php'); ?>
</footer>

</html>