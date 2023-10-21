<?php

// Fonction vérification de fonction
function Verification($verif) {
	if (!preg_match(' #^[a-zA-Z0-9]*$#', $verif)) {
        htmlspecialchars($verif);
        return $verif;
	} 
}

/*
function VerificationEmail($verif) {
	if(!empty($verif)) {
		if(!filter_var($verif, FILTER_VALIDATE_EMAIL)) {
			 echo "Adresse e-mail invalide";
		}
   }
} */

function VerificationPwd($verif)
{
#   TRIM----------
$verif = trim($verif) ;
if (strlen($verif) == 0) return 'Entrez un mot de passe !' ;
if (strlen($verif) < 4) return '4 caractères sont requis !' ;   
#   VERIFICATION----------
if ( !preg_match("~^[\w]$~", $verif) ) return "Caractères non autorisés" ;    
if ( !preg_match("~[A-Z]~", $verif) ) return "Au moins une Majuscule !" ;
if ( !preg_match("~[0-9]~", $verif) ) return "Au moins un chiffre !" ;
#   OK----------
return ' ';
}

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}



