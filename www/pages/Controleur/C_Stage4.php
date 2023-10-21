<?php
// Fichier qui gère la suppresion de stages

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête de suppresion
    $q1 = "DELETE FROM stage WHERE stage.ID_Stage = $SupprimeIDS";
    // $q2 = "DELETE FROM localisation WHERE localisation.ID_Entreprise = $SupprimeIDS";

    // $db->query($q2);
    $db->query($q1);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
