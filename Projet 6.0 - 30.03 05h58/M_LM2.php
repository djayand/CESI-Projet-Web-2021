<?php

// Fichier qui gère l'insertion d'une LM

$lm = $_POST['importLM'];
$cid = $_COOKIE['ID'];
$elsa = 0;
$db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

try {

    // Requête d'insertion
    $q1 = "INSERT INTO lm (ID_LM, LM) VALUES (NULL, '$lm')";
    $r1 = $db->query($q1);

    // Récupération du dernier ID
    $q2 = "SELECT MAX(ID_LM) FROM lm";
    $r2 = $db->query($q2);

    if ($row = $r2->fetch(PDO::FETCH_ASSOC)) {
        $elsa = $row['MAX(ID_LM)'];
    }

    // Entrée de la nouvelle requête en fonction de la session et du dernier ID entré
    $q3 = "INSERT INTO possedelm (ID_LM, ID_Personne) VALUES ($elsa, $cid)";
    $r3 = $db->query($q3);
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
