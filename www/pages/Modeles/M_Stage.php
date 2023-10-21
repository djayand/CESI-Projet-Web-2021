<?php

// S'il n'y a pas de données envoyées, on quitte la page
if (!isset($_POST))
    exit();

// Choix a réaliser : Le numéro envoyé par POST va déterminer si ça concerne un pilote/étudiant/délégué/admin
if (isset($_POST['1'])) {
    $recherche = $_POST['rechercheS'];
    include('../Controleur/C_Stage1.php');

} elseif (isset($_POST['2'])) {
    $InsereIDS = $_POST['InsereIDS'];
    $Ides = $_POST['Ides'];
    $Icom = $_POST['Icom'];
    $Ines = $_POST['Ines'];
    $Iduree = $_POST['Iduree'];
    $Isalaire = $_POST['Isalaire'];
    $Idate = $_POST['Idate'];
    $Itype = $_POST['Itype'];
    $Inpo = $_POST['Inpo'];
    $ICS = $_POST['ICS'];
    $IFV = $_POST['IFV'];
    $IIDE = $_POST['IIDE'];
    include('../Controleur/C_Stage2.php');

} elseif (isset($_POST['3'])) {
    $ModifieIDS = $_POST['ModifieIDS'];
    $Mdes = $_POST['Mdes'];
    $Mcom = $_POST['Mcom'];
    $Mnes = $_POST['Mnes'];
    $Mduree = $_POST['Mduree'];
    $Msalaire = $_POST['Msalaire'];
    $Mdate = $_POST['Mdate'];
    $Mtype = $_POST['Mtype'];
    $Mnpo = $_POST['Mnpo'];
    $MCS = $_POST['MCS'];
    $MFV = $_POST['MFV'];
    $MIDE = $_POST['MIDE'];
    include('../Controleur/C_Stage3.php');

} elseif (isset($_POST['4'])) {
    $SupprimeIDS = $_POST['SupprimeIDS'];
    include('../Controleur/C_Stage4.php');

} else {/* 404 */
}
