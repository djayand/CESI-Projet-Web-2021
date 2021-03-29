<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On détruit les cookies
setcookie('pseudo', '', time() - 1);
setcookie('ID', '', time() - 1);

// On redirige le visiteur vers la page d'accueil
header ('location: index.php');
?>