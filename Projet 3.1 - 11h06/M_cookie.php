<?php
session_start();
setcookie('pseudo','João Félix', time() + 365*24*3600, null, null, false, true); 
setcookie('age','21', time() + 365*24*3600, null, null, false, true); 
header ('location: index.php');
?>