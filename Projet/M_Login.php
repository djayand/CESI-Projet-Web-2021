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
            echo "L'utilisateur est connecté";
            session_start();
            $_SESSION['pseudo'] = $pseudo;
            header('location: index.php');
        } else {
            echo "Erreur durant la connection";
        }
    }
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
var_dump($_POST);
?>
