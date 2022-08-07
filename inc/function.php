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
        $sql = "SELECT * FROM users WHERE email='$email'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $nbreLigne=$query->fetchAll();
        dump($nbreLigne);
        if (!empty($nbreLigne)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function inscrireUtilisateur(string $nom, string $prenom, string $email, string $mdp, string $roles='utilisateur'): bool {
    $mdp = password_hash("$mdp", PASSWORD_DEFAULT);
    ;

    global $pdo;
    if ($pdo) {
        $requeteInscription = "INSERT INTO users
        (nom, prenom, email, mdp, roles)
        VALUES (:nom, :prenom, :email, :mdp, :roles)";
        $query = $pdo->prepare($requeteInscription);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $query->bindValue(':roles', $roles, PDO::PARAM_STR);
        $query->execute();
        return true;
    } else {
        return false;
    }
}



function verifierLogin($email, $motdepasse) {
    global $pdo;
    if ($pdo) {
        if (verifierUtilisateur($email)) {
            $recupMdp = "SELECT mdp FROM users WHERE email='$email'";
            $resultRecupMdp = $pdo->query($recupMdp);
            $mdpBDD = $resultRecupMdp->fetchAll();
            $mdpBDD = $mdpBDD[0]['mdp'];

            if (password_verify($motdepasse, $mdpBDD)) 
                return true;
            else 
                return false;

        } else {
            return false;
        }
    } else {
        return false;
    }
}

function verifierAdmin(): bool {
    if (isset($_SESSION['login']) && $_SESSION['login'] === true && $_SESSION['role'] === 'admin') 
        return true;
    else
        return false;
}