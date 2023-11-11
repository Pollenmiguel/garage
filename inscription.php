<?php
// Inclure le fichier de gestion des mots de passe
require_once('passwordUtils.php');

// Ensuite, vous pouvez utiliser ces fonctions dans votre script
$password = "garagetest";
$hashedPassword = hashPassword($password);

// Le hachage du mot de passe est maintenant stocké dans $hashedPassword
// Vous pouvez l'insérer dans votre base de données lorsque vous enregistrez un nouvel utilisateur.
?>

<form method="post" action="traitement_inscription.php">
    <input type="text" name="nom" placeholder="Nom complet" required>
    <input type="email" name="email" placeholder="Adresse e-mail" required>
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
    <!-- Ajoutez d'autres champs si nécessaire -->
    <button type="submit">S'inscrire</button>
</form>
