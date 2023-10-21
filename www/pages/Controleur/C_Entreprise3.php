<?php
require("../Modeles/M_fonctions.php");
// Fichier qui gère la modification d'entreprises

// Vérification des caractères (pour éviter toute injection SQL)
Verification($Inom);
Verification($Iprenom);
Verification($Imail);
Verification($Inum);
Verification($Ilog);
Verification($Imdp);

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête de mise a jour
    $q1 = "UPDATE entreprise SET 
    Nom_entreprise = '$Mnom', 
    Secteur_activite = '$Msa', 
    Evaluation_entreprise = '$Meval', 
    Confiance_pilote = '$MconfP', 
    NB_stage_validee = '$MNB', 
    WHERE entreprise.ID_Entreprise = $ModifieIDE";
    $q2 = "UPDATE localisation SET
    Pays = '$Mpays', 
    Ville = '$Mville', 
    CP = '$MCP', 
    Rue = '$Mrue', 
    Numero = '$Mn'
    ";

    $db->query($q1);
    $db->query($q2);
    
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>