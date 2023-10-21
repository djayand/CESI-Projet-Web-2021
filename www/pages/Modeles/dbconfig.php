<?php

try
{
     $DB_con = new PDO('mysql:host=localhost;dbname=ldh;charset=utf8', 'root', 'joaofelix');
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception)
{
     echo $exception->getMessage();
}

include_once 'class.paging.php';
$paginate = new paginate($DB_con);
?>