<?php

if (!isset($_POST))
    exit();

//Récupération des données envoyées
$recherche = $_POST['recherche'];

// Connexion à la BDD
try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // On créé une requête de recherche
    $q = "SELECT	
    entreprise.Nom_entreprise,
    entreprise.Secteur_activite,
    entreprise.Evaluation_entreprise,	
    entreprise.Confiance_pilote,
    entreprise.NB_stage_validee,
    localisation.Numero,
    localisation.Rue,
    localisation.Ville,
    localisation.CP,
    localisation.Pays
    FROM	
    ldh.entreprise AS entreprise
    INNER JOIN ldh.localisation AS localisation
        ON entreprise.ID_Entreprise = localisation.ID_Entreprise
    WHERE	entreprise.Nom_entreprise LIKE '%". $recherche ."%'";
    $r = $db->query($q);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}

// Affichage HTML
echo
"<table border='2'>
<tr>
<th>Nom de l'entreprise</th>
<th>Secteur d'activité</th>
<th>Note</th>
<th>Confiance du pilote</th>
<th>Nbre de stages validés</th>
<th>N°</th>
<th>Rue</th>
<th>Ville</th>
<th>CP</th>
<th>Pays</th>
</tr>";

// Récupérations valeurs
foreach ($db->query($q) as $row) {
    echo "<tr>";
    echo "<td>" . $row['Nom_entreprise'] . "</td>";
    echo "<td>" . $row['Secteur_activite'] . "</td>";
    echo "<td>" . $row['Evaluation_entreprise'] . "</td>";
    echo "<td>" . $row['Confiance_pilote'] . "</td>";
    echo "<td>" . $row['NB_stage_validee'] . "</td>";
    echo "<td>" . $row['NB_stage_validee'] . "</td>";
    echo "<td>" . $row['Numero'] . "</td>";
    echo "<td>" . $row['Ville'] . "</td>";
    echo "<td>" . $row['CP'] . "</td>";
    echo "<td>" . $row['Pays'] . "</td>";
}
echo "</table>";
?>