<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../../ressources/js/app.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
    <link rel="apple-touch-icon" href="../../ressources/img/icon96x96.jpg">
    <link rel="manifest" href="../../ressources/manifest.json">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta name="theme-color" content="#FFFF" />
</head>

<header>
    <?php include('header.php'); ?>
</header>

<body>
    <main>
        <section>
            <h1 class="grand_titre">STAGE</h1>
            <div class="aspect_btn">
                <input class="btn btn-primary" type="button" onclick="window.location.href = 'Login.php';" value="Commencer" />
            </div>
        </section>

        <article class="bordure">
            <h2 class="moyen_titre">Le Projet</h2>
            <p class="col-xs-4 col-sm-4 col-md-12 col-lg-12 texte">

                Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales.<br>

                Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.<br>

                Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.<br><br>
            </p>
        </article>
    </main>

    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>

</html>