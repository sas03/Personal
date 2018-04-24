<?php
session_start();
//Connexion à la base de données
/*$dsn = 'mysql:dbname=personal;host=127.0.0.1';
$hote = 'localhost';
$user = 'root';
$password = '';*/

$dsn = 'mysql:dbname=stephanesumo_monsite;host=mysql-stephanesumo.alwaysdata.net';
$hote = 'localhost';
$user = '152503';
$password = 'password';


try{
    $dbh = new PDO($dsn,$user,$password);
    $titre = "Connexion";
} catch (PDOException $e){
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>