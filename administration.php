<?php

// administration.php

session_start();
require_once('config.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


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
