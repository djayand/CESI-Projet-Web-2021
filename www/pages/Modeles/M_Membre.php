<?php

// S'il n'y a pas de données envoyées, on quitte la page
if (!isset($_POST))
    exit();

$choixmembre = "";

// Choix a réaliser : Le numéro envoyé par POST va déterminer si ça concerne un pilote/étudiant/délégué/admin
if (isset($_POST['1'])) {
    $rechercheM = $_POST['rechercheM'];
    $choixmembre = "Administrateur";
    include('../Controleur/C_Membre1.php');

} elseif (isset($_POST['2'])) {
    $rechercheM = $_POST['rechercheM'];
    $choixmembre = "Délégué";
    include('../Controleur/C_Membre1.php');

} elseif (isset($_POST['3'])) {
    $rechercheM = $_POST['rechercheM'];
    $choixmembre = "Etudiant";
    include('../Controleur/C_Membre1.php');

} elseif (isset($_POST['4'])) {
    $rechercheM = $_POST['rechercheM'];
    $choixmembre = "Pilote";
    include('../Controleur/C_Membre1.php');

} elseif (isset($_POST['5'])) {
    $InsereID = $_POST['InsereIDM'];
    $Inom = $_POST['Inom'];
    $Iprenom = $_POST['Iprenom'];
    $Imail = $_POST['Imail'];
    $Inum = $_POST['Inum'];
    $Ilog = $_POST['Ilog'];
    $Imdp = $_POST['Imdp'];
    $Irole = $_POST['Irole'];
    include('../Controleur/C_Membre2.php');

} elseif (isset($_POST['6'])) {
    $ModifieID = $_POST['ModifieIDM'];
    $Mnom = $_POST['Mnom'];
    $Mprenom = $_POST['Mprenom'];
    $Mmail = $_POST['Mmail'];
    $Mnum = $_POST['Mnum'];
    $Mlog = $_POST['Mlog'];
    $Mmdp = $_POST['Mmdp'];
    $Mrole = $_POST['Mrole'];
    include('../Controleur/C_Membre3.php');

} elseif (isset($_POST['7'])) {
    $SupprimeID = $_POST['SupprimeIDM'];
    include('../Controleur/C_Membre4.php');

} else {/* 404 */
}
