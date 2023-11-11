<?php

require_once('passwordUtils.php');
// Paramètres de connexion à la base de données
$host = "localhost"; // Adresse du serveur de base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = "lunatic"; // Mot de passe de la base de données
$database = "garage"; // Nom de la base de données

// Créez une instance de la connexion PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Définissez le mode d'erreur PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
