<?php

// S'il n'y a pas de données envoyées, on quitte la page
if (!isset($_POST))
    exit();

// Choix a réaliser : Le numéro envoyé par POST va déterminer si ça concerne un pilote/étudiant/délégué/admin
if (isset($_POST['1'])) {
    $recherche = $_POST['recherche'];
    include('M_Entreprise1.php');

} elseif (isset($_POST['2'])) {
    $InsereIDE = $_POST['ModifieIDE'];
    $Inom = $_POST['Inom'];
    $Isa = $_POST['Isa'];
    $Ieval = $_POST['Ieval'];
    $IconfP = $_POST['IconfP'];
    $Ipays = $_POST['Ipays'];
    $Iville = $_POST['Iville'];
    $ICP = $_POST['ICP'];
    $Irue = $_POST['Irue'];
    $In = $_POST['In'];
    include('M_Entreprise2.php');

} elseif (isset($_POST['3'])) {
    $MnsereIDE = $_POST['ModifieIDE'];
    $Mnom = $_POST['Mnom'];
    $Msa = $_POST['Msa'];
    $Meval = $_POST['Meval'];
    $MconfP = $_POST['MconfP'];
    $Mpays = $_POST['Mpays'];
    $Mville = $_POST['Mville'];
    $MCP = $_POST['MCP'];
    $Mrue = $_POST['Mrue'];
    $Mn = $_POST['Mn'];
    include('M_Entreprise3.php');

} elseif (isset($_POST['4'])) {
    $SupprimeIDE = $_POST['SupprimeIDE'];
    include('M_Entreprise4.php');

} else {/* 404 */
}
