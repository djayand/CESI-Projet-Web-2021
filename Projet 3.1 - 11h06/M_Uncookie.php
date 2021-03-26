<?php
session_start();

setcookie('pseudo', 'João Félix', time() - 1, null, null, false, true);
setcookie('age', '21', time() - 1, null, null, false, true);
header ('location: index.php');
?>
