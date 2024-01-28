<?php


// Configuration de la base de données
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';

// Création de la connexion à la base de données
$db = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>