<?php
// Paramètres de la BDD
$host = 'localhost';
$dbname = 'societe';
$username = 'root';
$password = '';

try {
    // Connexion
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Config de PDO pour afficher les erreurs sous EXCEPTION
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion réussie à la base de données '$dbname' !";
} catch (PDOException $e) {
    // En cas d'échec, afficher un message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}