<?php

// Fichier qui gère la lecture de personnes
try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête de recherche en fonction du choix et du champ de recherche
    $q = "SELECT 
    personne.Nom,
    personne.Prenom,
    role.Nom_role
    FROM
    ldh.personne AS personne
    INNER JOIN ldh.possederole AS possederole
        ON personne.ID_Personne = possederole.ID_Personne
    INNER JOIN ldh.role AS role
        ON possederole.ID_Role = role.ID_Role
    WHERE role.Nom_role = '$choixmembre' AND (personne.Nom LIKE '%$recherche%' OR personne.Prenom LIKE '%$recherche%')";
    
    $r = $db->query($q);
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}

// Affichage HTML
echo
"<table border='2'>
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Rôle</th>
</tr>";

// Récupérations valeurs
foreach ($db->query($q) as $row) {
    echo "<tr>";
    echo "<td>" . $row['Nom'] . "</td>";
    echo "<td>" . $row['Prenom'] . "</td>";
    echo "<td>" . $row['Nom_role'] . "</td>";
}
echo "</table>";
?>