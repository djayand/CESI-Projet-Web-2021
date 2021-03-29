<?php
session_start();

if (!isset($_POST))
    exit();

//Récupération des données envoyées
$pseudo = $_POST['pseudo'];
$pass = $_POST['pass'];

// Connexion à la BDD
try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // On créé une requête de recherche
    $q = "SELECT * FROM personne WHERE Login = " . $db->quote($pseudo) . " AND Mdp = " . $db->quote($pass);
    $r = $db->query($q);

    // Vérification de l'existance de la personne
    if (!$r) {
        throw new Exception("Erreur dans la requete");
    } else {
        if ($r->fetch()) {
            //Démarre une session à son nom
            $_SESSION['pseudo'] = $pseudo;

            // On va chercher le rôle et l'ID de la personne
            $q2 = "SELECT ID_Personne FROM personne WHERE Login = '$pseudo' AND Mdp = '$pass'";
            $r2 = $db->query($q2);

            if($row = $r2->fetch(PDO::FETCH_ASSOC)){
                //Affichage de la premiere colonne
                setcookie('ID', $row['ID_Personne'], time() + 7 * 24 * 3600, null, null, false, true);
            }

            // Cookie
            setcookie('pseudo', $pseudo, time() + 7 * 24 * 3600, null, null, false, true);
            header('location: index.php');
        } else {
            echo "Erreur durant la connection";
        }
    }
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
var_dump($_POST);
