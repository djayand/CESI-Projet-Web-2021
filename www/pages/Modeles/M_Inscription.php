<?php
// Fichier qui assure l'inscription de l'utilisateur 
session_start();

if (!isset($_POST))
  exit();

// Récupération des données envoyées dans le formulaire d'inscription
$nom = $_POST['inom'];
$prenom = $_POST['iprenom'];
$mail = $_POST['iemail'];
$num = $_POST['inum'];
$login = $_POST['ilog'];
$mdp = sha1($_POST['imdp1']);
$promo = $_POST['ipromo'];
$centre = $_POST['icentre'];

// Connexion à la BDD
try {
  $db = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');

  // On crée une requête SQL pour s'inscrire sur la plateforme
  $sql = 'INSERT INTO 
  personne(ID_Personne, Nom, Prenom, Mail, Portable, Login, Mdp) 
  VALUES (NULL, :nom, :prenom, :mail, :num, :login, :mdp)';

  // On utilise les requêtes préparées pour protéger des injections SQL
  $sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute(array(':nom' => $nom, ':prenom' => $prenom, ':mail' => $mail, ':num' => $num, ':login' => $login, ':mdp' => $mdp));
  $req = $sth->fetchAll();

  // On redirige vers l'index
  header('location: ../VuesHTML/index.php');

} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}
