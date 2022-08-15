<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-back.css">
    <title>Evaluation-blog</title>

    <style>
        *{
            color: var(--mouse-x)
        }

        /* body{
            background-color: var(--mouse-y);
        } */
    </style>
</head>
<body>
    <header>
        
        <h1>hello admin</h1>
       
        
      
      
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=ml">Mentions légales</a></li>
                <li><a href="index.php?page=listearticle">articles</a></li>
                <li><a href="index.php?page=listeuser">useurs</a></li>
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
   

   