<?php

$lm = $_POST['importLM'];
//$cid = $_COOKIE['ID'];

// Fichier qui gère l'insertion de personnes
try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête d'insertion
    $q1 = "INSERT INTO lm (ID_LM, LM) VALUES (NULL, $lm)";
    //$elsa = PDO::lastInsertId();
    //$q2 = "INSERT INTO possedecv (ID_CV, ID_Personne) VALUES ($elsa, $cid)";
    
    $db->query($q1);
    //$db->query($q2);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>