<?php


// Configuration de la base de données
$dsn = 'mysql:host=localhost;port=3307;dbname=spacecine';
$username = 'root';
$password = '';


// Création de la connexion à la base de données
$db = new mysqli($dsn, $username, $password);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>
