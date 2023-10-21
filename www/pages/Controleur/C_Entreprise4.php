<?php
// Fichier qui gère la suppresion d'entreprises

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête de suppresion
    $q1 = "DELETE FROM entreprise WHERE entreprise.ID_Entreprise = $SupprimeID";
    $q2 = "DELETE FROM localisation WHERE localisation.ID_Entreprise = $SupprimeID";

    $db->query($q2);
    $db->query($q1);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
