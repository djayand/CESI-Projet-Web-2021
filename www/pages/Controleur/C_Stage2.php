<?php
require("../Modeles/M_fonctions.php");
// Fichier qui gère l'insertion de stages

// Vérification des caractères (pour éviter toute injection SQL)
Verification($Ides);
Verification($Icom);
Verification($Ines);
Verification($Iduree);
Verification($Isalaire);
Verification($Idate);
Verification($Itype);
Verification($Inpo);
Verification($ICS);
Verification($IFV);
Verification($IIDE);

try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // Requête d'insertion
    $q1 = "INSERT INTO stage (ID_Stage, Descriptif_stage, Commentaire_stage, Note_etudiant_stage, Duree_stage, Base_remuneration,
    Date_offre, Type_promos, Nbre_places_offertes, Convention_stage, Fiche_validation, ID_Entreprise) 
    VALUES (NULL, '$Ides', '$Icom', '$Ines', '$Iduree', '$Isalaire', '$Idate', '$Itype', '$Inpo', '$ICS', '$IFV', '$IIDE')";
    
    $db->query($q1);

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>