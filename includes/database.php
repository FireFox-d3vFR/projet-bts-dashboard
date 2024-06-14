<?php
// Inclure le fichier de configuration
require_once 'config.php';

// Fonction pour établir la connexion à la base de données
function getConnection() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    // Vérifier la connexion
    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }

    return $conn;
}
