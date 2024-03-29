<?php
require("../Modeles/M_fonctions.php");
// Fichier qui gère l'insertion de personnes

// Vérification des caractères (pour éviter toute injection SQL)
Verification($Inom);
Verification($Iprenom);
Verification($Imail);
Verification($Inum);
Verification($Ilog);
VerificationPwd($Imdp);

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête d'insertion
    $q1 = "INSERT INTO personne (ID_Personne, Nom, Prenom, Mail, Portable, Login, Mdp) 
    VALUES (NULL, '$Inom', '$Iprenom', '$Imail', '$Inum', '$Ilog', '$Imdp')";
    $q2 = "INSERT INTO possederole (ID_Role, ID_Personne) 
    VALUES ($Irole, $InsereID)";
    
    $db->query($q1);
    // $db->query($q2);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>