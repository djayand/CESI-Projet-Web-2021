<?php

// S'il n'y a pas de données envoyées, on quitte la page
if (!isset($_POST))
    exit();

// Choix a réaliser : Le numéro envoyé par POST va déterminer si ça concerne un pilote/étudiant/délégué/admin
if (isset($_POST['1'])) {
    $rechercheE = $_POST['rechercheE'];
    include('../Controleur/C_Entreprise1.php');

} elseif (isset($_POST['2'])) {
    $InsereIDE = $_POST['InsereIDE'];
    $Inom = $_POST['Inom'];
    $Isa = $_POST['Isa'];
    $Ieval = $_POST['Ieval'];
    $IconfP = $_POST['IconfP'];
    $INB = $_POST['INB'];
    $Ipays = $_POST['Ipays'];
    $Iville = $_POST['Iville'];
    $ICP = $_POST['ICP'];
    $Irue = $_POST['Irue'];
    $In = $_POST['In'];
    include('../Controleur/C_Entreprise2.php');

} elseif (isset($_POST['3'])) {
    $ModifieIDE = $_POST['ModifieIDE'];
    $Mnom = $_POST['Mnom'];
    $Msa = $_POST['Msa'];
    $Meval = $_POST['Meval'];
    $MconfP = $_POST['MconfP'];
    $MNB = $_POST['MNB'];
    $Mpays = $_POST['Mpays'];
    $Mville = $_POST['Mville'];
    $MCP = $_POST['MCP'];
    $Mrue = $_POST['Mrue'];
    $Mn = $_POST['Mn'];
    include('../Controleur/C_Entreprise3.php');

} elseif (isset($_POST['4'])) {
    $SupprimeIDE = $_POST['SupprimeIDE'];
    include('../Controleur/C_Entreprise4.php');

} else {/* 404 */
}
