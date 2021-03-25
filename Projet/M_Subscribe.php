<?php
session_start();

if (!isset($_POST))
    exit();

// Récupération des données envoyées dans le formulaire d'inscription
$nom = $_POST['inom'];
$prenom = $_POST['iprenom'];
$mail = $_POST['iemail'];
$num = $_POST['inum'];
$login = $_POST['ilog'];
$mdp = $_POST['imdp1'];
$mdpverif = $_POST['imdp2'];
$promo = $_POST['ipromo'];
$centre = $_POST['icentre'];

// Connexion à la BDD
try{
    $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    // Requête d'insertion de données
    $q = "INSERT INTO personne(ID_Personne, Nom, Prenom, Mail, Portable, Login, Mdp) VALUES (NULL,'$nom','$prenom','$mail','$num','$login','$mdp')";

    $db->exec($q);
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}

var_dump($_POST);
?>
