<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Adresse email invalide !");
    }

    // Insérer dans la base de données
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Erreur dans la requête SQL : " . $conn->error);
    }

    $stmt->bind_param("sss", $firstName, $lastName, $email);
    $stmt->execute();
    $stmt->close();

    // Rediriger vers la roue
    header("Location: play.php");
    exit();
}
?>
