<?php
// login.php

session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilisateurs WHERE mail = ?";

    // Utilisez une requête préparée pour sécuriser la requête
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    require_once('passwordUtils.php');

function getUser($userID) {
    // Utilisez la connexion à la base de données déjà établie
    global $pdo;

    $sql = "SELECT * FROM utilisateurs WHERE ID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userID]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

   
    if ($user && verifyPassword($password, $user['mdp'])) {
        $_SESSION['user_id'] = $user['ID'];
    
        // Redirection basée sur le rôle
        if ($user['role'] === 'admin') {
            header('Location: administration.php');
        } else {
            header('Location: tableau_de_bord.php');
        }
    } else {
        echo "Erreur d'authentification : Nom d'utilisateur ou mot de passe incorrect.";
    }
    
}

?>
