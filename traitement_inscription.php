 <?php
require_once('config.php');

$nom = $_POST['nom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

require_once('passwordUtils.php');
$hashedPassword = hashPassword($mot_de_passe);

// Utilisation de la nouvelle colonne mdp
$sql = "INSERT INTO utilisateurs (nom, mail, mdp, role) VALUES (?, ?, ?, 'admin')";

$stmt = $pdo->prepare($sql);

try {
    if ($stmt->execute([$nom, $email, $hashedPassword])) {
        header('Location: confirmation.php');
    } else {
        echo "Erreur d'inscription : Veuillez réessayer.";
    }
} catch (PDOException $e) {
    echo "Erreur d'inscription : " . $e->getMessage();
}
?> 
