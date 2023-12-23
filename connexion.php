<?php
session_start();
$bdd = new pdo("mysql:host=localhost; dbname=bddchat; charset=utf8",  'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>