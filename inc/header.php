<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Evaluation-blog</title>
</head>
<body>
    <header>
        
        <h1>Mon titre</h1>
        <?php
        if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            echo "<p>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</p>";
        }
        
      
        ?>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=ml">Mentions légales</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li><a href="index.php?page=inscription">Inscription</a></li>
            </ul>
            <div class="login">
                
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo '<li><a href="index.php?page=deconnexion">Déconnexion</a></li>';
                    echo '<li><a href="index.php?page=compte">Mon compte</a></li>'; 
                } else {
                    echo '<li><a href="index.php?page=connexion">Connexion</a></li>';
                                    
                }
                ?>
            </div>
        </nav>

    </header>
   

   