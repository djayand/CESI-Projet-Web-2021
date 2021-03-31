<?php
require("fonctions.php");
// Fichier qui gère l'insertion de stages

// Vérification des caractères (pour éviter toute injection SQL)
Verification($Inom);
Verification($Iprenom);
VerificationEmail($Imail);
Verification($Inum);
Verification($Ilog);
VerificationPwd($Imdp);

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête d'insertion
    $q1 = "INSERT INTO entreprise (ID_Entreprise, Nom_entreprise, Secteur_activite, Evaluation_entreprise, Confiance_pilote, NB_stage_validee) 
    VALUES (NULL, '$Inom', '$Isa', '$Ieval', '$IconfP', '$INB')";
    $q2 = "INSERT INTO localisation (ID_Localisation, Pays, Ville, CP, Rue, Numero, ID_Entreprise) 
    VALUES (NULL, '$Ipays', '$Iville', '$ICP', '$Irue', '$In', '$InsereIDE')";
    
    $db->query($q1);
    // $db->query($q2);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>