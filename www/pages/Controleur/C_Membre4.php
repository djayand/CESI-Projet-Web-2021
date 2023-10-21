<?php

// Fichier qui gère la suppresion de personnes
try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête de suppresion
    $q1 = "DELETE FROM personne WHERE personne.ID_Personne = $SupprimeID";
    $q2 = "DELETE FROM possederole WHERE possederole.ID_Personne = $SupprimeID";
    $q3 = "SELECT Mdp FROM personne WHERE ID_Personne = '$SupprimeID'";

    /*
    $r3 = $db->query($q3);
    $r3->fetch();

    if ($SupprimePwd = $r3)
    {
        $r2 = $db->query($q2);
        $r1 = $db->query($q1);
        echo "Personne supprimée !";
    }
    else {
        echo "Mot de passe eronné";
    }
    */

    //INSERT INTO `personne` (`ID_Personne`, `Nom`, `Prenom`, `Mail`, `Portable`, `Login`, `Mdp`) VALUES ('7', 'felix', 'joao', 'azer', '06', 'ad', 'ad');
    //INSERT INTO `possederole` (`ID_Role`, `ID_Personne`) VALUES ('2', '7');

    $db->query($q2);
    $db->query($q1);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
