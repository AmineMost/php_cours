<?php
// Paramètres de la BDD
$host = 'localhost';
$dbname = 'societe';
$username = 'root';
$password = '';

try {
    // Connexion
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Requête d'insertion
    $sql = "INSERT INTO dirigeants (prenom, nom, poste, email, salaire, date_embauche) 
            VALUES ('Gugus', 'Mougou', 'Directeur Général', 'gugus.mougou@example.com', 90000.00, '2024-09-02')";
    
    $affectedRows = $pdo->exec($sql);
    $lastInsertId = $pdo->lastInsertId();
    
    // Affichage des résultats
    echo "Insertion réussie. Nombre de lignes affectées : $affectedRows. ID du dirigeant inséré : $lastInsertId.";
    
} catch (PDOException $e) {
    // En cas d'échec, afficher un message d'erreur
    echo "Erreur lors de l'insertion : " . $e->getMessage();
}
