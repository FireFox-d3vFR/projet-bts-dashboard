<?php
// Inclure le fichier database.php qui contient la fonction getConnection()
require_once 'database.php';
$conn = getConnection(); // Variable connection DB

// Fonction pour récupérer les dernières valeurs de as1
function getLastValuesAs1() {
    global $conn;
    $query = "SELECT * FROM as1 ORDER BY id_as1 DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return [
            'inclinaison' => $row['inclinaison'],
            'orientation' => $row['orientation'],
            'Ipan' => $row['Ipan'],
            'Upan' => $row['Upan'],
            'Ibat' => $row['Ibat'],
            'Ubat' => $row['Ubat']
        ];
    } else {
        return null; // Retourner null si aucune valeur trouvée
    }
}

// Fonction pour récupérer les dernières valeurs de as2
function getLastValuesAs2() {
    global $conn;
    $query = "SELECT * FROM as2 ORDER BY id_as2 DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return [
            'inclinaison' => $row['inclinaison'],
            'orientation' => $row['orientation'],
            'Ipan' => $row['Ipan'],
            'Upan' => $row['Upan'],
            'Ibat' => $row['Ibat'],
            'Ubat' => $row['Ubat']
        ];
    } else {
        return null; // Retourner null si aucune valeur trouvée
    }
}


// Fonction pour récupérer les dernières valeurs de rl1
function getLastValuesRl1() {
    global $conn;
    $query = "SELECT * FROM rl1 ORDER BY id_rl1 DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Récupérer les valeurs
        $row = mysqli_fetch_assoc($result);
        return [
            'IconsLART' => $row['IconsLART'],
            'IconsTUTELO' => $row['IconsTUTELO'],
            'IconsPAR58' => $row['IconsPAR58'],
            'duree' => $row['duree']
        ];
    } else {
        return null; // Retourner null en cas d'erreur ou de résultat vide
    }
}

// Fonction pour récupérer les dernières valeurs de rl2
function getLastValuesRl2() {
    global $conn;

    $query = "SELECT * FROM rl2 ORDER BY id_rl2 DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Récupérer les valeurs
        $row = mysqli_fetch_assoc($result);
        return [
            'IconsLART' => $row['IconsLART'],
            'IconsTUTELO' => $row['IconsTUTELO'],
            'IconsPAR58' => $row['IconsPAR58'],
            'duree' => $row['duree']
        ];
    } else {
        return null; // Retourner null en cas d'erreur ou de résultat vide
    }
}
