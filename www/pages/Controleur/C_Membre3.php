<?php
require("../Modeles/M_fonctions.php");
// Fichier qui gère la modification de personnes

// Vérification des caractères (pour éviter toute injection SQL)
Verification($Inom);
Verification($Iprenom);
Verification($Imail);
Verification($Inum);
Verification($Ilog);
VerificationPwd($Imdp);

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête de mise a jour
    $q1 = "UPDATE personne SET 
    Nom = '$Mnom', 
    Prenom = '$Mprenom', 
    Mail = '$Mmail', 
    Portable = '$Mnum', 
    Login = '$Mlog', 
    Mdp = '$Mmdp' 
    WHERE personne.ID_Personne = $ModifieID";
    $q2 = "UPDATE possederole SET ID_Role = '$Mrole'
    WHERE personne.ID_Personne = $ModifieID";

    $db->query($q1);
    $db->query($q2);
    
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>