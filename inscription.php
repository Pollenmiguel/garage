<?php
require_once('passwordUtils.php');

$password = "garagetest";
$hashedPassword = hashPassword($password);


?>

<form method="post" action="traitement_inscription.php">
    <input type="text" name="nom" placeholder="Nom complet" required>
    <input type="email" name="email" placeholder="Adresse e-mail" required>
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
    <button type="submit">S'inscrire</button>
</form>
