<?php
session_start();

// S'il n'y a pas de données envoyées, on quitte la page
if (!isset($_POST))
    exit();

//Récupération des données envoyées
$recherche = $_POST['recherche'];
$choixmembre = "";
$elsa = 0;


// Choix a réaliser : Le numéro envoyé par POST va déterminer si ça concerne un pilote/étudiant/délégué/admin
// La variable "elsa" va déterminer si on sélectionne/supprime/insère/modifie des données.
if (isset($_POST['1'])) {
    $choixmembre = "Administrateur";
    $elsa = 1;
} elseif (isset($_POST['2'])) {
    $choixmembre = "Délégué"; 
    $elsa = 1;
} elseif (isset($_POST['3'])) {
    $choixmembre = "Etudiant";
    $elsa = 1; 
} elseif (isset($_POST['4'])) {
    $choixmembre = "Pilote";
    $elsa = 1;
} elseif (isset($_POST['5'])) {
    $choixmembre = "Administrateur"; 
    $elsa = 2;
} elseif (isset($_POST['6'])) {
    $choixmembre = "Délégué";
    $elsa = 2; 
} elseif (isset($_POST['7'])) {
    $choixmembre = "Etudiant";
    $elsa = 2;
} elseif (isset($_POST['8'])) {
    $choixmembre = "Pilote"; 
    $elsa = 2;
} elseif (isset($_POST['9'])) {
    $choixmembre = "Administrateur";
    $elsa = 3; 
} elseif (isset($_POST['10'])) {
    $choixmembre = "Délégué";
    $elsa = 3;
} elseif (isset($_POST['11'])) {
    $choixmembre = "Etudiant"; 
    $elsa = 3;
} elseif (isset($_POST['12'])) {
    $choixmembre = "Pilote";
    $elsa = 3; 
} elseif (isset($_POST['13'])) {
    $choixmembre = "Administrateur"; 
    $elsa = 4;
} elseif (isset($_POST['14'])) {
    $choixmembre = "Délégué";
    $elsa = 4; 
} elseif (isset($_POST['15'])) {
    $choixmembre = "Etudiant";
    $elsa = 4;
} elseif (isset($_POST['16'])) {
    $choixmembre = "Pilote"; 
    $elsa = 4;
} else {/* 404 */}



if ($elsa = 1) {

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
} elseif ($elsa = 2) {
} elseif ($elsa = 3) {
} elseif ($elsa = 4) {
} else {/* 404 */}
?>