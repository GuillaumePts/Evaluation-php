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


function verifierUtilisateur($email) {
    global $pdo;
    if ($pdo ) {
        $sql = "SELECT COUNT(*) FROM users WHERE email='$email'";
        $reponse = $pdo->query($sql);
        $nbreLigne = $reponse->fetchColumn();
        if ($nbreLigne > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function inscrireUtilisateur(string $nom, string $prenom, string $email, string $mdp): bool {
    $mdp = password_hash("$mdp", PASSWORD_DEFAULT);
    ;

    global $pdo;
    if ($pdo) {
        $requeteInscription = "INSERT INTO users
        (nom, prenom, email, mdp)
        VALUES (:nom, :prenom, :email, :mdp)";
        $query = $pdo->prepare($requeteInscription);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $query->execute();
        return true;
    } else {
        return false;
    }
}
