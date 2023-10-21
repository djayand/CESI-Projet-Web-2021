<?php
// Fichier qui gère la recherche de stages

include("../Modeles/dbconfig.php");
?>
<table border='2'>
    <tr>
        <th>Descriptif du stage</th>
        <th>Commentaire du stage</th>
        <th>Note étudiant</th>
        <th>Durée (semaine)</th>
        <th>Rémunération</th>
        <th>Date offre</th>
        <th>Type promo</th>
        <th>Nombre places</th>
        <th>ID Entreprise</th>
    </tr>
    <?php
    $query = "SELECT	
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
        FROM stage
        WHERE stage.Descriptif_stage LIKE '%$recherche%'";
    $records_per_page = 5;
    $newquery = $paginate->paging($query, $records_per_page);
    $paginate->dataview($newquery);
    $paginate->paginglink($query, $records_per_page);
    ?>
</table>