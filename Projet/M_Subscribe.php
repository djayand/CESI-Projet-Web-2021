<?php
session_start();

if (!isset($_POST))
    exit();

//Récupération des données envoyées
$nom = $_POST['inom'];
$prenom = $_POST['iprenom'];
$mail = $_POST['iemail'];
$num = $_POST['inum'];
$login = $_POST['ilog'];
$mdp = $_POST['imdp1'];
$mdpverif = $_POST['imdp2'];

// Connexion à la BDD
try {
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

    // On créé une requête de recherche
    $q = "INSERT INTO personne 
    (ID_Personne, Nom, Prenom, Mail, Portable, Login, Mdp) 
    VALUES '(NULL, .$db->quote($nom)', '$db->quote($prenom)', '$db->quote($mail)', '$db->quote($num)', '$db->quote($login)', '$db->quote($mdp)')";
    $r = $db->query($q);

    // Vérification de l'existance de la personne
    if (!$r) {
        throw new Exception("Erreur dans la requete");
    } else {
        if ($r->fetch()) {
            echo "L'utilisateur est inscrit";
            header('location: index.php');
        } else {
            echo "Erreur durant la connection";
        }
    }
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
var_dump($_POST);
