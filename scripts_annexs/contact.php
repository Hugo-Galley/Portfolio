<?php

$host = 'mysql-galleyhugo.alwaysdata.net';
$dbname = 'galleyhugo_bdd';
$user = '299799_hugo';
$password = 'pouleto23';
$nom = $_POST['nom'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$email = $_POST['email'];

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $stmt = $bdd->prepare("INSERT INTO contact (nom,sujet,message,email) VALUES(:nom,:sujet,:message,:email)");
    $stmt -> bindParam(':nom', $nom);
    $stmt -> bindParam(':sujet', $sujet);
    $stmt -> bindParam(':message', $message);
    $stmt -> bindParam(':email', $email);

    $stmt -> execute();

    // Affiche une pop-up JavaScript
    echo "<script>alert('Message envoyé avec succès!'); window.location.href='../contact.html';</script>";


} 
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}





?>