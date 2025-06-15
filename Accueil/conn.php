<?php
// Informations de connexion
$host = 'localhost';        // ou l'adresse IP du serveur MySQL
$dbname = 'voyage';  // nom de la base de données
$username = 'root';         // nom d'utilisateur MySQL
$password = '';             // mot de passe MySQL (vide par défaut sur XAMPP par exemple)

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Activer le mode exception pour les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    // En cas d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
