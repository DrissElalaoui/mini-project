<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "mon_site"; 

$conn = new mysqli($host, $user, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}


$nom = $_POST['a'] ?? '';
$email = $_POST['b'] ?? '';
$sujet = $_POST['c'] ?? '';
$message = $_POST['d'] ?? '';


$sql = "INSERT INTO contact (nom, email, sujet, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nom, $email, $sujet, $message);


if ($stmt->execute()) {
    echo "Message envoyé avec succès.";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
