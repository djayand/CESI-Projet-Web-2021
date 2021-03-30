<?php

// Fichier qui gère l'affichage des CV

$cid = $_COOKIE['ID'];
$db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

$q = "SELECT cv.CV 
FROM cv
INNER JOIN ldh.possedecv
	ON cv.ID_CV = possedecv.ID_CV
WHERE possedecv.ID_Personne = $cid";

// Affichage HTML
echo
"<table border='2'>
<tr>
<th>CV :</th>
</tr>";

// Récupérations valeurs
foreach ($db->query($q) as $row) {
    echo "<tr>";
    echo "<td>" . $row['CV'] . "</td>";
}
echo "</table>";

$db->query($q);
?>