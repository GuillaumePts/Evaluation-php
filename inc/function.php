<?php

function autoInclude(string $file): void {
    // Récupération de tous les fichiers du répertoire 'includes' qui ont la double extension .inc.php
    $includedFiles = glob("./inc/*.inc.php");
    // Concaténation du nom de fichier avec le chemin et l'extension
    $file = "./inc/" . $file . ".inc.php";

    // Si le nombre de fichiers dans le tableau est > 0 et que la chaîne de caractères $files est dans le tableau
    if (count($includedFiles) !== 0 && in_array($file, $includedFiles)) {
        require_once $file;
    } else {
        require_once './inc/accueil.inc.php';
    }
}


// function pdo() {
//     try {
//         $pdo = new PDO('mysql:host=localhost;dbname=blog-php', "root", "", array(
//             PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
//         ));
//         return $pdo;
//     } catch (PDOException $e) {
//         echo 'Erreur de connexion : ' . $e->getMessage();
//         return false;
//     }
// }