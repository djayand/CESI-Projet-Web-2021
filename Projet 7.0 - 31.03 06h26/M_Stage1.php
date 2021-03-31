<?php
require("fonctions.php");
// Fichier qui gère la recherche de stages

// Vérification qu'il y a un formulaire d'envoyé
if (!isset($_POST))
    exit();

try {
    //Récupération des données envoyées
    $recherche = $_POST['recherche'];
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Vérification des caractères (pour éviter toute injection SQL)
    Verification($recherche);

    // On prépare une requête de recherche de stage
    $sql = "SELECT	
    stage.ID_Stage,
    stage.Descriptif_stage,
    stage.Commentaire_stage,	
    stage.Note_etudiant_stage,
    stage.Duree_stage,
    stage.Base_remuneration,
    stage.Date_offre,
    stage.Type_promos,
    stage.Nbre_places_offertes,
    stage.ID_Entreprise
    FROM	
    stage
    WHERE stage.Descriptif_stage LIKE '%$recherche%' ";

    $r = $db->query($sql);

    /* On utilise les requêtes préparées pour protéger des injections SQL
    $sth = $db->prepare($sql);
    $sth->execute(["recherche" => $recherche]);
    $sth->bindParam(':recherche', $recherche);
    $req = $sth->fetchAll();*/

    // Affichage HTML
    echo
    "<table border='2'>
    <tr>
    <th>Descriptif</th>
    <th>Note étudiant</th>
    <th>Durée (semaine)</th>
    <th>Salaire</th>
    <th>Nbre de stages validés</th>
    <th>Date de début</th>
    <th>Promo visée</th>
    <th>Nombre de places offertes</th>
    <th>Entreprise</th>
    </tr>";

    // Récupérations valeurs
    foreach ($db->query($sql) as $row) {
        echo "<tr>";
        echo "<td>" . $row['Descriptif_stage'] . "</td>";
        echo "<td>" . $row['Commentaire_stage'] . "</td>";
        echo "<td>" . $row['Note_etudiant_stage'] . "</td>";
        echo "<td>" . $row['Duree_stage'] . "</td>";
        echo "<td>" . $row['Base_remuneration'] . "</td>";
        echo "<td>" . $row['Date_offre'] . "</td>";
        echo "<td>" . $row['Type_promos'] . "</td>";
        echo "<td>" . $row['Nbre_places_offertes'] . "</td>";
        echo "<td>" . $row['ID_Entreprise'] . "</td>";
        echo "<td onclick=location.href='index.php'>❤</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
