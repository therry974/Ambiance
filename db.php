<?php
$host = 'localhost';
$db = 'calendrier_avent';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>
