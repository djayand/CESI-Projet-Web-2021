<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On détruit le cookie
setcookie('pseudo', $_COOKIE['pseudo'], time() - 1, null, null, false, true);

// On redirige le visiteur vers la page d'accueil
header ('location: index.php');
?>