<?php
require("../Modeles/M_fonctions.php");
// Fichier qui gère la modification de stages

// Vérification des caractères (pour éviter toute injection SQL)
Verification($Mdes);
Verification($Mcom);
Verification($Mnes);
Verification($Mduree);
Verification($Msalaire);
Verification($Mdate);
Verification($Mtype);
Verification($Mnpo);
Verification($MCS);
Verification($MFV);
Verification($MIDE);

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête de mise a jour
    $q1 = "UPDATE stage SET 
    Descriptif_stage = '$Mdes', 
    Commentaire_stage = '$Mcom', 
    Note_etudiant_stage = '$Mnes', 
    Duree_stage = '$Mduree', 
    Base_remuneration = '$Msalaire', 
    Date_offre = '$Mdate', 
    DType_promos = '$Mtype', 
    Nbre_places_offertes = '$Mnpo'
    Convention_stage = '$MCS', 
    Fiche_validation = '$MFV', 
    ID_Entreprise = '$MIDE', 
    WHERE stage.ID_Stage = $ModifieIDS";

    $db->query($q1);
    
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>