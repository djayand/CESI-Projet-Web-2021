<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'acceuil</title>
    <link rel="stylesheet" type="text/css" href="../../ressources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../ressources/css/style.css">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Icons font CSS-->
    <link href="../../ressources/colorlib-regform-3/vendor/mdi-font/css/material-design-iconic-font.min.css"
        rel="stylesheet" media="all">
    <link href="../../ressources/colorlib-regform-3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="../../ressources/colorlib-regform-3/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../ressources/colorlib-regform-3/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../../ressources/colorlib-regform-3/css/main.css" rel="stylesheet" media="all">
</head>

<header>
    <?php include('header.php'); ?>
</header>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-body">
                    <h2 class="title">CESI-LDH</h2>
                    <div class="container">
                        <h4 class="title"> Bienvenue sur LDH, l'outil CESI de recherche de stage !</h2>
                            <h6 class="title">
                                Sur notre plateforme, tu pourras rechercher des entreprises et des stages partenaires de
                                l'école !
                                Tu pourras également importer tes CV et tes lettres de motivation..</h3>
                                <input class="btn btn-primary" type="button"
                                    onclick="window.location.href = 'Menu.php';" value="Commencer" />
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../ressources/colorlib-regform-3/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../../ressources/colorlib-regform-3/vendor/select2/select2.min.js"></script>
    <script src="../../ressources/colorlib-regform-3/vendor/datepicker/moment.min.js"></script>
    <script src="../../ressources/colorlib-regform-3/vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="../../ressources/colorlib-regform-3/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<footer>
    <?php include('footer.php'); ?>
</footer>

</html>