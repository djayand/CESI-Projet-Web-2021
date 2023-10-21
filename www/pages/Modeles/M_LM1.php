<?php

// Fichier qui gère l'affichage des LM

$cid = $_COOKIE['ID'];
$db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

$q = "SELECT lm.LM 
FROM ldh.lm
INNER JOIN ldh.possedelm
	ON lm.ID_LM = possedelm.ID_LM
WHERE possedelm.ID_Personne = $cid";

// Affichage HTML
echo
"<table border='2'>
<tr>
<th>Lettres de motivations :</th>
</tr>";

// Récupérations valeurs
foreach ($db->query($q) as $row) {
    echo "<tr>";
    echo "<td>" . $row['LM'] . "</td>";
}
echo "</table>";

$db->query($q);
?>