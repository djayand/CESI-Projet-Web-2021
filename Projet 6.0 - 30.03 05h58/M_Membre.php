<?php

// S'il n'y a pas de données envoyées, on quitte la page
if (!isset($_POST))
    exit();

//Récupération des données envoyées
$choixmembre = "";


// Choix a réaliser : Le numéro envoyé par POST va déterminer si ça concerne un pilote/étudiant/délégué/admin
if (isset($_POST['1'])) {
    $recherche = $_POST['recherche'];
    $choixmembre = "Administrateur";
    include('M_Membre1.php');

} elseif (isset($_POST['2'])) {
    $recherche = $_POST['recherche'];
    $choixmembre = "Délégué";
    include('M_Membre1.php');

} elseif (isset($_POST['3'])) {
    $recherche = $_POST['recherche'];
    $choixmembre = "Etudiant";
    include('M_Membre1.php');

} elseif (isset($_POST['4'])) {
    $recherche = $_POST['recherche'];
    $choixmembre = "Pilote";
    include('M_Membre1.php');

} elseif (isset($_POST['5'])) {
    $InsereID = $_POST['InsereID'];
    $Inom = $_POST['Inom'];
    $Iprenom = $_POST['Iprenom'];
    $Imail = $_POST['Imail'];
    $Inum = $_POST['Inum'];
    $Ilog = $_POST['Ilog'];
    $Imdp = $_POST['Imdp'];
    $Irole = $_POST['Irole'];
    include('M_Membre2.php');

} elseif (isset($_POST['6'])) {
    $ModifieID = $_POST['ModifieID'];
    $Mnom = $_POST['Mnom'];
    $Mprenom = $_POST['Mprenom'];
    $Mmail = $_POST['Mmail'];
    $Mnum = $_POST['Mnum'];
    $Mlog = $_POST['Mlog'];
    $Mmdp = $_POST['Mmdp'];
    $Mrole = $_POST['Mrole'];
    include('M_Membre3.php');

} elseif (isset($_POST['7'])) {
    $SupprimeID = $_POST['SupprimeID'];
    include('M_Membre4.php');

} else {/* 404 */
}
