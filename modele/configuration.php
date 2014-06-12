<?php

// Parametres de connexion à la bdd
$mysql_host = 'localhost';
$mysql_db = 'calculatrice';
$mysql_login = 'root';
$mysql_pass = '';

$link = mysqli_connect($mysql_host, $mysql_login, $mysql_pass, $mysql_db) or die('Pbm connexion').mysqli_error();






