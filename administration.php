<?php

// administration.php

session_start();
include('config.php');

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Inclure votre script de gestion des utilisateurs pour récupérer les informations de l'administrateur

// Utilisation de la nouvelle colonne mdp
require_once('passwordUtils.php');
$user = getUser($_SESSION['user_id']);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Administration</title>
</head>
<body>
    <h1>Bienvenue dans l'Administration, <?php echo $user['nom']; ?></h1>
    <a href="deconnexion.php">Déconnexion</a>
</body>
</html>
